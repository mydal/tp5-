<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/3/19
 * Time: 14:52
 */

namespace app\admin\model;


class Rotation extends Common
{
    protected $table = "tp_rotation";
    protected $autoWriteTimestamp = true;

    public function getStatusAttr($value){
        if($value==1){
            return '启用';
        }else{
            return '禁用';
        }
    }

}