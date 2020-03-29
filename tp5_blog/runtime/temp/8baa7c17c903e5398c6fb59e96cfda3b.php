<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"F:\xampp\htdocs\tp5_blog\public/../application/admin\view\admin\add.html";i:1583748262;s:63:"F:\xampp\htdocs\tp5_blog\application\admin\view\common\top.html";i:1583543949;s:64:"F:\xampp\htdocs\tp5_blog\application\admin\view\common\left.html";i:1583808925;}*/ ?>
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

</head>
<body>
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
                    <li>
                        <a href="<?php echo url('admin/lists'); ?>">管理员管理</a>
                    </li>
                    <li class="active">添加用户</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">

                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-header bordered-bottom bordered-blue">
                                <span class="widget-caption">新增管理员</span>
                            </div>
                            <div class="widget-body">
                                <div id="horizontal-form">
                                    <form class="form-horizontal" role="form" action="add" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="username"
                                                   class="col-sm-2 control-label no-padding-right">管理员</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="username" placeholder="" name="username"
                                                       required="" type="text">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>

                                        <div class="form-group">
                                            <label for="group_id"
                                                   class="col-sm-2 control-label no-padding-right">密码</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="password" placeholder="" name="password"
                                                       required="" type="password">

                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="group_id"
                                                   class="col-sm-2 control-label no-padding-right">管理员缩略图</label>
                                            <div class="col-sm-6">
                                                <input type="file" name="pic">
                                            </div>
                                        </div>
                                            <div class="form-group">
                                                <label for="group_id"
                                                       class="col-sm-2 control-label no-padding-right">管理员状态</label>
                                                <div class="col-sm-6">
                                                    <select name="status" id="" class="form-control">
                                                        <option value="" selected>请选择</option>
                                                        <option value="0" >启用</option>
                                                        <option value="1" >禁用</option>
                                                    </select>

                                                </div>
                                                <p class="help-block col-sm-4 red">* 必填</p>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-default">添加管理员信息</button>
                                                </div>
                                            </div>




                                    </form>
                                </div>
                            </div>
                        </div>
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
</script>


</body>
</html>