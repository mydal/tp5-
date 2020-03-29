<?php

namespace app\index\controller;

use think\Controller;
use app\admin\model\Rotation;
use app\admin\model\Recommend;
use app\admin\model\Category;
use app\admin\model\Product;
use app\admin\model\Register;
use think\Validate;


class Index extends Controller
{
    public function index()
    {
        $rotation = new Rotation(); //轮播图
        $product = new Product();  //商品
        $recommend = new Recommend();//推荐位
        $category = new Category();

        $model = $rotation->select();  //轮播图

        //商品
        $models = $product->where('category_id', 8)->select();
        $iphone = $product->where('category_id', 2)->select();
        $watch = $product->where('category_id', 10)->select();
        $jiadian = $product->where('category_id', 11)->select();

//        推荐位
        $recommend = $recommend->where('name', '页面偏上')->find();
        $recommends = $recommend->where('name', '页面偏下')->find();

//      分类
        $categorys = $category->where('pid', 0)->select();

        $categoryi = $category->where('pid', 'neq', 0)->select();
        return view('index', ['model' => $model, 'models' => $models,
            'iphone' => $iphone, 'watch' => $watch, 'recommend' => $recommend,
            'recommends' => $recommends, 'jiadian' => $jiadian, 'categorys' => $categorys,
            'categoryi' => $categoryi]);

    }

    public function register(){
        $category = new Category();
//        分类
        $categorys = $category->where('pid', 0)->select();

        $categoryi = $category->where('pid', 'neq', 0)->select();
        return view('register',['categorys'=>$categorys,'categoryi'=>$categoryi]);
    }

    public function registers(){
        $email=input('email');
        $name=input('name');
        $password=input('password');
        $confirm=input('confirm');
//        halt($password);

        $model=new Register();
        $result=$model->where('email',$email)->whereOr('name',$name)->find();
        if(!$result){
            if($password==$confirm){
                $arr=array(
                    'email'=>$email,
                    'name'=>$name,
                    'password'=>md5($password),
                    'confirm'=>md5($confirm)
                );
                $validate=Validate('register');
                if(!$validate->check($arr)){
                    return json([
                        'status'=>0,
                        'msg'=>'提交的数据不合法1111'
                    ]);
                }
                $res=$model->save($arr);
                if($res){
                    return json([
                        'status'=>1,
                        'msg'=>'注册成功',
                    ]);

                }else{
                    return json([
                        'status'=>0,
                        'msg'=>'邮箱或密码错误'
                    ]);
                }
            }
        }else{
            return json([
                'status'=>0,
                'msg'=>'邮箱和用户名不能重复'
            ]);
        }

        }

    public function login(){
        $category = new Category();
//        分类
        $categorys = $category->where('pid', 0)->select();

        $categoryi = $category->where('pid', 'neq', 0)->select();
        return view('login',['categorys'=>$categorys,'categoryi'=>$categoryi]);
    }
    public function logins(){
        $email=input('email');
        $password=input('password');
        $model=new Register();
        $result=$model->where('email',$email)->find();
        if($result && md5($password)==$result['password']){
            return json([
                'status'=>1,
                'msg'=>'登录成功'
            ]);
        }else{
            return json([
                'status'=>0,
                'msg'=>'用户名或密码错误'
            ]);
        }



    }
}
