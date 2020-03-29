<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/3/10
 * Time: 11:01
 */

namespace app\common\Validate;


use think\Validate;

class Admin extends Validate
{
    protected $rule=[
        'username'=>'require|max:20|unique:admin',
        'password'=>'require|min:8|max:60',
    ];

    protected $message=[
        'username.require'=>'管理员名必须',
        'username.max'=>'管理员名长度不能超过60个字符',
        'username.unique'=>'管理员名不能重复',
        'password.require'=>'管理员密码不能为空',
        'password.min'=>'管理员密码长度最少为8个字符',
        'password.max'=>'管理员密码长度最长不能超过20个字符'
    ];

}