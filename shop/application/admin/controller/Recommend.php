<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/3/20
 * Time: 8:30
 */

namespace app\admin\controller;


use think\Controller;
use app\admin\model\Recommend as RecommendModel;
use think\Request;

class Recommend extends Controller
{
    protected $recommend;

    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $this->recommend = new RecommendModel();
        $this->request = Request::instance();

    }

    public function index()
    {
        $model = $this->recommend->paginate(3);
        return view('index', ['model' => $model]);
    }

    public function add()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $res = $this->recommend->save($data);
            if ($res) {
                $this->success('添加成功', 'index');
            } else {
                $this->error('添加失败');
            }
        }
        return $this->fetch();

    }

    public function edite($id)
    {
        if (request()->isGet()) {
            $model = $this->recommend->get(['id' => $id]);
            return view('edite', ['model' => $model]);
        } else {
            $data = input('post.');
            $res = $this->recommend->save($data, ['id' => $id]);
            if ($res) {
                $this->success('更新成功', 'index');
            } else {
                $this->error('更新失败');
            }
        }


    }

    public function del($id){
        $res=$this->recommend->where('id',$id)->delete();
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
        $res = RecommendModel::destroy($id);
        if ($res) {
            return json(['status' => 1, 'msg' => "删除成功", 'num' => $num]);
        } else {
            return json(['status' => 0, 'msg' => '删除失败']);
        }
    }



}