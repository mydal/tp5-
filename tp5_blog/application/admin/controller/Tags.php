<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/3/10
 * Time: 9:06
 */

namespace app\admin\controller;

use app\admin\model\Tags as TagsModel;
use app\admin\model\Common;
use think\Controller;

class Tags extends Controller
{
    public function lists(){
        $model=TagsModel::paginate(4);
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

            $validate=Validate('tags');
            if(!$validate->check($data)){
                $this->error($validate->getError());
            }
            
            $model=new TagsModel();
            $res=$model->save($data);
            if($res){
                $this->success('添加新闻类别成功','tags/lists');
            }else{
                $this->error('添加新闻失败');
            }

        }
        return $this->fetch();

    }

    public function edit($id){
        $model=TagsModel::get($id);
        if(request()->isPost()){
            $data=input('post.');
            //            图片上传
            $models=new Common();
            $file = request()->file('pic');
            $files=$models->file($file);
            $data['pic']=$files;

//            halt($data);

            $validate=Validate('tags');
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
        $res=TagsModel::get($id)->delete();
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
        $res=TagsModel::destroy($allid);
        $num = count($allid);
        if ($res) {
            return ['status' => 1, 'message' => '删除成功', 'num' => $num];
        } else {
            return ['status' => 0, 'message' => '删除失败'];
        }
    }

}