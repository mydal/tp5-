<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
//        加载前台首页
        return $this->fetch();
    }
}
