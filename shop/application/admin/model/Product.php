<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/3/17
 * Time: 19:43
 */

namespace app\admin\model;


class Product extends Common
{
    protected $table = "tp_product";
    protected $autoWriteTimestamp = true;

    public function product()
    {
        return $this->belongsTo('Category', 'category_id');
    }

}