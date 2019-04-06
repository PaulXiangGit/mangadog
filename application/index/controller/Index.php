<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use app\common\library\Token;
use think\Db;

class Index extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';

    //首页热门默认展示漫画数量
    public $comic_num = 12;
    //首页排行默认展示漫画数量
    public $rank_comic_num = 10;
    public function _initialize()
    {
        parent::_initialize();
    }

    public function index()
    {
        //获取左侧展示的热门漫画
        $data['comic_list'] = $this->getHotComicList();
        //获取右侧展示的排行榜漫画
        $data['top_rank_list'] = $this->getTopRankList();
        $data['seo_config'] =  $this->getSeoConfig();
        $this->assign($data);
        return $this->view->fetch();
    }

    public function getHotComicList()
    {
        //获取章节数最多的漫画列表
        $tmp_invalid_comic_id_list = Db::name("comic_config")->where(["status"=>ConstParam::COMIC_STATUS_INVALID])->select();
        $invalid_comic_id_list = array();
        foreach($tmp_invalid_comic_id_list AS $value){
            $invalid_comic_id_list[] = $value['id'];
        }
        $comic_list_id_result = Db::name("comic_chapter")->field("comic_id,count(*) AS `count`")->where("comic_id","not in",$invalid_comic_id_list)->orderRaw("`count` DESC")->group("comic_id")->limit(0,$this->comic_num)->select();
        $comic_list_id = array();
        foreach($comic_list_id_result AS $value){
            $comic_list_id[] = $value['comic_id'];
        }
        $comic_list = Db::name("comic_config")->where("id","IN",$comic_list_id)->limit(0,$this->comic_num)->select();
        //对$comic_list的排序按$comic_list_id的顺序进行重排
        $comic_list_tmp = $comic_list;
        $comic_list = [];
        foreach($comic_list_id AS $value1){
            foreach($comic_list_tmp AS $value2){
                if($value1 == $value2['id']){
                    $comic_list[] = $value2;
                }
            }
        }
        //获取每部漫画的最新章节信息
        foreach($comic_list AS &$value)
        {
            $result= Db::name("comic_chapter")->where(["comic_id"=>$value['id']])->order("id","desc")->field("id,name")->find();
            $value['latest_chapter_name'] = $result['name'];
            $value['latest_chapter_id'] = $result['id'];
            $value['image_alt'] = $this->getImageAlt($value['name'],$value['latest_chapter_name']);
        }
        return $comic_list;
    }

    public function getTopRankList(){
        //获取浏览数排行数据
        $rank_list = Db::name("comic_config")->where(["status"=>ConstParam::COMIC_STATUS_NORMAL])->order("views DESC")->LIMIT($this->rank_comic_num)->select();
        return $rank_list;
    }

    public function test(){
        $list=Db::name('admin')->select();
        echo '<pre>';
        die(var_dump($list) . '<pre>');
    }


    public function indextest(){
        return $this->fetch();
    }

}
