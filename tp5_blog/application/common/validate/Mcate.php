<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/3/7
 * Time: 9:23
 */

namespace app\common\validate;


use think\Validate;

class Mcate extends Validate
{
    protected $rule=[
        'catename'=>'require|max:20|unique:mcate',
        'pic'     =>'require'
    ];

    protected $message=[
        'catename.require'=>'物资类别名必须',
        'catename.max'    =>'物资类别最多不能超过20个字符长度',
        'catename.unique' =>'物资类别不能重复',
        'pic.require'     =>'图片必须'
    ];

    protected $scene=[
        'add'=>['catename'],
        'edit'=>['catename']
    ];

}