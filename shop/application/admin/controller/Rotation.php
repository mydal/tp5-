<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/3/19
 * Time: 14:52
 */

namespace app\admin\controller;


use think\Controller;
use app\admin\model\Rotation as RotationModel;
use think\Request;

class Rotation extends Controller
{
    protected $rotation;

    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $this->rotation = new RotationModel();
        $this->request = Request::instance();

    }

    public function index()
    {
        $model = $this->rotation->paginate(3);
        return view('index', ['model' => $model]);
    }

    public function add()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $res = $this->rotation->save($data);
            if ($res) {
                $this->success('添加轮播图成功', 'index');
            } else {
                $this->error('添加轮播图失败');
            }
        }
        return $this->fetch();

    }

    public function edite($id)
    {
        if (request()->isGet()) {
            $model = $this->rotation->get(['id' => $id]);
            return view('edite', ['model' => $model]);
        } else {
            $data = input('post.');
            $res = $this->rotation->save($data, ['id' => $id]);
            if ($res) {
                $this->success('更新轮播图成功', 'index');
            } else {
                $this->error('更新轮播图失败');
            }
        }


    }

    public function del($id){
        $res=$this->rotation->where('id',$id)->delete();
        if($res){
            return json([
                'status'=>1,
                'msg'=>'删除成功'
            ]);
        }else{
            return json([
                'status'=>1,
                'msg'=>'删除失败'
            ]);
        }

    }

    public function delAll(){
        $data = $this->request->param();
        $id = $data['id'];
        $num = count($id);
        $res = RotationModel::destroy($id);
        if ($res) {
            return json(['status' => 1, 'msg' => "删除成功", 'num' => $num]);
        } else {
            return json(['status' => 0, 'msg' => '删除失败']);
        }
    }


}