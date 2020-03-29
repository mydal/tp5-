<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/2/26
 * Time: 14:08
 */

namespace app\admin\controller;


use think\Controller;

class Index extends Controller
{

    public function index(){
        return $this->fetch();
    }
}