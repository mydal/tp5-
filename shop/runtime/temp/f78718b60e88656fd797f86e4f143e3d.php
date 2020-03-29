<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"F:\xampp\htdocs\shop\public/../application/admin\view\rbac\rule.html";i:1584409557;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>节点列表</title>
    <link rel="shortcut icon" href="/static/admin/images/favicon.ico">
    <link href="/static/admin/assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/static/admin/assets/css/font-awesome.min.css"/>
    <!--[if IE 7]>
    <link rel="stylesheet" href="/static/admin/ssets/css/font-awesome-ie7.min.css"/>
    <![endif]-->
    <link rel="stylesheet" href="/static/admin/assets/css/ace.min.css"/>
    <link rel="stylesheet" href="/static/admin/assets/css/ace-rtl.min.css"/>
    <link rel="stylesheet" href="/static/admin/assets/css/ace-skins.min.css"/>
    <link rel="stylesheet" href="/static/admin/css/style.css"/>
    <link rel="stylesheet" href="/static/admin/css/node.css"/>
    <link rel="stylesheet" href="/static/admin/assets/layer/skin/layer.css"/>
    <script src="/static/admin/assets/laydate/laydate.js" type="text/javascript"></script>
</head>

<body>
<div class="crumbs">
    <ul>
        <li>
            <a href="javascript:;" class="active">规则管理</a>
        </li>
    </ul>
</div>
<div id="wrap">
    <div class="app">
        [<a href="<?php echo url('Rbac/addRule'); ?>">添加控制器</a>]
        <?php foreach($rules as $rule): ?>
        <dl>
            <dt>
                <strong><?php echo $rule['title']; ?></strong>
                [<a href="<?php echo url('Rbac/addRule',['id'=>$rule['id']]); ?>">添加方法</a>]

                [<a href="<?php echo url('Rbac/editeRule',['id'=>$rule['id']]); ?>">修改</a>]
                [<a href="javascript:void(0);" class="del_rule" data-id="<?php echo $rule['id']; ?>" data-k="controller">删除</a>]
            </dt>
            <?php foreach($rule['child'] as $item): ?>
            <dd>
                <span><?php echo $item['title']; ?></span> [
                <a href="<?php echo url('Rbac/editeRule',['id'=>$item['id']]); ?>">修改</a>] [
                <a href="javascript:void(0);" class="del_rule" data-id="<?php echo $item['id']; ?>" data-k="action">删除</a>]
            </dd>
            <?php endforeach; ?>
        </dl>
        <?php endforeach; ?>

    </div>

</body>

</html>
<script src="/static/admin/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="/static/admin/assets/layer/layer.js" type="text/javascript"></script>
<script>
    $(function () {
        $(".del_rule").on('click', function () {
            var that = $(this);//接收this对象
            var $id = $(this).data('id');//接收id编号
            var $kind = $(this).data('k');//接收删除的类型 控制器还是方法

            layer.confirm('你真的要删除吗?', {icon: 3}, function () {
                $.ajax({
                    url: "<?php echo url('Rbac/delRule'); ?>",
                    type: 'post',
                    data: {id: $id},
                    dataType: 'json',
                    success: function (res) {
                        if (res.status == 1) {
                            if ($kind == 'controller') {
                                console.log(res);
                                $(that).parent().parent().remove();
                                layer.alert(res.msg, {
                                    title: '信息提示',
                                    icon: 1
                                })
                            } else if ($kind == 'action') {
                                $(that).parent().remove();
                                layer.alert(res.msg, {
                                    title: '信息提示',
                                    icon: 1
                                })


                            }
                        } else {
                            layer.alert(res.msg, {
                                title: '信息提示',
                                icon: 2
                            })

                        }
                    }


                })
            })

        })
    })
</script>
