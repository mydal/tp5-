<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/3/16
 * Time: 19:54
 */

namespace app\admin\model;

class Category extends Common
{
    protected $table = "tp_category";
    protected $autoWriteTimestamp = true;


    public function cateTree()
    {
        $cateres = $this->select();
        return $this->sort($cateres);
    }


    public function sort($data, $pid = 0, $level = 0)
    {
        static $arr = array();
        foreach ($data as $k => $v) {
            //找出顶级栏目
            if ($v['pid'] == $pid) {
                $v['level'] = $level;
                $arr[] = $v;
                //继续递归下级栏目 以此类推
                $this->sort($data, $v['id'], $level + 1);
            }
        }
        return $arr;
    }
}