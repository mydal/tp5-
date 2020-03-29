<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/3/3
 * Time: 16:58
 */

namespace app\admin\controller;

use app\admin\model\Admin;
use think\Controller;

class Index extends Controller
{
//    后台首页
    public function index()
    {
        return $this->fetch();
    }

//    后台欢迎页面
    public function home()
    {
        return $this->fetch();
    }

}