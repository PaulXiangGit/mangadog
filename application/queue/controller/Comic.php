<?php

namespace app\queue\controller;

use think\Controller;
use think\Db;
use think\Exception;

class Comic extends Controller
{
    const PATH = "http://47.88.168.142/file/comic/";
    const COMIC_LIST_URL_TEMPLATE = "{path}comic_list.json";
    const COMIC_CHAPTER_URL_TEMPLATE = "{path}{comic_obj_id}.json";

    public function _initialize()
    {
        parent::_initialize();
        $this->comic_list_url = str_replace("{path}", self::PATH, $this->comic_list_url);
    }

    /**
     * 更新漫画列表
     * php /var/www/html/mangadog/public/index.php queue/Comic/updateComic
     */
    public function updateComic()
    {
        $url = self::COMIC_LIST_URL_TEMPLATE;
        $url = str_replace("{path}", self::PATH, $url);

        $curl = new \Curl();
        $curl->setOpt(CURLOPT_TIMEOUT, 10);
        $list = $curl->get($url)->getResponse();
        if (!$list) {
            return;
        }
        foreach ($list as $id) {
            $comic_id = Db::name('comic_config')->where('obj_id', $id)->value("id");
            if ($comic_id) {
                continue;
            }

            Db::name('comic_config')->insert([
                'obj_id' => $id,
            ]);
        }
    }

    /**
     * 更新章节以及图片相关的数据
     *
     * php /var/www/html/mangadog/public/index.php queue/Comic/updateChapter
     */
    public function updateChapter()
    {
        try {
            $update_table = "comic_update_log";
            $list = Db::name('comic_config')
                ->field("id,obj_id")
                ->where('obj_id', 'neq', 0)
                ->select();

            $curl = new \Curl();
            $curl->setOpt(CURLOPT_TIMEOUT, 10);


            foreach ($list as $value) {
                $comic_id = $value['id'];
                $comic_obj_id = $value['obj_id'];
                $log_title = "[ $comic_id ]";
                echo $log_title . PHP_EOL;

                $url = self::COMIC_CHAPTER_URL_TEMPLATE;
                $url = str_replace("{path}", self::PATH, $url);
                $url = str_replace("{comic_obj_id}", $comic_obj_id, $url);
//                echo $url.PHP_EOL;
//                continue;

                $headers = get_headers($url, true);
                if (!$headers) {
                    continue;
                }

                //获取数据文件的信息，如果本地更新了，就不再更新数据
                $content_length = (int)$headers['Content-Length'];
                $last_modified = $headers['Last-Modified'];
                $last_time = date("Y-m-d H:i:s", strtotime($last_modified));
                $update_info = Db::name($update_table)
                    ->field("content_length,last_update_time")
                    ->where('obj_id', $comic_obj_id)
                    ->find();
                if ($last_time <= $update_info['last_update_time'] && $content_length <= $update_info['content_length']) {
                    echo $log_title . "没有变化！" . PHP_EOL;
                    continue;
                }
                $data = $curl->get($url)->getResponse();
                if (!$data) {
                    echo $log_title . $url . "数据不存在！" . PHP_EOL;
                    continue;
                }
                $main_subject = "";
                $sub_subject = "";
                $artist = $data['authors'];
                $genres = explode(",", $data['genres']);
                foreach ($genres AS $value) {
                    $value = trim($value);
                    $subject_id = Db::name("classification")->where(["name" => $value])->find()['id'];
                    if (empty($subject_id)) {
                        continue;
                    }
                    if (empty($main_subject)) {
                        $main_subject = $subject_id;
                    } else {
                        if (empty($sub_subject)) {
                            $sub_subject = $subject_id;
                        } else {
                            $sub_subject .= "," . $subject_id;
                        }
                    }
                }
                //更新漫画表
                Db::name('comic_config')
                    ->where('id', $comic_id)
                    ->update([
                        'name' => $data['name'],
                        'title' => $data['title'],
                        'intro' => $data['desc'],
                        'image' => $data['image'],
                        'state' => $data['state'],
                        'status' => '1',
                        'views' => $data['views'],
                        'seo_title' => $data['seo_title'],
                        'seo_keywords' => $data['seo_keywords'],
                        'seo_description' => $data['seo_description'],
                        "artist" => $artist,
                        "main_subject" => $main_subject,
                        "sub_subject" => $sub_subject,
                        "search_name"=>strtolower($this->getNameUrl($data['name'])),
                    ]);


                $chapter_list = $data['chapter_list'];
                foreach ($chapter_list as $chapter_info) {
                    $chapter_obj_id = $chapter_info['id'];
                    //判断章节是否存在，存在就不再更新数据
                    if (Db::name('comic_chapter')->where('obj_id', $chapter_obj_id)->value('id')) {
                        continue;
                    }

                    //插入章节数据
                    $chapter_id = Db::name('comic_chapter')->insert([
                        'obj_id' => $chapter_obj_id,
                        'comic_id' => $comic_id,
                        'name' => $chapter_info['name'],
                        'title' => $chapter_info['title'],
                        'intro' => $chapter_info['desc'],
                        'seo_title' => $chapter_info['seo_title'],
                        'seo_keywords' => $chapter_info['seo_keywords'],
                        'seo_description' => $chapter_info['seo_description'],
                        'create_time' => date("Y-m-d H:i:s"),
                        'create_date' => date("Y-m-d"),
                    ], "", true);
                    $image_list = $chapter_info['image_list'];
                    foreach ($image_list as $image_info) {
                        //插入章节图片数据
                        Db::name('comic_chapter_image')->insert([
                            'chapter_id' => $chapter_id,
                            'image' => $image_info['image'],
                            'title' => $image_info['title'],
                            'alt' => $image_info['alt'],
                        ]);
                    }
                }


                //插入更新的日志
                $update_id = Db::name($update_table)->where("obj_id", $comic_obj_id)->value("id");
                $update_data = [
                    'obj_id' => $comic_obj_id,
                    'content_length' => $content_length,
                    'last_update_time' => $last_time,
                ];
                if ($update_id) {
                    Db::name($update_table)->where('id', $update_id)->update($update_data);
                } else {
                    Db::name($update_table)->insert($update_data);
                }
                echo $log_title . $url . "更新ok！" . PHP_EOL;
            }
        } catch (Exception $exception) {
            echo "comic_id:" . $comic_id . PHP_EOL;
            echo $exception->getMessage() . PHP_EOL;
            die("error---sql:" . Db::getLastSql());
        }
    }

    /**
     * 获取名称的URL
     * @param $str string 字符串
     * @return mixed|string|string[]|null
     */
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