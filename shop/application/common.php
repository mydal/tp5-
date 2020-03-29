<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

//递归

function node_merge($data,$pid=0){
    $arr=[];
    foreach ($data as $item){
        if($item['pid']==$pid){
            $item['child']=node_merge($data,$item['id']);
            $arr[]=$item;
        }
    }
    return $arr;
}





