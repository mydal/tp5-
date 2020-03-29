<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/3/17
 * Time: 19:44
 */

namespace app\admin\controller;

use app\admin\model\Product as ProductModel;
use think\Controller;
use think\Request;
use app\admin\model\Category;
use think\Image;

class Product extends Controller
{
    protected $request;
    protected $product;

    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $this->request = Request::instance();
        $this->product = new ProductModel();
    }

    public function index()
    {
        $model = $this->product->paginate(5);
        return view('index', ['model' => $model]);
    }

    public function add()
    {
        if (request()->isGet()) {
            $category = new Category();
            $categorys = $category->select();
            return view('add', ['categorys' => $categorys]);
        } else {
            $data = $this->request->post();
            $res = $this->product->save($data);
            if ($res) {
                $this->success('增加成功', 'index');
            } else {
                $this->error('增加失败', 'add');
            }
        }
    }

    public function del($id)
    {
        $res = $this->product->where('id', $id)->delete();
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

    public function delAll()
    {
        $data = $this->request->param();
        $id = $data['id'];
        $num = count($id);
        $res = ProductModel::destroy($id);
        if ($res) {
            return json(['status' => 1, 'msg' => "删除成功", 'num' => $num]);
        } else {
            return json(['status' => 0, 'msg' => '删除失败']);
        }
    }

    public function edite($id)
    {
        if (request()->isGet()) {
            $categorys = Category::all();
            $model = $this->product->get(['id' => $id]);
            return view('edite', ['model' => $model, 'categorys' => $categorys]);

        } else {
            $data = input('post.');
            $res = $this->product->save($data, ['id' => $id]);
            if ($res) {
                $this->success('更新商品成功', 'index');
            } else {
                $this->error('更新商品失败');
            }
        }


    }

//    图片上传
    public function uploadImg()
    {
        $file = $this->request->file('file_data');
//  保存原图路径
        $path = ROOT_PATH . 'public' . DS . 'uploads' . DS . 'product';
        $info = $file->move($path);
//  缩略图保存路径
        $thumb_path = ROOT_PATH . 'public' . DS . 'uploads' . DS . 'product' . DS . 'thumb' . DS . 'thumb_' . $info->getFilename();
//        halt($info);
        if ($info) {
            $path = ROOT_PATH . 'public' . DS . 'uploads' . DS . 'product' . DS . $info->getSaveName();
            $image = Image::open($path);
            $image->thumb(150, 150, Image::THUMB_SCALING)->save($thumb_path);
//            halt($info->getSaveName());
            return json([
                'status' => 1,
                'path' => $info->getSaveName(),
                'thumb' => 'thumb' . DS . 'thumb_' . $info->getFilename()
            ]);
        } else {
            // 上传失败获取错误信息
            return json([
                'status' => 0,
                'error' => $file->getError()
            ]);
        }
    }

}