<?php

namespace app\queue\controller;

use think\Config;
use think\Controller;
use think\Db;
use think\Exception;

class Test extends Controller
{

    /**
     * 过滤掉emoji表情
     * @param $str string 字符串
     * @return string|string[]|null
     */
    function filterEmoji($str)
    {
        $str = preg_replace_callback('/./u',
            function (array $match) {
                return strlen($match[0]) >= 4 ? '' : $match[0];
            },
            $str);
        return $str;
    }

    /**
     * 更新漫画列表
     * php /var/www/html/mangadog/public/index.php queue/Test/index
     */
    public function index()
    {
        try {
            $str = "dentro al manga non ce nienteee😭";
            echo '<pre>';
            die(var_dump($this->filterEmoji($str)) . '<pre>');

//            Config::set('database.hostname', '47.88.168.142');
//            Config::set('database.database', 'comic');
//            Config::set('database.username', 'root');
//            Config::set('database.password', 'sWeXLTfN8PtxDNlW');
//            Config::set('database.prefix', 'co_');
            Config::set('database.charset', 'utf8mb4');
            $info = Db::name('comic_config')->find();
            echo '<pre>';
            die(var_dump($info) . '<pre>');
        } catch (Exception $exception) {
            echo $exception->getFile();
            echo $exception->getLine();
            echo Db::getLastSql() . PHP_EOL;
            echo $exception->getMessage() . PHP_EOL;
            echo $exception->getTraceAsString() . PHP_EOL;
        }

    }
}