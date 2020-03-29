<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"F:\xampp\htdocs\shop\public/../application/index\view\index\register.html";i:1584922850;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0035)http://www.52minq.com/register.html -->
<html dir="ltr" lang="zh-CN"><!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>电猴</title>
    <script src="/static/index/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <link href="/static/index/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="/static/index/js/bootstrap.min.js" type="text/javascript"></script>
    <link href="/static/index/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/static/index/css/stylesheet.css" rel="stylesheet">
    <link rel="icon" href="http://www.52minq.com/Public/Common/img/cart.png">
    <link href="/static/index/css/owl.carousel.css" type="text/css" rel="stylesheet" media="screen">
    <link href="/static/index/css/owl.transitions.css" type="text/css" rel="stylesheet" media="screen">
    <script src="/static/index/js/common.js" type="text/javascript"></script>
    <script src="/static/index/js/zebra_dialog.js"></script>

    <link href="/static/index/css/dialog.css" rel="stylesheet" type="text/css">

    <script src="/static/index/js/owl.carousel.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/static/index/js/jquery.XYTipsWindow.min.2.8.js"></script>
    <script src="/static/index/layer/layer.js" type="text/javascript"></script>
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
                    <a href="http://www.52minq.com/register.html">
                        <img src="/static/index/image/11.jpg" title="电猴" alt="电猴"
                             class="img-responsive" style="width:100px; height: 100px">

                    </a>
                </div>
            </div>
            <div class="col-sm-8 mini-cart" id="cart_reflush">
                <div id="cart">
                    <a href="http://www.52minq.com/cart.html" class="cart-info">
            <span class="cart-icon"> <i class="fa fa-shopping-cart"></i>
            </span>
                        <span id="cart-total">1 个商品 - ￥700</span>
                    </a>
                    <ul class="cart-content dropdown-menu hidden-sm hidden-xs" id="cart_reflush">
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <td class="text-center">
                                    <a href="http://www.52minq.com/goods/38.html">
                                        <img class="img-thumbnail" title="耐克正品跑鞋" alt="耐克正品跑鞋"
                                             src="image/57c51aedbb789_300x340.jpg" width="50px">
                                    </a>
                                </td>
                                <td class="text-left"><a href="http://www.52minq.com/goods/38.html">耐克正品跑鞋</a>
                                    <br>
                                    x 1
                                </td>
                                <td class="text-right">
                                    ￥700          <!--<a onclick="cart.remove('146');" class="remove">移除</a>-->
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td class="text-right"><strong>商品总额</strong></td>
                                <td class="text-right">￥700</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>订单总额</strong></td>
                                <td class="text-right">￥700</td>
                            </tr>
                            </tbody>
                        </table>
                        <p class="text-right"><a href="http://www.52minq.com/cart.html"><strong><i
                                class="fa fa-shopping-cart"></i> 查看购物车</strong></a>&nbsp;&nbsp;&nbsp;<a
                                href="http://www.52minq.com/order.html"><strong><i class="fa fa-share"></i> 去结账</strong></a>
                        </p>
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
            <form id="goods_search_form" action="http://www.52minq.com/search/index.html">
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


<script src="js/jquery.validate.min.js"></script>
<script src="js/additional-methods.min.js"></script>
<script src="js/messages_zh.js"></script>
<div class="container">
    <ul class="breadcrumb">
        <li>
            <a href="http://www.52minq.com/register.html">
                <i class="fa fa-home"></i>
            </a>
        </li>
        <li>
            <a href="http://www.52minq.com/register.html">我的账户</a>
        </li>
        <li>
            <a href="http://www.52minq.com/register.html">用户注册</a>
        </li>
    </ul>
    <div class="row">
        <div id="content" class="col-sm-9">
            <h1>用户注册</h1>
            <p>
                欢迎来到我们网站，如果您是新用户，请填写下面的表单进行注册。如果您已经是本站的会员，请您直接
                <a href="http://www.52minq.com/login.html">登录</a>
                。
            </p>
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="http://www.52minq.com/register.html#tab-email-register" data-toggle="tab">E-Mail 注册</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab-email-register">
                    <input type="hidden" name="register_type" value="email">
                    <fieldset id="account">
                        <div class="form-group required form_control success">
                            <label class="col-sm-2 control-label" for="input-email">电子邮箱</label>
                            <div class="col-sm-10 required form_control success">
                                <input type="email" name="email" value="" placeholder="电子邮箱" id="email"
                                       class="form-control" required="" data-error="email不能为空||邮箱格式不正确"
                                       data-valid="isNonEmpty||isEmail" data-tip="请输入您的邮箱" data-status="1">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="input-name">您的姓名</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" value="" placeholder="您的姓名" id="name"
                                       class="form-control" required="" data-error="email不能为空||邮箱格式不正确"
                                       data-valid="isNonEmpty||isEmail" data-tip="请输入您的邮箱" data-status="1">
                            </div>
                        </div>

                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-password">输入密码</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" value="" placeholder="输入密码"
                                       id="password" class="form-control" required=""
                                       data-error="email不能为空||邮箱格式不正确" data-valid="isNonEmpty||isEmail"
                                       data-tip="请输入您的邮箱" data-status="1">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-confirm">确认密码</label>
                            <div class="col-sm-10">
                                <input type="password" name="confirm" value="" placeholder="确认密码" id="confirm"
                                       class="form-control" required="" data-error="email不能为空||邮箱格式不正确"
                                       data-valid="isNonEmpty||isEmail" data-tip="请输入您的邮箱" data-status="1">
                            </div>
                        </div>

                    </fieldset>
                    <div class="buttons">
                        <div class="pull-right">
                            我已经阅读并同意
                            <a href="http://www.52minq.com/register.html" class="agree"> <b>隐私政策</b>
                            </a>
                            <input type="checkbox" name="agree" value="1" id="agree" class="input-agree" checked="">
                            <input type="submit" value="继续" class="btn btn-primary btn-submit" id="register">
                        </div>
                    </div>
                </div>


                </fieldset>
            </div>
        </div>
    </div>
</div>
</div>
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
<script type="text/javascript">
    $("#register").on('click',function(){
        var email=$.trim($("#email").val());  //获取邮箱号
        var name=$.trim($("#name").val()); //获取用户姓名
        var password=$.trim($("#password").val()); //获取密码
        var confirm=$.trim($("#confirm").val()); //获取确任密码
        var num = 0;//代表错误的数量
        var str = '';//代表错误的信息

        if(email==""){
            str+="邮箱不能为空";
            num++;
        }

        if(name==""){
            str+="用户名不能为空";
            num++;
        }

        if(password==""){
            str+="密码不能为空";
            num++;
        }

        if(confirm==""){
            str+="确认密码不能为空";
            num++;
        }

        if(!(password==confirm)){
            str+="两次密码必须一致";
            num++;
        }

        if (num > 0) {
            layer.msg(str, {
                title: '错误信息提示',
                icon: 5
            });
            return;//如果信息每填就不用发送ajax
        }

        $.ajax({
            url:"<?php echo url('index/registers'); ?>",
            type:'post',
            data:{
                'email':email,
                'name':name,
                'password':password,
                'confirm':confirm
            },
            dataType:'json',
            success:function(res) {
                console.log(res);
                if (res.status == 1) {
                    window.location.href = "<?php echo url('index/login'); ?>";
                } else {
                    layer.msg(res.msg, {
                        'title': '错误信息提示',
                        'icon': 5
                    })
                }
            }
        })


    })



</script>