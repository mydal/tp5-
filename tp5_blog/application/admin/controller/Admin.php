<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/2/26
 * Time: 14:08
 */

namespace app\admin\controller;

use app\admin\model\Admin as AdminModel;
use app\admin\model\Common;
use think\Controller;
use think\Db;

class Admin extends Controller
{
//    添加
    public function add()
    {
        if (request()->isPost()) {
            $data = input('post.');
            //            图片上传
            $models=new Common();
            $file = request()->file('pic');
            $files=$models->file($file);
            $data['pic']=$files;

            $validate = validate('Admin');
            if (!$validate->check($data)) {
                $this->error($validate->getError());
            }
            $data['password'] = md5($data['password']);
            $model = new AdminModel();
            $user = $model->where('username', $data['username'])->select();

            if (!$user) {
                $res = $model->save($data);
                if ($res) {

                    $this->success('添加管理员成功', 'lists');
                } else {
                    $this->error('添加管理员失败', 'add');
                }
            } else {
                $this->error('添加管理员失败,管理员已存在', 'add');

            }


        }
        return $this->fetch();

    }


//查询
    public function lists()
    {
        if(request()->isGet()){
            $m = new AdminModel();
            $model=$m->getAll();
//            halt($model);
            return view('lists', ['model' => $model]);
        }else{
            $username=input('username');
            $status=input('status');
            $user=new AdminModel();
            $where=[];
            if($username!=''){
                $where['username']=$username;
            }
            if($status!=-1){
                $where['status']=$status;
            }
            $model=$user->getAll($where);
//            halt($model);
            return view('lists',['model'=>$model]);
        }

    }

//    更新
    public function edit($id)
    {
        $model = AdminModel::get($id);
        if (request()->isPost()) {
            $data = input('post.');

//            图片上传
            $models=new Common();
            $file = request()->file('pic');
            $files=$models->file($file);
            $data['pic']=$files;

//            halt($data['status']);
            $validate = validate('Admin');
            if (!$validate->check($data)) {
                $this->error($validate->getError());
            }
            if ($data['password']) {
                $data['password'] = md5($data['password']);
            }


            $res = $model->save($data, ['id' => $id]);
            if ($res) {
                $this->success('更新管理员成功', 'lists');
            } else {
                $this->error('更新管理员失败', 'edit');
            }


        }
        return view('edit', ['model' => $model]);
    }

//    删除
    public function del($id)
    {
        $model = new AdminModel();
//        halt($model);
        if ($id != 2) {
            if ($model::get($id)->delete()) {
                $this->success('删除管理员成功', 'lists');
            } else {
                $this->error('删除管理员失败', 'lists');
            }
        } else {
            $this->error('初始化管理员不能删除');
        }


    }

    //批量删除用户
    public function delAll()
    {
        $data = $this->request->param();  //获取当前请求参数的值  拿到ajax发送的值
        $allid = $data['id'];

        $res = AdminModel::destroy($allid);
        $num = count($allid);
        if ($res) {
            return ['status' => 1, 'message' => '删除成功', 'num' => $num];
        } else {
            return ['status' => 0, 'message' => '删除失败'];
        }
    }
}