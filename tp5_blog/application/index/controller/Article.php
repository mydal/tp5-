<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/2/26
 * Time: 10:21
 */

namespace app\index\controller;


use think\Controller;

class Article extends Controller
{
    public function article(){
        return $this->fetch();
    }

}