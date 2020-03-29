<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/3/3
 * Time: 17:12
 */

namespace app\admin\model;

use think\Db;

//use traits\model\SoftDelete;

class Admin extends Common
{
//    use SoftDelete;

    protected $table = "tp_admin";

    protected $autoWriteTimestamp = true;

    public function getAll($where = array(), $filed = "*")
    {
        $username = isset($where['username']) ? $where['username'] : '';
        $status = isset($where['status']) ? $where['status'] : -1;
        return Db::table($this->table)->where($where)->field($filed)->paginate(5, false, [
            'query' => [
                'username' => $username,
                'status' => $status
            ]
        ]);
    }


}