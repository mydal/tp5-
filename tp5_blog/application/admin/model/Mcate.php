<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/3/6
 * Time: 22:36
 */

namespace app\admin\model;


use think\Model;
use traits\model\SoftDelete;

class Mcate extends  Model{
    use SoftDelete; //软删除
    protected $autoWriteTimestamp=true;
    protected $table="tp_mcate";




}