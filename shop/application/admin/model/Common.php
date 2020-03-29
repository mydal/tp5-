<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/3/3
 * Time: 17:03
 */

namespace app\admin\model;


use think\Model;
use think\Db;

class Common extends Model
{
//    定义表名属性 让其他模型类继承并赋值
    protected $table;

//    增加数据
    public function addData($data = array())
    {
        return Db::table($this->table)->insert($data);
    }

//    删除数据
    public function delData($where = array())
    {
        return Db::table($this->table)->where($where)->delete();
    }

//    更新数据
    public function updateData($where = array(), $data = array())
    {
        return Db::table($this->table)->where($where)->update($data);
    }

//    查询一条数据
    public function getOne($where = array(), $field = '*')
    {
        return Db::table($this->table)->where($where)->field($field)->find();
    }

//    查询全部数据
    public function getAll($where = array(), $filed = "*")
    {
        return Db::table($this->table)->where($where)->field($filed)->select();

    }




}