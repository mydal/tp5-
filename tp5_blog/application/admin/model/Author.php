<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/3/10
 * Time: 9:35
 */

namespace app\admin\model;


use think\Model;
use traits\model\SoftDelete;


class Author extends Model
{
    use SoftDelete; //软删除
    protected $table='tp_author';
    protected $autoWriteTimestamp=true;

    public function getSexAttr($value){
        if($value==0){
            return '男';
        }else{
            return '女';
        }


    }

}