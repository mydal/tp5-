<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/3/4
 * Time: 15:12
 */

namespace app\admin\controller;

use app\admin\model\Article as ArticleModel;
use app\admin\model\Mcate as McateModel;
use think\Controller;
use app\admin\model\Common;
use think\Validate;

class Article extends Controller
{

    public function lists()
    {
        $model = ArticleModel::paginate(4);
        return view('lists', ['model' => $model]);
    }

    public function add()
    {
        $models= McateModel::all();
        if (request()->isPost()) {
            $data = input('post.');
//            halt($data['cate_id']);

//           图片上传
            $models=new Common();
            $file = request()->file('pic');
            $files=$models->file($file);
            $data['pic']=$files;

            $validate = Validate('article');
            if (!$validate->check($data)) {
                $this->error($validate->getError());
            }
            $model = new ArticleModel();


            $res = $model->save($data);
            if ($res) {
                $this->success('添加成功', 'lists');
            } else {
                $this->error('添加失败');
            }
        }
        return view('add',['models'=>$models]);

    }

    public function edit($id)
    {
        $models= McateModel::all();
        $model = ArticleModel::get($id);
        if (request()->isPost()) {
            $data = input('post.');
            //           图片上传
            $models=new Common();
            $file = request()->file('pic');
            $files=$models->file($file);
            $data['pic']=$files;

            $validate = Validate('article');
            if (!$validate->check($data)) {
                $this->error($validate->getError());
            }


            $res = $model->save($data, ['id' => $id]);
            if ($res) {
                $this->success('更新成功', 'lists');
            } else {
//                halt($res);
                $this->error('更新失败');
            }
        }
        return view('edit', ['model' => $model,'models'=>$models]);	

    }

    public function del($id)
    {
        $model = new ArticleModel();
        $res = $model::get($id)->delete();
        if ($res) {
            $this->success('删除成功', 'lists');
        } else {
            $this->error('删除失败');
        }


    }

    public function delAll()
    {
        $data = $this->request->param();
        $allid = $data['id'];
        $res=ArticleModel::destroy($allid);
        $num = count($allid);
        if ($res) {
            return ['status' => 1, 'message' => '删除成功', 'num' => $num];
        } else {
            return ['status' => 0, 'message' => '删除失败'];
        }
    }



}
