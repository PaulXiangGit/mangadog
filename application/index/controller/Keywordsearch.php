<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2019/3/25
 * Time: 16:13
 */

namespace app\index\controller;
use app\common\controller\Frontend;
use think\Db;
class Keywordsearch extends Frontend
{
    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';

    public function index()
    {
        $keyword = input("query");
        if(empty($keyword)){
            echo json_encode(["suggestions"=>[]]);
        }
        $comic_list = Db::name("comic_config")->where("name","like","%".$keyword."%")->field("search_name,name")->select();
        $result = [];
        $count = 0;
        foreach($comic_list AS $value){
            $result[$count]['value'] = $value['name'];
            $result[$count]['data'] = $value['search_name'];
            $count++;
        }
        echo json_encode(["suggestions"=>$result]);
    }

    public function test()
    {
        return $this->fetch();
    }

}