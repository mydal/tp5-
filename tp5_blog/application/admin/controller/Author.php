<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/3/9
 * Time: 18:12
 */

namespace app\admin\controller;

use app\admin\model\Author as AuthorModel;
use app\admin\model\Common;
use think\Controller;

class Author extends Controller
{
    public function lists(){
        $model=AuthorModel::paginate(4);
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

            $validate=Validate('author');
            if(!$validate->check($data)){
                $this->error($validate->getError());
            }



            $model=new AuthorModel();
            $res=$model->save($data);
            if($res){
                $this->success('添加作者成功','author/lists');
            }else{
                $this->error('添加作者失败');
            }

        }
        return $this->fetch();

    }

    public function edit($id){
        $model=AuthorModel::get($id);
        if(request()->isPost()){
            $data=input('post.');
            //            图片上传
            $models=new Common();
            $file = request()->file('pic');
            $files=$models->file($file);
            $data['pic']=$files;

//            halt($data);

            $validate=Validate('author');
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
        $res=AuthorModel::get($id)->delete();
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
        $res=AuthorModel::destroy($allid);
        $num = count($allid);
        if ($res) {
            return ['status' => 1, 'message' => '删除成功', 'num' => $num];
        } else {
            return ['status' => 0, 'message' => '删除失败'];
        }
    }



}