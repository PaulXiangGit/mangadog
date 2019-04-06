<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2019/4/4
 * Time: 8:48
 */
namespace app\admin\controller\sitemap;

use app\common\controller\Backend;
class Sitemap extends Backend
{
    protected $noNeedLogin = ['createsitemap'];
    protected $noNeedRight = '*';

    /**
     * http://localhost:8090/admin/sitemap/sitemap/createsitemap
     */
    public function createsitemap(){
        echo '<pre>';
        die(var_dump(1) . '<pre>');
    }
}