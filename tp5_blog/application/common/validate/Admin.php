<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/2/26
 * Time: 16:47
 */

namespace app\common\validate;


use think\Validate;

class Admin extends Validate
{
    protected $rule=[
        'username'=>'require|min:3|max:15|unique:admin',
        'password'=>'require|min:6|max:15',
//        'pic'     =>'require',
        'status'  =>'require'
    ];

    protected $message=[
        'username.require'=>'名称必须',
        'username.max'    =>'名称最多不能超过15个字符',
        'username.unique' =>'管理员不能重复',
        'password.require'=>'密码必须',
        'password.min'    =>'密码最少不能少于6个字符',
        'password.max'    =>'密码最多不能超过15个字符',
//        'pic.require'     =>'图片必须',
        'status.require'  =>'状态必须'
    ];

}