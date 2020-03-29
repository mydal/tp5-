<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/3/11
 * Time: 18:29
 */

namespace app\admin\controller;

use app\admin\model\Admin;
use think\Controller;

class Register extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    public function register(){
        //获取ajax提交 过来的数据
        $data=input('post.');
        $username = input('username');
        $password = input('password');

        if (empty($username) || empty($password)) {
//            halt($username);
            $result = [
                'status' => 0,
                'msg' => '提交的数据不合法'
            ];
            return json($result);
        }
        $model = new Admin();
        $data['password'] = md5($data['password']);
        $data['pic']="/static/admin/images/mydal1.jpg";
        $user = $model->where('username',$username)->select();
        if(!$user){
            $res=$model->save($data);
            if($res){
                return json([
                    'status'=>1,
                    'msg' => '注册成功'
                ]);

            }else{
                return json([
                    'status'=>0,
                    'msg' => '注册失败'
                ]);
            }

        }else{
            return json([
                'status'=>0,
                'msg'=>'注册失败,管理员已经存在'
            ]);

        }




//
    }


}