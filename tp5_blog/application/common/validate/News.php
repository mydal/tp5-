<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/3/9
 * Time: 18:47
 */

namespace app\common\validate;


use think\Validate;

class News extends Validate
{
    protected $rule=[
        'name'=>'require|max:20|unique:news',
        'pic' =>'require',
//        'tag_id'=>'require',
        'status'=>'require',
        'desc'=>'require|max:255',
        'content'=>'require',
//        'author_id'=>'require'
    ];

    protected $message=[
        'name.require'=>'新闻名称必须',
        'name.max'    =>'新闻名称长度最多不能超过20个字符',
        'name.unique' =>'新闻名称不能重复',
        'pic.require' =>'新闻图片必须',
//        'tag_id.require'=>'新闻类别必须',
        'status.require'=>'新闻状态必须',
        'desc.require' =>'新闻简介必须',
        'desc.max'      =>'新闻简介最长不能超过20个字符',
        'content.require'       =>'新闻内容必须',
//        'author_id.require'=>'新闻作者必须'
    ];

    protected $scene=[
        'add'=>'name',
        'edit'=>'name'
    ];

}