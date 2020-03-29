<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/3/20
 * Time: 14:57
 */

namespace app\common\Validate;


use think\Validate;

class Register extends Validate
{
    protected $rule=[
        'email'=>'email|unique:register',
        'name'=>'require|max:20|unique:register',
        'password'=>'require|max:50',
        'confirm'=>'require|max:50'
    ];

}