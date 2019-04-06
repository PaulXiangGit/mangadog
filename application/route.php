<?php

// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
//Route::rule('detail/:comic_name','index/detail/index');
//Route::rule('latest-released',"index/latestupdate/index");
//Route::rule('completed/[:name]','index/classification/index?state=complete');
//Route::rule('ongoing/[:name]','index/classification/index?state=update');
Route::rule(
    [
        'detail/[:comic_name]'=>'index/detail/index',
        'latest-released/[:page]'=>"index/latestupdate/index",
        'completed/[:name]'=>'index/classification/index?state=complete',
        'ongoing/[:name]'=>'index/classification/index?state=update',
        'genre/[:name]'=>'index/classification/index',
        'read/[:name]/[:chapter_id]'=>'index/read/index',
        'artist/[:name]'=>'index/classification/artist',
    ]
);

return [
    //别名配置,别名只能是映射到控制器且访问时必须加上请求的方法
    '__alias__'   => [
    ],
    //变量规则
    '__pattern__' => [
    ],
//        域名绑定到模块
//        '__domain__'  => [
//            'admin' => 'admin',
//            'api'   => 'api',
//        ],
];
