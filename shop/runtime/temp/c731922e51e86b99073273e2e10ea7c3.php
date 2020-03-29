<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"F:\xampp\htdocs\shop\public/../application/index\view\index\index.html";i:1584922588;}*/ ?>
﻿<!DOCTYPE html>
<!-- saved from url=(0022)https://mydal.cn/ -->
<html dir="ltr" lang="zh-CN"><!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>电猴</title>
    <meta name="description" content="电猴">
    <meta name="keywords" content="电猴">
    <script src="/static/index/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <link href="/static/index/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="/static/index/js/bootstrap.min.js" type="text/javascript"></script>
    <link href="/static/index/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/static/index/css/stylesheet.css" rel="stylesheet">
    <link rel="icon" href="https://mydal.cn/Public/Common/img/cart.png">
    <link href="/static/index/css/owl.carousel.css" type="text/css" rel="stylesheet" media="screen">
    <link href="/static/index/css/owl.transitions.css" type="text/css" rel="stylesheet" media="screen">
    <script src="/static/index/js/common.js" type="text/javascript"></script>
    <script src="/static/index/js/zebra_dialog.js"></script>

    <link href="/static/index/css/dialog.css" rel="stylesheet" type="text/css">

    <script src="/static/index/js/owl.carousel.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/static/index/js/jquery.XYTipsWindow.min.2.8.js"></script>
</head>

<body class="common-home">

<nav id="top">
    <div class="container">
        <div id="top-links" class="nav pull-right">
            <ul class="list-inline">
                <li>
                    <a href="https://mydal.cn/"> <i class="fa fa-phone"></i>
                    </a>
                    <span class="hidden-xs hidden-sm hidden-md">12138</span>
                </li>
                <li class="dropdown">
                    <a href="https://mydal.cn/" title="会员中心" class="dropdown-toggle" data-toggle="dropdown"> <i
                            class="fa fa-user"></i>
                        <span class="hidden-xs hidden-sm hidden-md">会员中心</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">

                        <li>
                            <a href="<?php echo url('index/register'); ?>">会员注册</a>
                        </li>
                        <li>
                            <a href="<?php echo url('index/login'); ?>">会员登录</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="https://mydal.cn/" id="wishlist-total" title="收藏（0）">
                        <i class="fa fa-heart"></i>
                        <span class="hidden-xs hidden-sm hidden-md"></span></a><a
                        href="https://mydal.cn/">收藏（<span id="my_collection">0</span>）</a>

                </li>
                <li>
                    <a href="<?php echo url('cart/index'); ?>" title="购物车">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="hidden-xs hidden-sm hidden-md">购物车</span>
                    </a>
                </li>
                <li>
                    <a href="https://mydal.cn/" title="结账">
                        <i class="fa fa-share"></i>
                        <span class="hidden-xs hidden-sm hidden-md">结账</span>
                    </a>
                </li>

                <li>
                    <a href="https://mydal.cn/" title="留言" target="_blank">
                        <i class="fa fa-qq"></i>
                        <span class="hidden-xs hidden-sm hidden-md">留言</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div id="logo">
                    <a href="https://mydal.cn/">
                        <img src="/static/index/image/11.jpg" title="电猴" alt="电猴"
                             class="img-responsive" style="width:100px; height: 100px">
                    </a>
                </div>
            </div>
            <div class="col-sm-8 mini-cart" id="cart_reflush">
                <div id="cart">
                    <a href="https://mydal.cn/" class="cart-info">
            <span class="cart-icon"> <i class="fa fa-shopping-cart"></i>
            </span>
                        <span id="cart-total">0 个商品 - ￥0</span>
                    </a>
                    <ul class="cart-content dropdown-menu hidden-sm hidden-xs" id="cart_reflush">
                        <li>
                            <p class="text-center empty">您的购物车内没有商品！</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="main-menu-wrapper">
    <div class="container">
        <div class="main-menu-mobile">
            菜单
            <span class="main-menu-toggle"> <i class="fa fa-bars"></i>
      </span>
        </div>
        <div class="main-menu-container">
            <ul class="main-menu">
                <li class="parent">
                    <a href="<?php echo url('index/index'); ?>">首页</a>
                </li>
                <?php foreach($categorys as $v): ?>
                <li class="parent with-sub-menu"><a
                        href="https://mydal.cn/"><?php echo $v['title']; ?></a>
                    <div class="open-sub-menu">+</div>
                    <ul class="sub-menu" style="width: 90px;">
                        <?php foreach($categoryi as $value): ?>
                        <a href="https://mydal.cn/"><?php if($value['pid'] == $v['id']): ?><?php echo $value['title']; endif; ?></a>
                        <div class="open-sub-menu">+</div>
                        <?php endforeach; ?>

                    </ul>
                </li>
                <?php endforeach; ?>


            </ul>

        </div>
        <script>
            $('.sub-menu>li').mouseenter(function (e) {
                $(this).parent().find('ul.second-menu').hide().eq($(this).index()).show();
            });
        </script>
        <div id="search" class="input-group">
            <form id="goods_search_form" action="https://mydal.cn/">
                <input type="text" name="keywords" value="" placeholder="搜索" class="form-control">
            </form>

            <span class="input-group-btn">
        <button type="button" class="btn btn-primary" id="goods_search_button"> <i class="fa fa-search"></i>
        </button>
      </span>
        </div>
    </div>
</div>
<script>
    $('#goods_search_button').click(function () {
        $('#goods_search_form').submit();
    });
</script>


<div class="container">
    <div class="row">
        <div id="content" class="col-sm-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php foreach($model as $value): ?>
                    <div class="<?php if($value['id'] == 1): ?>item active <?php else: ?> item <?php endif; ?>" style="height: 600px;">
                        <img src="/uploads/product/<?php echo $value['image']; ?>" alt="..." style="width:1160px; height: 600px;">
                    </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </div>
    <h2 class="widget-title">
        <span>推荐商品</span>
    </h2>
    <div class="row">
        <?php foreach($models as $value): ?>
        <div class="product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="product-wrapper">
                <div class="product-image">
                    <a href="http://www.mydal.cn/">
                        <img src="/uploads/product/<?php echo $value['image']; ?>"
                             class="img-responsive"> </a>
                </div>
                <div class="product-info">
                    <div class="product-name">
                        <a href="https://mydal.cn/"><?php echo $value['title']; ?></a>
                    </div>
                    <div class="product-description">
                        <p>..</p>
                    </div>
                    <div class="product-rating">
                    <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-2x"></i>
                    </span>
                        <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-2x"></i>
                    </span>
                        <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-2x"></i>
                    </span>
                        <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-2x"></i>
                    </span>
                        <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-2x"></i>
                    </span>
                    </div>
                    <div class="product-price">
                        <span class="price-best">￥<?php echo $value['price']; ?></span>
                        <span class="price-old">￥<?php echo $value['quantity']; ?></span>
                    </div>
                    <div class="product-action">
                        <button type="button" class="add-to-cart"
                                onclick="addCart(32,&#39;/goods/32.html&#39;)">
                            <i class="fa fa-shopping-cart"></i>
                            <span>加入购物车</span>
                        </button>
                        <div class="ps-add-buyincang" id="btn-visible">
                            <button type="button" class="wishlist collection" goods_id="32">
                                <i class="fa fa-heart-o"></i>
                                <span class="collection_add">收藏</span>
                            </button>
                            <button type="button" class="compare">
                                <i class="fa fa-bars"></i>
                                <span>对比</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <ul id="banner0" class="banners">
        <li class="item">
            <a href="https://mydal.cn/">
                <img src="/uploads/product/<?php echo $recommends['image']; ?>" alt="hengfu-xia" class="img-responsive">
            </a>
        </li>
    </ul>
    <h2 class="widget-title">
        <span>最新商品</span>
    </h2>
    <div class="row">
        <?php foreach($iphone as $value): ?>
        <div class="product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="product-wrapper">
                <div class="product-image">
                    <a href="https://mydal.cn/">
                        <img src="/uploads/product/<?php echo $value['image']; ?>"
                             class="img-responsive"> </a>
                </div>
                <div class="product-info">
                    <div class="product-name">
                        <a href="https://mydal.cn/"><?php echo $value['title']; ?></a>
                    </div>
                    <div class="product-description">
                        <p>..</p>
                    </div>
                    <div class="product-rating">
                    <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-2x"></i>
                    </span>
                        <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-2x"></i>
                    </span>
                        <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-2x"></i>
                    </span>
                        <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-2x"></i>
                    </span>
                        <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-2x"></i>
                    </span>
                    </div>
                    <div class="product-price">
                        <span class="price-new">￥<?php echo $value['title']; ?></span>
                        <span class="price-old">￥<?php echo $value['quantity']; ?></span>
                    </div>
                    <div class="product-action">
                        <button type="button" class="add-to-cart"
                                onclick="addCart(35,&#39;/goods/35.html&#39;)">
                            <i class="fa fa-shopping-cart"></i>
                            <span>加入购物车</span>
                        </button>
                        <div class="ps-add-buyincang" id="btn-visible">
                            <button type="button" class="wishlist collection" goods_id="35">
                                <i class="fa fa-heart-o"></i>
                                <span class="collection_add">收藏</span>
                            </button>
                            <button type="button" class="compare">
                                <i class="fa fa-bars"></i>
                                <span>对比</span>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php endforeach; foreach($watch as $value): ?>
        <div class="product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="product-wrapper">
                <div class="product-image">
                    <a href="https://mydal.cn/">
                        <img src="/uploads/product/<?php echo $value['image']; ?>"
                             class="img-responsive"> </a>
                </div>
                <div class="product-info">
                    <div class="product-name">
                        <a href="https://mydal.cn/"><?php echo $value['title']; ?></a>
                    </div>
                    <div class="product-description">
                        <p>..</p>
                    </div>
                    <div class="product-rating">
                    <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-2x"></i>
                    </span>
                        <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-2x"></i>
                    </span>
                        <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-2x"></i>
                    </span>
                        <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-2x"></i>
                    </span>
                        <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-2x"></i>
                    </span>
                    </div>
                    <div class="product-price">
                        <span class="price-new">￥<?php echo $value['price']; ?></span>
                        <span class="price-old">￥<?php echo $value['quantity']; ?></span>
                    </div>
                    <div class="product-action">
                        <button type="button" class="add-to-cart"
                                onclick="addCart(31,&#39;/goods/31.html&#39;)">
                            <i class="fa fa-shopping-cart"></i>
                            <span>加入购物车</span>
                        </button>
                        <div class="ps-add-buyincang" id="btn-visible">
                            <button type="button" class="wishlist collection" goods_id="31">
                                <i class="fa fa-heart-o"></i>
                                <span class="collection_add">收藏</span>
                            </button>
                            <button type="button" class="compare">
                                <i class="fa fa-bars"></i>
                                <span>对比</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php endforeach; ?>
    </div>
    <ul id="banner1" class="banners">
        <li class="item">
            <a href="https://mydal.cn/">
                <img src="/uploads/product/<?php echo $recommend['image']; ?>" alt="hengfu-xia" class="img-responsive">
            </a>
        </li>
    </ul>
    <h2 class="widget-title">
        <span>特价商品</span>
    </h2>
    <div class="row">
        <?php foreach($jiadian as $value): ?>
        <div class="product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="product-wrapper">
                <div class="product-image">
                    <a href="http://www.mydal.cn/">
                        <img src="/uploads/product/<?php echo $value['image']; ?>"
                             class="img-responsive"> </a>
                </div>
                <div class="product-info">
                    <div class="product-name">
                        <a href="https://mydal.cn/goods/32.html"><?php echo $value['title']; ?></a>
                    </div>
                    <div class="product-description">
                        <p>..</p>
                    </div>
                    <div class="product-rating">
                    <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-2x"></i>
                    </span>
                        <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-2x"></i>
                    </span>
                        <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-2x"></i>
                    </span>
                        <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-2x"></i>
                    </span>
                        <span class="fa fa-stack">
                      <i class="fa fa-star fa-stack-2x"></i>
                    </span>
                    </div>
                    <div class="product-price">
                        <span class="price-best">￥<?php echo $value['price']; ?></span>
                        <span class="price-old">￥<?php echo $value['quantity']; ?></span>
                    </div>
                    <div class="product-action">
                        <button type="button" class="add-to-cart"
                                onclick="addCart(32,&#39;/goods/32.html&#39;)">
                            <i class="fa fa-shopping-cart"></i>
                            <span>加入购物车</span>
                        </button>
                        <div class="ps-add-buyincang" id="btn-visible">
                            <button type="button" class="wishlist collection" goods_id="32">
                                <i class="fa fa-heart-o"></i>
                                <span class="collection_add">收藏</span>
                            </button>
                            <button type="button" class="compare">
                                <i class="fa fa-bars"></i>
                                <span>对比</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

    </div>

</div>


<script>


    function addCart(goods_id, url) {
        //判断该商品是否有选项
        var flag = true;

        $.ajax({
            url: "/Checkout/hasOption.html",
            type: 'get',
            async: false,//同步
            data: {
                'goods_id': goods_id
            },
            dataType: 'json',
            success: function (response) {
                if (response.result == 'yes') {
                    window.location.href = url;
                    falg = false;
                    return;
                } else {
                    $.ajax({
                        url: "/Checkout/addCart.html",
                        data: {
                            'is_ajax': 1,
                            'goods_id': goods_id
                        },
                        type: 'post',
                        dataType: 'json',
                        success: function (response) {
                            if (response.error == '0') {

                                new $.Zebra_Dialog('<strong>加入购物车成功!</strong> 请去购物车查看或结账您的商品', {
                                    'buttons': false,
                                    'modal': false,
                                    'position': ['right - 50%', 'top + 50%'],
                                    'auto_close': 2000
                                });
                                $('#cart_reflush').load("/Shop/cartChange/is_ajax/yes.html");
                                console.info('加入购物车成功');

                            }
                        }

                    });
                }
            }
        });


    }

    $('.collection').click(function () {
        var url = "/collection/add.html";
        // console.log($(this).attr('goods_id'));
        $.post(url, 'goods_id=' + $(this).attr('goods_id'), function (response) {
            console.log(response);
            if (response.error == '1') {
                $.Zebra_Dialog('<strong>您未登陆!<br /></strong> 只有在登录状态下才可以收藏哦!', {
                    'type': 'warning',
                    'title': '警告'
                });
            } else if (response.error == '2') {
                $.Zebra_Dialog('<strong>已经收藏!<br /></strong> 该物品您已经收藏过哦!', {
                    'type': 'warning',
                    'title': '警告'
                });
            } else {
                new $.Zebra_Dialog('<strong>加入收藏栏成功!</strong> 请去收藏栏查看您的物品或尽快添加到购物车哦', {
                    'buttons': false,
                    'modal': false,
                    'position': ['right - 50%', 'top + 50%'],
                    'auto_close': 2000
                });
                $('#my_collection').html(parseInt($('#my_collection').html()) + 1);


            }

        }, 'json');
    });
</script>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <h5>信息咨询</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="https://mydal.cn/">关于我们</a>
                    </li>
                    <li>
                        <a href="https://mydal.cn/">最新公告</a>
                    </li>
                    <li>
                        <a href="https://mydal.cn/">隐私政策</a>
                    </li>
                    <li>
                        <a href="https://mydal.cn/">条款及条件</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h5>客户服务</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="https://mydal.cn/">联系我们</a>
                    </li>
                    <li>
                        <a href="https://mydal.cn/">退换服务</a>
                    </li>
                    <li>
                        <a href="https://mydal.cn/">网站地图</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h5>其他</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="https://mydal.cn/">品牌专区</a>
                    </li>
                    <li>
                        <a href="https://mydal.cn/">礼品券</a>
                    </li>
                    <li>
                        <a href="https://mydal.cn/">加盟会员</a>
                    </li>
                    <li>
                        <a href="https://mydal.cn/">特别优惠</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h5>会员中心</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="https://mydal.cn/">会员中心</a>
                    </li>
                    <li>
                        <a href="https://mydal.cn/">历史订单</a>
                    </li>
                    <li>
                        <a href="https://mydal.cn/">收藏列表</a>
                    </li>
                    <li>
                        <a href="https://mydal.cn/">订阅咨询</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-4">
                <h5>联系我们</h5>
                <ul class="list-unstyled">
                    <li>
                        <div class="icon">
                            <span class="fa fa-map-marker">&nbsp;</span>
                        </div>
                        <div class="text">电猴科技公司</div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="fa fa-phone">&nbsp;</span>
                        </div>
                        <div class="text">88888888</div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="fa fa-envelope">&nbsp;</span>
                        </div>
                        <div class="text">2049837924@qq.com</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="powered">
            <a href="http://www.miitbeian.gov.cn/" target="_blank">京ICP备7829938号</a>
            <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
            document.write(unescape("%3Cspan id='cnzz_stat_icon_1260050678'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1260050678%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
            <span id="cnzz_stat_icon_1260050678"><a href="http://www.cnzz.com/stat/website.php?web_id=1260050678"
                                                    target="_blank" title="站长统计">
      <!--<img border="0" src="image/bbe3eed4127b10d7790eb41d650b0d05"></a>-->
        </div>
    </div>
    <div class="go-top">
        <a href="https://mydal.cn/" class="scroll-top"> <i class="fa fa-angle-up"></i>
            TOP
        </a>
    </div>
</footer>


</body>
</html>