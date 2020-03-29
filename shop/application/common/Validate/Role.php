<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/3/12
 * Time: 15:20
 */

namespace app\common\Validate;


use think\Validate;

class Role extends Validate
{
    protected $rule=[
        'name'=>'require|min:2|max:50|unique:role',
        'remark'=>'require|min:2|max:13'
    ];

    protected $message=[
        'name.require'=>'角色名必须',
        'name.unique'=>'角色名不能重复',
        'name.min'=>'角色名长度最少不能少于2个字符',
        'name.max'=>'角色名长度最多不能超过10个字符',
        'remark.require'=>'角色中文名必须',
        'remark.min'=>'角色中文名最少不能少于2个字符',
        'remark.max'=>'角色中文名最长不能超过13个字符'
    ];


}