<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/2/26
 * Time: 16:44
 */

namespace app\admin\model;


use think\Model;
use think\Db;

class Admin extends Model
{

    protected $autoWriteTimestamp=true;
    protected $table="tp_admin";


    public function getAll($where=array(),$field="*"){
        $username=isset($where['username'])?$where['username']:'';
        $status=isset($where['status'])?$where['status']:-1;
        return Db::table($this->table)->where($where)->field($field)->paginate(5,false,[
            'query'=>[
                'username'=>$username,
                'status'=>$status
            ]
        ]);
    }




}