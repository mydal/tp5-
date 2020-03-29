<?php
/**
 * Created by PhpStorm.
 * User: 苏
 * Date: 2020/3/9
 * Time: 10:26
 */

namespace app\admin\controller;

use app\admin\model\Admin;
use app\admin\model\Role;
use app\admin\model\Rule;
use think\Controller;
use think\Request;
use think\Validate;

class Rbac extends Controller
{
    protected $admin;
    protected $request;
    protected $role;
    protected $rule;

    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $this->admin = new Admin();
        $this->request = Request::instance();
        $this->role = new Role();
        $this->rule = new Rule();
    }

//    展示添加页面和实现增加增加功能
    public function addAdministrator()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $password=md5($data['password']);
            $validate = Validate('admin');
            if (!$validate->check($data)) {
                $this->error($validate->getError());
            }
            $arr = array(
                'username' => $data['username'],
                'password' => $password,
                'login_ip' => request()->ip(),//获取访问ip
                'status' => $data['status'],
            );
            $model = new Admin();
            $res = $model->save($arr);
            if ($res) {
                $this->success('增加成功', 'administrator');
            } else {
                $this->error('增加失败', 'add_administrator');
            }
        }

        return $this->fetch();
    }

    public function administrator()
    {
        if ($this->request->isGet()) {
            //    如果是get请求查询全部信息
            $model = $this->admin->paginate(5);
//            halt($model);
            $this->assign('model', $model);
            return $this->fetch();
            // 如果是post请求拼接查询条件
        } else {
            $username = input('username');
            $status = input('status');
//            halt($status);
            $where = [];
            //  如果用户名和状态不为空再拼接查询条件
            if ($username != '') {
                $where['username'] = $username;
            }
            if ($status >= 0) {
                $where['status'] = $status;
            }
            $model = $this->admin->getAll($where);
            $this->assign('model', $model);
            return $this->fetch();
        }

    }

    public function editeAdministrator($admin_id)
    {
        $model = Admin::get($admin_id);
        if (request()->isPost()) {
            $data = input('post.');
            $data['password']=md5($data['password']);
            $validate = Validate('admin');
            if (!$validate->check($data)) {
                $this->error($validate->getError());
            }
            $admin_id = input('admin_id');
            $model = new Admin();
            $res = $model->save($data, ['admin_id' => $admin_id]);
            if ($res) {
                $this->success('更新管理员成功', 'administrator');
            } else {
                $this->error('更新管理员失败');
            }
        }
        return view('edite_administrator', ['model' => $model]);

    }

    public function delAdministrator()
    {
        $admin_id = input('admin_id');
        $admin = $this->admin->getOne([
            'admin_id' => $admin_id
        ]);
        if (empty($admin)) {
            return json([
                'status' => 0,
                'msg' => '删除的用户不存在'
            ]);
        }

        $res = $this->admin->delData([
            'admin_id' => $admin_id
        ]);
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
        $res = Admin::destroy($id);
        if ($res) {
            return json(['status' => 1, 'msg' => "删除成功", 'num' => $num]);
        } else {
            return json(['status' => 0, 'msg' => '删除失败']);
        }
    }

//    角色
    public function role()
    {
        $model = $this->role->paginate(5);
        return view('role', ['model' => $model]);
    }

    public function delRole()
    {
        $id = input('id');
        // 因为有的工具可以随便拼接恒等条件，所以我们要先获取admin_id判断
        // 数据库中是否有这个编号
        $role = $this->role->getOne([
            'id' => $id
        ]);
        if (empty($role)) {
            return json([
                'status' => 0,
                'msg' => '删除的用户不存在'
            ]);
        }
//        如果存在再删除这行
        $res = $this->role->delData([
            'id' => $id
        ]);
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

    public function addRole()
    {
        if ($this->request->isPost()) {
            $data = input('post.');
//            $arr=array(
//                'name'=>input('name'),
//                'remark'=>input('remark'),
//                'status'=>input('status')
//            );
            $validate = Validate('role');
            if (!$validate->check($data)) {
                $this->error($validate->getError());
            }

            $res = $this->role->save($data);
            if ($res) {
                $this->success('添加成功', 'Rbac/role');
            } else {
                $this->error('添加失败', 'Rbac/addRole');
            }
        }
        return $this->fetch();
    }

    public function editeRole($id)
    {

        $model = Role::get($id);
        if (request()->isPost()) {
            $data = input('post.');
            $validate = Validate('role');
            if (!$validate->check($data)) {
                $this->error($validate->getError());
            }
            $id = input('id');
            $model = new Role();
            $res = $model->save($data, ['id' => $id]);
            if ($res) {
                $this->success('更新角色成功', 'role');
            } else {
                $this->error('更新角色失败');
            }
        }
        return view('edite_role', ['model' => $model]);

    }

//    批量删除角色
    public function delRoleAll()
    {
        $data = $this->request->param();
        $id = $data['id'];
        $num = count($id);
        $res = Role::destroy($id);
        if ($res) {
            return json(['status' => 1, 'msg' => "删除成功", 'num' => $num]);
        } else {
            return json(['status' => 0, 'msg' => '删除失败']);
        }
    }

//    添加规则
    public function addRule()
    {
        if (request()->isGet()) {
            $id = input('id', 0);
            $parent_rule = $this->rule->getAll(
                ['pid' => 0]
            );
            return view('add_rule', ['parent_rule' => $parent_rule, 'id' => $id]);
        } else {
            $data = input('post.');
            $data['level'] = $data['pid'] == 0 ? 1 : 2;
            $res = $this->rule->save($data);
            if ($res) {
                $this->success('添加成功', 'Rbac/rule');
            } else {
                $this->error('添加失败');
            }

        }
    }

//   显示规则列表
    public function rule()
    {
        $data = $this->rule->getAll();
        $rules = node_merge($data);
        return view('rule', ['rules' => $rules]);

    }

//    更新规则
    public function editeRule()
    {
        if (request()->isGet()) {
            $id = input('id');
            $rule = $this->rule->get(['id' => $id]);
            return view('edite_rule', ['rule' => $rule]);
        } else {
            $data = $this->request->post();
            $where = ['id' => input('id')];
            $res = $this->rule->updateData($where, $data);
            if ($res > 0) {
                $this->success('更新成功', 'Rbac/rule');
            } else {
                $this->error('没有更新任何数据', 'Rbac/editeRule?id=$id');
            }

        }
    }

//    删除规则
    public function delRule($id)
    {
        $where = "id=$id or pid=$id";
        $res = $this->rule->delData($where);
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

}
