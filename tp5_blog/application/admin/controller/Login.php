<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/2/27
 * Time: 16:42
 */

namespace app\admin\controller;

use app\admin\model\Admin;
use think\captcha\Captcha;
use think\Controller;
use think\Session;


class Login extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

//  后台登录验证码
    public function verify(){
        $config=[
            'fontSize'=>30,
            'length'=>4,
            'useNoise'=>false,
        ];
        $captcha=new Captcha($config);
        return $captcha->entry();
    }


    //    后台登录

    public function login(){
        //获取ajax提交 过来的数据
        $username = input('username');
        $password = input('password');
        $code = input('code');
//        halt($password);
//        halt($code);
        //后台验证,如果有一个数据为空，就不合法
        if (empty($username) || empty($password) || empty($code)) {
//            halt($username);
            $result = [
                'status' => 0,
                'msg' => '提交的数据不合法'
            ];
            return json($result);
        }
//        //验证用户输入的验证码是否正确
        $captcha = new Captcha();
        $res = $captcha->check($code);
        if(!$res){
            return json([
                'status' => 0,
                'msg' => '验证码不正确'
            ]);
        }
//        /*
//         * 如果验证码验证通过，则验证用户名和密码是否输入正确
//         * 1）根据用户名查询数据
//         * 2）如果能够查到数据，则再比对密码是否正确
//         * 3）如果不能查询到数据，则说明用户名不正确
//         * */
//
        $model = new Admin();

        $node = $model->where('username',$username)->find();


        if (is_null($node) == false &&  md5($password)==$node['password'] && $node['status']=='启用') {
            $id=$node['id'];
            $pic=$node['pic'];
            Session::set('username',$username);
            Session::set('uid',$id);
            Session::set('pic',$pic);
            return json([
                'status'=>1,
                'msg' => '登录成功'
            ]);
        } else {
            return json([
                'status'=>0,
                'msg' => '用户名或密码错误'
            ]);
        }

//
    }


}