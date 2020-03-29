<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"F:\xampp\htdocs\shop\public/../application/admin\view\product\add.html";i:1584669374;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>添加商品</title>
    <link rel="stylesheet" href="/static/admin/css/style.css"/>
    <link rel="stylesheet" href="/static/admin/assets/css/ace.min.css"/>
    <link rel="stylesheet" href="/static/admin/assets/css/font-awesome.min.css"/>
    <!--[if IE 7]>
    <link rel="stylesheet" href="/static/admin/assets/css/font-awesome-ie7.min.css"/>
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/static/admin/assets/css/ace-ie.min.css"/>
    <![endif]-->
    <script src="/static/admin/js/jquery-1.9.1.min.js"></script>
    <script src="/static/admin/assets/js/bootstrap.min.js"></script>
    <link href="http://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/static/admin/bootstrap-fileinput-master/css/fileinput.css">
    <script src="/static/admin/bootstrap-fileinput-master/js/fileinput.js"></script>
    <script src="/static/admin/bootstrap-fileinput-master/js/locales/zh.js"></script>
</head>

<body>
<div class="type_style">
    <div class="crumbs">
        <ul>
            <li>
                <a href="<?php echo url('product/index'); ?>">商品列表</a>
            </li>
            <li class="uline">/</li>
            <li>
                <a class="active" href="javascript:;">添加商品</a>
            </li>
        </ul>
    </div>
    <form action="" method="post" class="form form-horizontal" enctype="multipart/form-data">
        <div class="Operate_cont clearfix">
            <label class="form-label">商品名称：</label>
            <div class="formControls ">
                <input type="text" class="input-text" name="title">
                <span class="Validform_checktip"></span>
            </div>
        </div>
        <div class="Operate_cont clearfix">
            <label class="form-label">库存：</label>
            <div class="formControls ">
                <input type="text" class="input-text" name="quantity">
                <span class="Validform_checktip"></span>
            </div>
        </div>
        <div class="Operate_cont clearfix">
            <label class="form-label">原价：</label>
            <div class="formControls ">
                <input type="text" class="input-text" name="minmum">
                <span class="Validform_checktip"></span>
            </div>
        </div>
        <div class="Operate_cont clearfix">
            <label class="form-label">现价：</label>
            <div class="formControls ">
                <input type="text" class="input-text" name="price">
                <span class="Validform_checktip"></span>
            </div>
        </div>

        <div class="Operate_cont clearfix">
            <label class="form-label">上传图片：</label>
            <div class="formControls ">
                <input type="file" id="imgUpload" class="file-loading">
                <input type="hidden" name="image" value="" id="image">
                <input type="hidden" name="image_thumb" value="" id="image_thumb">
            </div>
        </div>
        <div class="Operate_cont clearfix">
            <label class="form-label">分类：</label>
            <div class="formControls ">
                <select name="category_id" id="">
                    <option value="-1">--无--</option>
                    <?php foreach($categorys as $item): ?>
                    <option value="<?php echo $item['id']; ?>"><?php echo $item['title']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="Operate_cont clearfix">
            <input class="btn btn-primary radius Operate_cont_btn" type="submit" value="增加">
        </div>
    </form>
</div>
<script type="text/javascript" src="/static/admin/Widget/Validform/5.3.2/Validform.min.js"></script>
<script type="text/javascript">
    $("#imgUpload").fileinput({
        language: 'zh',
        uploadUrl: "<?php echo url('product/uploadImg'); ?>",
        autoReplace: true,
        maxFileCount: 1,
        allowedFileExtensions: ['jpg', 'png', "gif","webp"],//接收的文件后缀
        browseClass: "btn btn-primary"
    });

    $("#imgUpload").on('fileuploaded', function (event, data) {
        var path = data.response.path;//获取上传成功以后的图片地址
        var thumb_path = data.response.thumb;//获取缩略图的地址
        $("#image").val(path);//把图片地址保存到隐藏域中
        $("#image_thumb").val(thumb_path);
        console.log(path);
        console.log(thumb_path);

    });
</script>
</body>
</html>