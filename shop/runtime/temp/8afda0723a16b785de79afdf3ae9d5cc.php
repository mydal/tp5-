<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"F:\xampp\htdocs\shop\public/../application/admin\view\category\edite.html";i:1584675186;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>更新商品分类</title>
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
                <a href="<?php echo url('category/index'); ?>">商品分类列表</a>
            </li>
            <li class="uline">/</li>
            <li>
                <a class="active" href="javascript:;">更新商品分类</a>
            </li>
        </ul>
    </div>
    <form action="<?php echo url('Category/edite'); ?>" method="post" class="form form-horizontal">
        <div class="Operate_cont clearfix">
            <label class="form-label">分类名：</label>
            <div class="formControls ">
                <input type="text" class="input-text" name="title" value="<?php echo $categorys['title']; ?>">
            </div>
        </div>
        <div class="Operate_cont clearfix">
            <label class="form-label">SEO标题:</label>
            <div class="formControls ">
                <input type="text" class="input-text" name="meta_title" value="<?php echo $categorys['meta_title']; ?>">
            </div>
        </div>
        <div class="Operate_cont clearfix">
            <label class="form-label">SEO关键字：</label>
            <div class="formControls ">
                <input type="text" class="input-text" name="meta_keywords" value="<?php echo $categorys['meta_keywords']; ?>">
            </div>
        </div>
        <div class="Operate_cont clearfix">
            <label class="form-label">SEO描述：</label>
            <div class="formControls ">
                <textarea name="meta_description"><?php echo $categorys['meta_description']; ?></textarea>
            </div>
        </div>
        <div class="Operate_cont clearfix">
            <label class="form-label">父分类：</label>
            <div class="formControls ">
                <select name="pid" id="">
                    <option value="0">--无--</option>
                    <?php foreach($parent_category as $item): ?>
                    <option value="<?php echo $item['id']; ?>" <?php if($item['id'] == $pid): ?> selected <?php endif; ?>><?php echo $item['title']; ?></option>
                    <?php endforeach; ?>

                </select>
            </div>
        </div>

        <!--。。。。（省略了meta_title,meta_descriptions,meta_keywords）-->

        <div class="Operate_cont clearfix">
            <label class="form-label">状态：</label>
            <div class="formControls ">
                <input type="hidden" name="id" value="<?php echo $categorys['id']; ?>">
                <?php if($categorys['status'] == 1): ?>
                <input type="radio" checked value="1" name="status">启用
                <input type="radio" value="0" name="status">禁用
                <?php else: ?>
                <input type="radio" value="1" name="status">启用
                <input type="radio" value="0" name="status" checked>禁用
                <?php endif; ?>
            </div>
        </div>
        <div class="Operate_cont clearfix">
            <input class="btn btn-primary radius Operate_cont_btn" type="submit" value="更新">
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