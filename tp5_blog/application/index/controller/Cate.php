<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/2/26
 * Time: 10:23
 */

namespace app\index\controller;


use think\Controller;

class Cate extends Controller
{
    public function cate(){
        return $this->fetch();
    }

}