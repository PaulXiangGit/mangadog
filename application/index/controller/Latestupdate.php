<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2019/3/27
 * Time: 9:28
 */

namespace app\index\controller;
use app\common\controller\Frontend;
use think\Db;

class Latestupdate extends Frontend
{
    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';
    //每页显示更新的章节数
    protected $update_num = 10;
    public function index(){
        $page = input("page",1);
        $data['page'] = $page;
        $data['seo_config'] = $this->getSeoConfig();
        $this->assign($data);
        return $this->fetch();
    }

    public function getUpdateResult(){
        $page = input("page",1);
        $start = ($page-1)*($this->update_num);
        $chapter_tmp_list_id = Db::name("comic_chapter")->orderRaw("max_create_time desc")->group("comic_id")->limit($start,$this->update_num)->field("max(id) AS id,max(create_time) AS `max_create_time`")->select();
        $chapter_list_id = array();
        foreach($chapter_tmp_list_id AS $value){
            $chapter_list_id[] = $value['id'];
        }
        $chapter_tmp_list = Db::name("comic_chapter")->where("id","IN",$chapter_list_id)->field("id AS chapter_id,comic_id,name,create_date")->order("create_time DESC")->select();
        //对取到的数据按所属漫画归类
        $comic_list = array();
        foreach($chapter_tmp_list AS $value1){
            $flag = false;
            //$comic_name = Db::name("comic_config")->where(['id'=>$value1['comic_id']])->find()['name'];
            $comic_id = $value1['comic_id'];
            $create_date = $value1['create_date'];
            $value1['comic_search_name'] = Db::name("comic_config")->where(['id'=>$comic_id])->value("search_name");
            $this->simplifyChapterName($value1['name']);
            $count = 0;
            foreach($comic_list AS &$value2){
                if($value2["comic_id"]==$comic_id&&$value2['create_date']==$create_date){
                    $value2['chapters'][] = $value1;
                    $flag = true;
                    break;
                }
                $count++;
            }
            if(!$flag){
                $comic_list[$count] = [
                    "comic_id"=>$comic_id,
                    "create_date"=>$create_date,
                ];
                $comic_list[$count]['chapters'][] = $value1;
            }
        }
        //获取漫画名称,并将更新日期为今天和昨天的日期改名为today和yesterday
        foreach($comic_list AS &$value){
            $value['comic_name'] = htmlspecialchars_decode(Db::name("comic_config")->where(['id'=>$value['comic_id']])->field("name")->find()['name']);
            $today = Date("Y-m-d",time());
            $yesterday = Date("Y-m-d",time()-24*3600);
            if($value['create_date'] == $today){
                $value['create_date'] = 'today';
            }else if($value['create_date'] == $yesterday){
                $value['create_date'] = 'yesterday';
            }
        }
        //获取页数
        $count = Db::name("comic_config")->where("status",ConstParam::COMIC_STATUS_NORMAL)->field("count(*) AS `count`")->find()['count'];
        $page_num = ceil($count/$this->update_num);
        $this->output($comic_list,$page_num);
    }
}