<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2019/3/19
 * Time: 15:50
 */

namespace app\index\controller;
use app\common\controller\Frontend;
use think\Db;
use app\index\controller\ConstParam;
class Detail extends Frontend
{
    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';

    private $show_chapter_num = 20;
    public function index(){
        $comic_name = input("comic_name","");
        if(empty($comic_name)){
            $this->go_to_index();
        }
        $comic_id = Db::name("comic_config")->where(['search_name'=>$comic_name,"status"=>ConstParam::COMIC_STATUS_NORMAL])->value("id");
        if(empty($comic_id)){
            $this->go_to_index();
        }

        //获取漫画基本信息
        $comic_info = Db::name("comic_config")->where(["id"=>$comic_id,"status"=>ConstParam::COMIC_STATUS_NORMAL])->find();
        if(empty($comic_info)){
            $this->go_to_index();
        }
        //获取漫画章节信息
        $latest_chapter = Db::name("comic_chapter")->field("id,name,create_date")->where(["comic_id"=>$comic_id])->order("id desc")->limit(1)->find();
        //关键词列表
        $classification_list = array();
        if(!empty($comic_info['main_subject'])){
            $subject_id_str = $comic_info['main_subject'];
            if(!empty($comic_info['sub_subject'])){
                $subject_id_str .= ",".$comic_info['sub_subject'];
            }
            $classification_list = Db::name("classification")->where('id',"in",$subject_id_str)->select();
        }
        //生成漫画封面alt标签
        $comic_info['image_alt'] = $this->getImageAlt($comic_info['name'],$latest_chapter['name']);
        //如果作者名中只剩',',则视为空字符串
        $artist_test = str_replace(",","",$comic_info['artist']);
        if(empty($artist_test)){
            $comic_info['artist'] = "";
        }
        //将作者名重组为数组
        if(!empty($comic_info['artist'])){
            $comic_info['artist'] = explode(",",$comic_info['artist']);
        }
        $data['classification_list'] = $classification_list;
        $data['comic_info'] = $comic_info;
        //$data['chapter_list'] = $chapter_list;
        $data['recommend_comic_list'] = $this->getRecomandComicList($comic_info['main_subject'],4,$comic_id);
        $data['seo_config'] = $this->getSeoConfig($comic_info['name']);
        $this->assign($data);
        return $this->fetch();
    }

    /**
     * 生成推荐列表
     * @param $main_subject_id 推荐漫画主题
     * @param $num 推荐漫画数量
     * @param $comic_id 漫画id
     * @return array|false|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getRecomandComicList($main_subject_id,$num,$comic_id)
    {
        //取出该主题下浏览量前20名的漫画(不包括id为$comic_id的漫画),从中取出$num个
        $recommend_condition = [
            'status'=>ConstParam::COMIC_STATUS_NORMAL,
            'id'=>['NEQ',$comic_id],
            'main_subject'=>$main_subject_id,
        ];
        $recommend_comic_list = Db::name("comic_config")->where($recommend_condition)->order('views DESC')->limit(20)->select();
        //如果不足20个,则从最热门的漫画中进行补充
        $shortfall = 20 - count($recommend_comic_list);
        if($shortfall > 0){
            $recommend_comic_list_id = array();
            foreach($recommend_comic_list AS $value){
                $recommend_comic_list_id[] = $value['id'];
            }
            $compensate_recommend_comic_list = Db::name("comic_config")->where(['id'=>['NOT IN',$recommend_comic_list_id],'status'=>ConstParam::COMIC_STATUS_NORMAL])->limit($shortfall)->select();
            $recommend_comic_list = array_merge($recommend_comic_list,$compensate_recommend_comic_list);
        }
        //从漫画列表中随机选取4个
        $random_key =array_rand($recommend_comic_list, $num);
        $tmp_recommend_comic_list = $recommend_comic_list;
        $recommend_comic_list = array();
        foreach($random_key AS $value){
            $element = $tmp_recommend_comic_list[$value];
            //$element['main_subject_text'] = Db::name("classification")->where(["id"=>$element['main_subject']])->find()['name'];暂不显示主分类
            $chapter_name = Db::name("comic_chapter")->order("id desc")->limit(1)->where(["comic_id"=>$element['id']])->find()['name'];
            $element['image_alt'] = $this->getImageAlt($element['name'],$chapter_name);
            $recommend_comic_list[]=$element;
        }
        return $recommend_comic_list;
    }

    public function getChapterList()
    {
        $data = array();
        $page_size = $this->show_chapter_num;
        $comic_id = input("comic_id");
        $page = input("page",1);
        $comic_search_result = Db::name("comic_config")->where(["id"=>$comic_id,"status"=>ConstParam::COMIC_STATUS_NORMAL])->find();
        if(empty($comic_id) || empty($comic_search_result)){
            $ret = [
                "pageNum"=>0,
                "data"=>$data
            ];
            $this->output($ret);
        }
        $count = Db::name("comic_chapter")->where(['comic_id'=>$comic_id])->field("count(*) AS `count`")->find()['count'];
        $page_num = ceil($count/$this->show_chapter_num);
        if($count>0){
            $start = ($page-1)*$page_size;
            $data = Db::name("comic_chapter")->where(['comic_id'=>$comic_id])->order("id desc")->limit($start,$page_size)->field("create_date,name,id")->select();
            foreach($data AS &$value){
                $this->simplifyChapterName($value['name'],"Chapter ");
            }
        }
        $ret = [
            "pageNum"=>$page_num,
            "data"=>$data
        ];
        $this->output($ret);

    }

    public function test(){
        echo '<pre>';
        die(var_dump(Db::name("comic_config")->where(['id'=>100])->value("search_name")) . '<pre>');
        $value1['comic_search_name'] =
        $str = "name1&name2 asdsad &amp; &lt;";
        echo '<pre>';
        die(var_dump($this->getNameUrl($str)) . '<pre>');
    }

    function getNameUrl($str)
    {
        $str = htmlspecialchars_decode($str);
        $str = preg_replace("/[^a-zA-Z0-9 ]+/", '', $str);

        if ($str) {
            $str=trim($str);
            $str = preg_replace("/[\s]+/", '-', $str);
        }
        return $str;
    }
}