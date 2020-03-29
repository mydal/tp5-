<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/3/16
 * Time: 19:56
 */

namespace app\admin\controller;

use app\admin\model\Category as CategoryModel;
use think\Controller;
use think\Request;

class Category extends Controller
{
    protected $category;

    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $this->category = new CategoryModel();
    }

//     显示分类
    public function index()
    {
        $model = $this->category->cateTree();
        return view('index', ['model' => $model]);
    }

//    添加分类
    public function add()
    {
        if (request()->isGet()) {
            $categorys = $this->category->where('status', 1)->orderRaw('id')->select();
            return view('add', ['categorys' => $categorys]);
        } else {
            $data = input('post.');
            $res = $this->category->save($data);
            if ($res) {
                $this->success('添加商品分类成功', 'index');
            } else {
                $this->error('添加商品分类失败');
            }
        }
    }

//    更新商品分类
    public function edite()
    {
        if (request()->isGet()) {
            $id = input('id');
            $categorys = $this->category->get(['id' => $id]);
            $pid = $categorys['pid'];
            $parent_category = $this->category->where('pid','eq',0)->select();

            return view('edite', ['categorys' => $categorys,
                'parent_category' => $parent_category, 'pid' => $pid,
            ]);
        } else {
            $data = input('post.');
            $id = input('id');;
            $res = $this->category->save($data, ['id' => $id]);
            if ($res) {
                $this->success('更新商品分类成功', 'index');
            } else {
                $this->error('更新商品分类失败');
            }

        }
    }

//    删除商品分类
    public function del($id)
    {
        $where = "id=$id or pid=$id";
        $res = $this->category->delData($where);
//        halt($res);
        if ($res) {
            return json([
                'status' => 1,
                'msg' => '删除成功'
            ]);
        } else {
            return json([
                'status' => 0,
                'msg' => '删除失败'
            ]);
        }
    }

//    批量删除商品分类
    public function delAll()
    {
        $data = $this->request->param();
        $id = $data['id'];
        $num = count($id);
        $res = CategoryModel::destroy($id);
        if ($res) {
            return json(['status' => 1, 'msg' => "删除成功", 'num' => $num]);
        } else {
            return json(['status' => 0, 'msg' => '删除失败']);
        }
    }


}