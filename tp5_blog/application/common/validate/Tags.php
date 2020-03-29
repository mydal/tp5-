<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/3/10
 * Time: 9:06
 */

namespace app\common\validate;


use think\Validate;

class Tags extends Validate
{

    protected $rule=[
        'tagname'=>"require|max:25|unique:tags",
    ];

    protected $message=[
        'tagname.require'=>'新闻分类名必须',
        'tagname.max'    =>'新闻分类名称最长不能超过25个字符',
        'tagname.unique' =>'新闻类别名不能重复'
    ];

    protected $scene=[
        'add'=>'tagname',
        'edit'=>'tagname'
    ];
}