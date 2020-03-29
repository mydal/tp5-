<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/3/8
 * Time: 9:53
 */

namespace app\admin\model;


use think\Model;

class Common extends Model
{
    //图片上传
    public function file($file){
        if ($file) {
            $map=['ext'=>'jpg,png','size'=>2000000];
            $info = $file->validate($map)->move(ROOT_PATH . 'public' . DS . '/static/admin/uploads');
            if ($info) {
                $data['pic'] = '/static/admin/uploads/' . $info->getSaveName();
                $pic=$data['pic'];
                return $pic;
            } else {
                return $file->getError();
            }
        }

    }

}