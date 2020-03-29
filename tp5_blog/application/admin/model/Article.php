<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/3/4
 * Time: 15:12
 */

namespace app\admin\model;


use think\Model;
use traits\model\SoftDelete;


class Article extends Model
{
    use SoftDelete; //软删除

    protected $table="tp_article";

    protected $autoWriteTimestamp=true;

    public function getStatusAttr($value){
        if($value==0){
            return '已投入使用';
        }else{
            return '未投入使用';
        }
    }

    public function article(){
        return $this->belongsTo('Mcate','cate_id');
    }


}