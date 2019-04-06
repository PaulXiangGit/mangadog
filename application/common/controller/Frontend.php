<?php

namespace app\common\controller;

use app\common\library\Auth;
use think\Config;
use think\Controller;
use think\Hook;
use think\Lang;
use think\Db;
use think\Request;
/**
 * 前台控制器基类
 */
class Frontend extends Controller
{

    /**
     * 布局模板
     * @var string
     */
    protected $layout = '';

    /**
     * 无需登录的方法,同时也就不需要鉴权了
     * @var array
     */
    protected $noNeedLogin = [];

    /**
     * 无需鉴权的方法,但需要登录
     * @var array
     */
    protected $noNeedRight = [];

    /**
     * 权限Auth
     * @var Auth 
     */
    protected $auth = null;

    /**
     * 图片域名前缀
     */
    protected $image_url = "http://cdn.mangadog.club";

    /**
     * 图片alt标签值
     * @var string
     */
    protected $image_alt = "{comic} Manga Episode {chapter}";

    /**
     * facebook app_id
     */
    protected $facebook_app_id = "114485749503197";

    /**
     * 章节名多余字符列表
     */
    protected $chapter_redundant_words = ["ch."];
    public function _initialize()
    {
        //移除HTML标签
        $this->request->filter('strip_tags');
        $modulename = $this->request->module();
        $controllername = strtolower($this->request->controller());
        $actionname = strtolower($this->request->action());

        // 如果有使用模板布局
        if ($this->layout)
        {
            $this->view->engine->layout('layout/' . $this->layout);
        }
        $this->auth = Auth::instance();

        // token
        $token = $this->request->server('HTTP_TOKEN', $this->request->request('token', \think\Cookie::get('token')));

        $path = str_replace('.', '/', $controllername) . '/' . $actionname;
        // 设置当前请求的URI
        $this->auth->setRequestUri($path);
        // 检测是否需要验证登录
        if (!$this->auth->match($this->noNeedLogin))
        {
            //初始化
            $this->auth->init($token);
            //检测是否登录
            if (!$this->auth->isLogin())
            {
                $this->error(__('Please login first'), 'user/login');
            }
            // 判断是否需要验证权限
            if (!$this->auth->match($this->noNeedRight))
            {
                // 判断控制器和方法判断是否有对应权限
                if (!$this->auth->check($path))
                {
                    $this->error(__('You have no permission'));
                }
            }
        }
        else
        {
            // 如果有传递token才验证是否登录状态
            if ($token)
            {
                $this->auth->init($token);
            }
        }

        $this->view->assign('user', $this->auth->getUser());

        // 语言检测
        $lang = strip_tags(Lang::detect());

        $site = Config::get("site");

        $upload = \app\common\model\Config::upload();

        // 上传信息配置后
        Hook::listen("upload_config_init", $upload);

        // 配置信息
        $config = [
            'site'           => array_intersect_key($site, array_flip(['name', 'cdnurl', 'version', 'timezone', 'languages'])),
            'upload'         => $upload,
            'modulename'     => $modulename,
            'controllername' => $controllername,
            'actionname'     => $actionname,
            'jsname'         => 'frontend/' . str_replace('.', '/', $controllername),
            'moduleurl'      => rtrim(url("/{$modulename}", '', false), '/'),
            'language'       => $lang
        ];
        $config = array_merge($config, Config::get("view_replace_str"));

        Config::set('upload', array_merge(Config::get('upload'), $upload));
        // 配置信息后
        Hook::listen("config_init", $config);
        // 加载当前控制器语言包
        $this->loadlang($controllername);
        $this->assign("image_prefix",$this->image_url);
        $this->assign('site', $site);
        $this->assign('config', $config);
        $this->assign('now',time());
        $this->assign('facebook_app_id',$this->facebook_app_id);
    }

    /**
     * 加载语言文件
     * @param string $name
     */
    protected function loadlang($name)
    {
        Lang::load(APP_PATH . $this->request->module() . '/lang/' . Lang::detect() . '/' . str_replace('.', '/', $name) . '.php');
    }

    /**
     * 渲染配置信息
     * @param mixed $name 键名或数组
     * @param mixed $value 值 
     */
    protected function assignconfig($name, $value = '')
    {
        $this->view->config = array_merge($this->view->config ? $this->view->config : [], is_array($name) ? $name : [$name => $value]);
    }

    //输出json字符串方法
    protected function output($data,$code="200",$msg=""){
        echo json_encode([
                "data"=>$data,
                "code"=>$code,
                "msg"=>$msg,
            ],true);
        exit();
    }

    //跳转至首页方法
    public function go_to_index($error_msg=""){
        $this->recordErrorLog($error_msg);
        $this->redirect("/");
        exit();
    }

    /**
     * 获取seo配置
     * @param string $comic
     * @param string $chapter
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getSeoConfig($comic="",$chapter=""){
        $controller_name = strtolower(request()->controller());
        $seo_config = array();
        $seo_config_result = Db::name("seo_config")->where(["controller"=>$controller_name])->select();
        if(!empty($seo_config_result)) {
            foreach ($seo_config_result AS $value) {
                $type = $value['type'];
                $seo_config[$type]['title'] = $value['title'];
                $seo_config[$type]['description'] = $value['description'];
                $seo_config[$type]['keywords'] = $value['keywords'];
            }
            if(empty($seo_config)){
                return $seo_config;
            }
            if(!empty($comic)){
                foreach($seo_config AS &$value){
                    foreach($value AS &$value2){
                        $value2 = str_replace("{comic}",$comic,$value2);
                    }
                }
            }
            if(!empty($chapter)){
                $this->simplifyChapterName($chapter);
                foreach($seo_config AS &$value){
                    foreach($value AS &$value2){
                        $value2 = str_replace("{chapter}",$chapter,$value2);
                    }
                }
            }
        }
        return $seo_config;
    }

    public function getImageAlt($comic,$chapter)
    {
        $this->simplifyChapterName($chapter);
        $alt = $this->image_alt;
        $alt = str_replace("{comic}",$comic,$alt);
        $alt = str_replace("{chapter}",$chapter,$alt);
        return $alt;
    }

    /**
     * 去除章节名中多余字符
     * @param $chapter
     */
    public function simplifyChapterName(&$chapter,$replace=""){
        $chapter = str_ireplace($this->chapter_redundant_words,$replace,$chapter);
    }

    /**
     * 记录客户端网页错误日志
     */
    public function recordErrorLog($error_msg = "")
    {
        $data= [
            "controller"=>request()->controller(),
            "method"=>request()->action(),
            "params"=>json_encode(request()->param()),
            "error_msg"=>$error_msg,
            "ip"=>$_SERVER['REMOTE_ADDR'],
        ];
        Db::name("index_error_log")->insert($data);
    }
}
