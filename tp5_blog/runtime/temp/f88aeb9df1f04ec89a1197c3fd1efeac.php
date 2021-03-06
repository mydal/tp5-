<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"F:\xampp\htdocs\tp5_blog\public/../application/admin\view\admin\lists.html";i:1583896788;s:63:"F:\xampp\htdocs\tp5_blog\application\admin\view\common\top.html";i:1583543949;s:64:"F:\xampp\htdocs\tp5_blog\application\admin\view\common\left.html";i:1583808925;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="http://www.blog.cn:83/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="http://www.blog.cn:83/static/admin/style/font-awesome.css" rel="stylesheet">
    <link href="http://www.blog.cn:83/static/admin/style/weather-icons.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="http://www.blog.cn:83/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="http://www.blog.cn:83/static/admin/style/demo.css" rel="stylesheet">
    <link href="http://www.blog.cn:83/static/admin/style/typicons.css" rel="stylesheet">
    <link href="http://www.blog.cn:83/static/admin/style/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="http://www.blog.cn:83/static/admin/layer/skin/layer.css">
    <style>
        .check-cart-item {
            background: #fff4e8;
        }
        #txt{
            outline-style: none ;
            border: 1px solid #ccc;
            border-radius: 3px;
            padding: 3px 2px;
            font-size: 14px;
            font-weight: 700;
            font-family: "Microsoft soft";
        }
        #txt:focus{
            border-color: #66afe9;
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);

        }
    </style>

</head>
<body>
<!-- 头部 -->
<!-- 头部 -->
<div class="navbar">
    <div class="navbar-inner" style="background-color:darkred">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="http://www.blog.cn:83/static/admin/images/logo1.jpg"  alt="">
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="<?php echo \think\Request::instance()->session('pic'); ?>" >
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo \think\Request::instance()->session('username'); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('login/index'); ?>">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/edit',['id'=>\think\Request::instance()->session('uid')]); ?>">
                                        修改密码
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>

<!-- /头部 -->

<div class="main-container container-fluid">
    <div class="page-container">
        <!-- Page Sidebar -->
        <div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">管理员</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('admin/lists'); ?>">
                                    <span class="menu-text">
                                        管理列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-truck"></i>
                <span class="menu-text">物资</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('article/lists'); ?>">
                                    <span class="menu-text">
                                        物资列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text">物资类别</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('mcate/lists'); ?>">
                                    <span class="menu-text">
                                        物资类别列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-file-archive-o"></i>
                <span class="menu-text">新闻</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('news/lists'); ?>">
                                    <span class="menu-text">
                                        新闻列表                                   </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-list-ul"></i>
                <span class="menu-text">新闻类别</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('tags/lists'); ?>">
                                    <span class="menu-text">
                                        新闻类别列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-github"></i>
                <span class="menu-text">新闻作者</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('author/lists'); ?>">
                                    <span class="menu-text">
                                        新闻作者列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>




    </ul>
    <!-- /Sidebar Menu -->
</div>

        <!-- /Page Sidebar -->
        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <a href="<?php echo url('index/index'); ?>">首页</a>
                    </li>
                    <li class="active">管理员管理</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">
                <form action="<?php echo url('admin/lists'); ?>" method="post">
                    <label for="">登录名称:</label>
                    <input type="text" id="txt" name="username">
                    <label for="" style="margin-left: 15px;">状态:</label>
                    <select name="status" style="margin-left: 10px;">
                        <option value="-1">--请选择</option>
                        <option value="0">启用</option>
                        <option value="1">禁用</option>
                    </select>
                    <button type="submit" class="btn btn-success "
                        style="margin-left: 30px; "><i class="fa fa-search"></i> 查询
                    </button>
                    <br>
                </form>

                <div style="margin-top:20px">
                    <button type="button" tooltip="添加管理员" class="btn btn-sm btn-azure btn-addon"
                            onClick="javascript:window.location.href = '<?php echo url('admin/add'); ?>'"><i class="fa fa-plus"></i> 添加
                    </button>
                    <button type="submit" tooltip="删除管理员" class="btn btn-danger btn-sm shi"
                            onclick="delAll()"><i class="fa fa-trash-o"></i> 批量删除
                    </button>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">

                        <div class="widget">
                            <div class="widget-body">
                                <div class="flip-scroll">
                                    <table class="table table-bordered table-hover">
                                        <thead class="">
                                        <tr>
                                            <th class="text-center"><input type="checkbox" id="all"
                                                                           style="!important; opacity: 1.2;position: static;">
                                            </th>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">管理员名称</th>
                                            <th class="text-center">管理员状态</th>
                                            <th class="text-center">管理员缩略图</th>
                                            <th class="text-center">添加时间</th>
                                            <th class="text-center">更新时间</th>
                                            <th class="text-center">操作</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <form class="piliangshanchan">
                                            <?php foreach($model as $value): ?>
                                            <tr>
                                                <td class="text-center"><input type="checkbox" value="<?php echo $value['id']; ?>"
                                                                               name="id[]" id="checkbox"
                                                                               class="cheidbox"
                                                                               style="!important; opacity: 1.2;position: static;">
                                                </td>
                                                <td class="text-center"><?php echo $value['id']; ?></td>
                                                <td class="text-center"><?php echo $value['username']; ?></td>
                                                <td class="text-center">
                                                    <?php if($value['status']==0): ?>
                                                        启用
                                                    <?php else: ?>
                                                        禁用
                                                    <?php endif; ?>
                                                </td>
                                                <td class="text-center"><img src="<?php echo $value['pic']; ?>" height="40px" alt=""></td>
                                                <td class="text-center"><?php echo date("Y-m-d H:i:s",$value['create_time']); ?></td>
                                                <td class="text-center"><?php echo date("Y-m-d H:i:s",$value['update_time']); ?></td>

                                                <td align="center">
                                                    <a href="<?php echo url('edit',['id'=>$value['id']]); ?>"
                                                       class="btn btn-primary btn-sm shiny">
                                                        <i class="fa fa-edit"></i> 编辑
                                                    </a>
                                                    <?php if($value['id'] != 4): ?>
                                                    <a href="#"
                                                       onClick="warning('确实要删除吗', '<?php echo url('admin/del',array('id'=>$value['id'])); ?>')"
                                                       class="btn btn-danger btn-sm shiny">
                                                        <i class="fa fa-trash-o"></i> 删除
                                                    </a>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>

                                        </form>

                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                </div>

                            </div>
                        </div>
                        <?php echo $model->render(); ?>
                    </div>
                </div>
            </div>
            <!-- /Page Body -->
        </div>
        <!-- /Page Content -->
    </div>
</div>

<!--Basic Scripts-->
<script src="http://www.blog.cn:83/static/admin/style/jquery_002.js"></script>
<script src="http://www.blog.cn:83/static/admin/style/bootstrap.js"></script>
<script src="http://www.blog.cn:83/static/admin/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="http://www.blog.cn:83/static/admin/style/beyond.js"></script>
<script src="http://www.blog.cn:83/static/admin/layer/layer.js"></script>
<script>


    // 全选
    $('#all').change(function () {
        if ($(this).is(':checked')) {
            $(':checkbox').prop("checked", true);
        } else {
            $(':checkbox').prop("checked", false);
        }
    });

    //反选
    $(".cheidbox").change(function(){
        var len=$(".cheidbox").length;  //获取所有小复选框的个数

        var len2=$("input.cheidbox:checked").length;  //获取选中的小复选框个数
        if(len==len2){
            $('#all').prop("checked",true);
        }else{
            $('#all').prop("checked",false);
        }

    });

    //批量删除提交
    function delAll() {
        layer.confirm('确认要删除吗？', function (index) {
            if ($('.cheidbox').is(':checked')) {
                $.ajax({
                    url: "<?php echo url('admin/delAll'); ?>",
                    data: $('.piliangshanchan').serialize(),
                    dataType: "json",
                    type: 'post',
                    async: false,
                    success: function (res) {
                        // console.log(res);
                        if (res.status == 1) {
                            layer.alert(res.message + "，共删除" + res.num + "数据", {icon: 6}, function () {
                                window.location.reload();  //页面刷新
                                // layer.close(index) - 关闭特定层
                                // 获得iframe索引
                                var index = parent.layer.getFrameIndex(window.name);
                                //关闭当前frame
                                parent.layer.close(index);

                            });
                        } else {
                            layer.alert(res.message, {icon:1}, function () {
                                window.location.reload();
                                // 获得frame索引
                                var index = parent.layer.getFrameIndex(window.name);
                                //关闭当前frame
                                parent.layer.close(index);

                            });
                        }
                    }

                })
            } else {
                layer.msg('请选择~~', {icon: 2});

            }
        });
    }

</script>

</body>
</html>