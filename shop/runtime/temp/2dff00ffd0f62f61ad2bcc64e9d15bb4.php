<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"F:\xampp\htdocs\shop\public/../application/admin\view\rbac\edite_role.html";i:1584599673;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>添加管理员</title>
    <link href="/static/admin/assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/static/admin/css/style.css"/>
    <link rel="stylesheet" href="/static/admin/assets/css/ace.min.css"/>
    <link rel="stylesheet" href="/static/admin/assets/css/font-awesome.min.css"/>
    <link href="/static/admin/Widget/icheck/icheck.css" rel="stylesheet" type="text/css"/>
    <!--[if IE 7]>
    <link rel="stylesheet" href="/static/admin/assets/css/font-awesome-ie7.min.css"/>
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/static/admin/assets/css/ace-ie.min.css"/>
    <![endif]-->
    <script src="/static/admin/js/jquery-1.9.1.min.js"></script>
    <script src="/static/admin/assets/js/bootstrap.min.js"></script>
</head>

<body>
<div class="type_style">
    <div class="crumbs">
        <ul>
            <li>
                <a href="<?php echo url('rbac/role'); ?>">角色列表</a>
            </li>
            <li class="uline">/</li>
            <li>
                <a class="active" href="javascript:;">更新角色</a>
            </li>
        </ul>
    </div>
    <form action="" method="post" class="form form-horizontal">
        <div class="Operate_cont clearfix">
            <label class="form-label">角色名：</label>
            <div class="formControls ">
                <input type="text" class="input-text" value="<?php echo $model['name']; ?>" placeholder="" name="name" datatype="*"
                       nullmsg="角色名不能为空！">
                <span class="Validform_checktip"></span>
            </div>
        </div>
        <div class="Operate_cont clearfix">
            <label class="form-label">角色中文名：</label>
            <div class="formControls ">
                <input type="text" class="input-text" value="<?php echo $model['remark']; ?>" placeholder="" name="remark" datatype="*"
                       nullmsg="角色中文名不能为空！">
                <span class="Validform_checktip"></span>
            </div>
        </div>
        <div class="Operate_cont clearfix">
            <label class="form-label">状态：</label>
            <div class="formControls">
                <input type="hidden" name="id" value="<?php echo $model['id']; ?>">
                <?php if($model['status']=='1'): ?>
                <input type="radio" checked name="status" value="1">启用
                <input type="radio" name="status" value="0">禁用
                <?php else: ?>
                <input type="radio" name="status" value="1">启用
                <input type="radio" checked name="status" value="0">禁用
                <?php endif; ?>
            </div>
        </div>
        <div class="Operate_cont clearfix">
            <input class="btn btn-primary radius Operate_cont_btn" type="submit" value="提交">
        </div>
    </form>
</div>

<script type="text/javascript" src="/static/admin/Widget/Validform/5.3.2/Validform.min.js"></script>
<script type="text/javascript">
    $(function () {
        //表单验证
        $("form").Validform({
            tiptype: function (msg, o, cssctl) {
                if (!o.obj.is("form")) {
                    //默认表单
                    var objtip = o.obj.parents(".formControls").find(".Validform_checktip");
                    cssctl(objtip, o.type);
                    objtip.text(msg);
                }
            },
            showAllError: true
        })
    });
</script>
</body>
</html>