<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2019/3/21
 * Time: 14:36
 */

namespace app\index\controller;
use app\common\controller\Frontend;
use think\Db;
class Classification extends Frontend
{
    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';

    private $classification_page_size = 10; //每次查询5个漫画
    public function index()
    {
        $state = input("state");
        $classification_list = $this->getClassificationList($state);
        $classification_name = input("name");
//        if(empty($classification_name)){
//            $classification_id = input("classification");
//            if(!empty($classification_id)){
//                $classification_name = Db::name("classification")->where(["id"=>$classification_id])->find()['name'];
//            }
//        }else{
        $classification_id = "";
        if(!empty($classification_name)) {
            $classification_id = Db::name("classification")->where(['search_name' => $classification_name])->find()['id'];
        }
//        if(empty($classification_id)){
//            $this->redirect("/index/index");
//            exit();
//        }
//        }
        $page = input("page",1);
        $data['classification'] = $classification_id;
        $data['classification_list'] = $classification_list;
        $data['classification_text'] = $classification_name;
        $data['page'] = $page;
        $data['state'] = $state;
        $data['seo_config'] = $this->getSeoConfig();
        $data['type']="classification";
        $this->assign($data);
        return $this->fetch();
    }

    public function getClassificationList($state=""){
        $list =  Db::name("classification")->select();
        if($state=="complete"){
            $url = "/completed/";
        }elseif($state=="update"){
            $url = "/ongoing/";
        }else{
            $url = "/genre/";
        }
        foreach($list AS &$value){
            $value['url'] = $url.$value['search_name'].".html";
        }
        return $list;
    }
    public function artist(){
        $name = input("name");
        if(empty($name)){
            $this->go_to_index();
        }
        $classification_list = $this->getClassificationList();
        $page = input("page",1);
        $data['classification_list'] = $classification_list;
        $data['page'] = $page;
        $data['type']="artist";
        $data['artist']=$name;
        $this->assign($data);
        return $this->fetch("index");
    }

    public function search(){
        $classification_id = input("classification");
        $page = input("page");
        $state = input("state");
        $page_size = $this->classification_page_size;
        $start = ($page - 1) * $page_size;
        if(!empty($classification_id)) {
            //先确认分类是否存在,不存在则默认为第一个分类
            $classification_id_result = Db::name("classification")->where(["id" => $classification_id])->find();
            if (empty($classification_id_result)) {
                $classification_id = Db::name("classification")->field("id")->find()["id"];
            }
            $search_condition = ["main_subject" => $classification_id, "status" => ConstParam::COMIC_STATUS_NORMAL];
            if ($state) {
                $search_condition = array_merge($search_condition, ["state" => $state]);
            }

            $count = Db::name("comic_config")->where($search_condition)->limit($start, $page_size)->field("count(*) AS `count`")->find()['count'];
            $data = array();
            if ($count > 0) {
                $data = Db::name("comic_config")->where($search_condition)->limit($start, $page_size)->select();
            }

        }else{
            $search_condition = ["status" => ConstParam::COMIC_STATUS_NORMAL];
            if ($state) {
                $search_condition = array_merge($search_condition, ["state" => $state]);
            }
            //classification参数为空的情况下默认按浏览量展示
            $count = Db::name("comic_config")->where($search_condition)->field("count(*) AS `count`")->find()['count'];

            $data = array();
            if($count>0){
                $data = Db::name("comic_config")->where($search_condition)->order("views DESC")->limit($start, $page_size)->select();
            }
        }
        if(!empty($data)){
            foreach ($data AS &$value) {
                //获取关键词名称
                if (!empty($value['sub_subject'])) {
                    $value['sub_subject'] = explode(",", $value['sub_subject']);
                    $value['sub_subject_text'] = $this->getSubjectText($state,$value['sub_subject']);
                }
                $value['main_subject_text'] = $this->getSubjectText($state,$value['main_subject']);
                }
        }
        $page_num = ceil($count / $page_size);
        $result = [
            "pageNum" => $page_num,
            "data" => $data,
        ];
        $this->output($result);
    }

    public function searchArtist()
    {
        $name = input("artist");
        if(empty($name)){
            $result = [
                "pageNum"=>0,
                "data"=>array(),
            ];
            $this->output($result);
        }
        $page = input("page");
        $page_size = $this->classification_page_size;
        $start = ($page - 1) * $page_size;
        $count = Db::name("comic_config")->where("(FIND_IN_SET('$name',artist)>0)")->where("status",ConstParam::COMIC_STATUS_NORMAL)->limit($start,$page_size)->field("count(*) AS `count`")->find()['count'];
        $page_num = ceil($count/$page_size);
        $data = array();
        if($page_num>0){
            $data = Db::name("comic_config")->where("(FIND_IN_SET('$name',artist)>0)")->where("status",ConstParam::COMIC_STATUS_NORMAL)->limit($start,$page_size)->select();
            foreach ($data AS &$value) {
                //获取关键词名称
                if (!empty($value['sub_subject'])) {
                    $value['sub_subject'] = explode(",", $value['sub_subject']);
                    $value['sub_subject_text'] = $this->getSubjectText("",$value['sub_subject']);
                }
                $value['main_subject_text'] = $this->getSubjectText("",$value['main_subject']);
            }
        }
        $result = [
            "pageNum"=>$page_num,
            "data"=> $data,
        ];
        $this->output($result);
    }

    public function getSubjectText($state,$subject,$limit = 4)
    {
        if($state=="complete"){
            $url = "/completed/";
        }elseif($state=="update"){
            $url = "/ongoing/";
        }else{
            $url = "/genre/";
        }
        $result=array();
        if(is_array($subject)){
            $count = 0;
            foreach($subject AS $value){
                if($count>$limit-1){
                    break;
                }
                $classification = Db::name("classification")->field("name,search_name")->where(['id'=>$value])->find();
                $result[$count]['text'] = $classification['name'];
                $result[$count]['url'] = $url.$classification['search_name'].".html";
                $count++;
            }
        }else{
            $classification = Db::name("classification")->field("name,search_name")->where(['id'=>$subject])->find();
            $result['text'] = $classification['name'];
            $result['url'] = $url.$classification['search_name'].".html";
        }
        return $result;
    }

}