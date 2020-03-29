<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/3/20
 * Time: 8:31
 */

namespace app\admin\model;


class Recommend extends Common
{
    protected $table = "tp_recommend";
    protected $autoWriteTimestamp = true;

    public function getStatusAttr($value){
        if($value==1){
            return '启用';
        }else{
            return '禁用';
        }
    }


}