<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/3/6
 * Time: 22:35
 */

namespace app\admin\controller;

use app\admin\model\Mcate as McateModel;
use app\admin\model\Common;
use think\Controller;
use think\Validate;

class Mcate extends Controller
{
    public function lists(){
        $model=McateModel::paginate(4);
        return view('lists',['model'=>$model]);

    }

    public function add(){
        if(request()->isPost()){
            $data=input('post.');
            //            图片上传
            $models=new Common();
            $file = request()->file('pic');
            $files=$models->file($file);
            $data['pic']=$files;

            $validate=Validate('mcate');
            if(!$validate->check($data)){
                $this->error($validate->getError());
            }



            $model=new McateModel();
            $res=$model->save($data);
            if($res){
                $this->success('添加物资类别成功','mcate/lists');
            }else{
                $this->error('添加物资失败');
            }

        }
        return $this->fetch();

    }

    public function edit($id){
        $model=McateModel::get($id);
        if(request()->isPost()){
            $data=input('post.');
            //            图片上传
            $models=new Common();
            $file = request()->file('pic');
            $files=$models->file($file);
            $data['pic']=$files;

//            halt($data);

            $validate=Validate('mcate');
            if(!$validate->check($data)){
                $this->error($validate->getError());
            }


            $res=$model->save($data,['id'=>$id]);
            if($res){
                $this->success('更新成功','lists');
            }else{
                $this->error('更新失败');
            }


        }
        return view('edit',['model'=>$model]);

    }

    public function del($id){
        $res=McateModel::get($id)->delete();
        if($res){
            $this->success('删除成功','lists');
        }else{
            $this->error('删除失败');
        }


    }

    public function delAll()
    {
        $data = $this->request->param();
        $allid = $data['id'];
        $res=McateModel::destroy($allid);
        $num = count($allid);
        if ($res) {
            return ['status' => 1, 'message' => '删除成功', 'num' => $num];
        } else {
            return ['status' => 0, 'message' => '删除失败'];
        }
    }


}