<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/3/9
 * Time: 18:45
 */

namespace app\admin\model;

use think\Model;
use traits\model\SoftDelete;

class News extends Model
{
    use SoftDelete; //软删除
    protected $table="tp_news";
    protected $autoWriteTimestamp=true;

    public function  getStatusAttr($value){
        if($value==0){
            return '已发布';
        }else{
            return '未发布';
        }
    }

    public function news(){
        return $this->belongsTo('tags','tag_id');
    }

    public function newss(){
        return $this->belongsTo('author','author_id');
    }

}