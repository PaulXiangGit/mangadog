<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2019/3/20
 * Time: 14:33
 */

namespace app\index\controller;
use app\common\controller\Frontend;
use think\Db;

class Read extends  Frontend
{
    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';
    public function index()
    {
        $comic_name = input("name");
        if(empty($comic_name)){
            $this->go_to_index();
        }
        $comic_id = Db::name("comic_config")->where(["search_name"=>$comic_name])->find()['id'];
        $chapter_id = input("chapter_id");
        if(empty($comic_id) || empty($chapter_id)){
            $this->redirect("/index");
        }
        $comic_info = Db::name("comic_config")->where(["id"=>$comic_id,"status"=>ConstParam::COMIC_STATUS_NORMAL])->find();
        $chapter_info = Db::name("comic_chapter")->where(["id"=>$chapter_id])->find();
        if(empty($comic_info)||empty($chapter_info)){
            $this->redirect("/index");
        }
        //获取漫画图片信息
        $image_list = Db::name("comic_chapter_image")->where(["chapter_id"=>$chapter_id])->select();
        //获取该漫画有多少节
        $chapter_list = Db::name("comic_chapter")->where(["comic_id"=>$comic_id])->field("id,name")->order("id desc")->select();
        //获取上一章节和下一章节的链接地址
        $last_chapter_link = $next_chapter_link ="";
        for($i=0;$i<count($chapter_list);$i++)
        {
            if($chapter_list[$i]["id"]==$chapter_id){
                if($i>0){
                    $next_chapter_link = "/read/".$comic_info['search_name']."/".$chapter_list[$i-1]['id'].".html";
                }
                if($i<(count($chapter_list)-1)){
                    $last_chapter_link = "/read/".$comic_info['search_name']."/".$chapter_list[$i+1]['id'].".html";
                }
                break;
            }
        }
        $data['comic_info'] = $comic_info;
        $data['chapter_info'] = $chapter_info;
        $data['chapter_list'] = $chapter_list;
        $data['last_chapter_link'] = $last_chapter_link;
        $data['next_chapter_link'] = $next_chapter_link;
        $data["image_list"] = $image_list;
        $data['seo_config'] = $this->getSeoConfig($comic_info['name'],$chapter_info['name']);
        $this->assign($data);
        return $this->fetch();
    }
}