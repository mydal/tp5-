<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/3/10
 * Time: 9:41
 */

namespace app\common\validate;


use think\Validate;

class Author extends Validate
{
    protected $rule=[
        'name'=>'require|max:20|unique:author',
        'sex' =>'require|max:1'
    ];

    protected $message=[
        'name.require'=>"作者名必须",
        'name.max'    =>'作者名长度不能超过25个字符',
        'name.unique'=>'作者姓名不能重复',
        'sex'         =>'作者性别必须',
        'sex.require' =>'作者性别长度不能超过个字符'
    ];

    protected $scene=[
        'add'=>'name',
        'edit'=>'name'
    ];

}