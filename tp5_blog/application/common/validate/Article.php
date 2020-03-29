<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/3/4
 * Time: 15:13
 */

namespace app\common\validate;


use think\Validate;

class Article extends Validate
{
    protected $rule=[
        'name'=>'require|max:20|unique:article',
        'price'=>'require|number',
        'num'=>'require|number',
        'address'=>'require|max:50',
        'desc'=>'require|max:255',
        'content'=>'require',
//        'pic'    =>'require',
        'cate_id'=>'require',
        'status' =>'require'
    ];

    protected $message=[
        'name.require'=>'物资名称不能为空',
        'name.max'=>'物资名称最多不能超过20个字符',
        'name.unique'=>"物资名称不能重复",
        'price.require'=>'物资价值不能为空',
        'price.number'=>'物资价值必须为数字',
        'num.require'=>'物质数量不能为空',
        'num.number'=>'物质数量必须为数字',
        'address.require'=>'物质捐赠方不能为空',
        'address.max'=>'物质捐赠方最多不能超过50个字符',
        'desc.require'=>'物质简介不能为空',
        'desc.max'=>'物质简介最多不能超过255个字符',
        'content.require'=>'物质内容不能为空',
//        'pic.require'   =>'图片必须',
        'cate_id.require'   =>'物资类别不能为空',
        'status.require' =>'状态必须'

    ];

    protected $scene=[
        'add'=>'name',
        'edit'=>'name'
    ];

}