<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"F:\xampp\htdocs\tp5_blog\public/../application/admin\view\register\index.html";i:1583923329;}*/ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><!--Head--><head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="login page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="http://www.blog.cn:83/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="http://www.blog.cn:83/static/admin/style/font-awesome.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="http://www.blog.cn:83/static/admin/style/beyond.css" rel="stylesheet">
    <link href="http://www.blog.cn:83/static/admin/style/demo.css" rel="stylesheet">
    <link href="http://www.blog.cn:83/static/admin/style/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="http://www.blog.cn:83/static/admin/layer/skin/layer.css">
    <style>
    </style>
</head>
<!--Head Ends-->
<!--Body-->

<body>
<div class="logins">
    <div class="login-container animated fadeInDown" >
        <form action="" method="post">
            <div class="loginbox bg-white">
                <div class="loginbox-title">register</div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="username" name="username" id="username" type="text">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="password" name="userpwd" id="userpwd" type="password">
                </div>
                <div class="loginbox-submit" >
                    <input class="btn btn-primary btn-block" value="Login" type="button" id="login_btn">
                </div>
            </div>
        </form>
    </div>

</div>

    <!--Basic Scripts-->
    <script src="http://www.blog.cn:83/static/admin/style/jquery.min.js"></script>
    <script src="http://www.blog.cn:83/static/admin/style/bootstrap.js"></script>
    <script src="http://www.blog.cn:83/static/admin/style/jquery_002.js"></script>
    <!--Beyond Scripts-->
    <script src="http://www.blog.cn:83/static/admin/style/beyond.js"></script>
    <script src="http://www.blog.cn:83/static/admin/layer/layer.js"></script>


</body><!--Body Ends--></html>

<script>

    //    验证
    $('#login_btn').on('click',function() {
        var num = 0;
        //记录错误信息
        var str = "";
        var username = $.trim($('#username').val());
        var password = $.trim($('#userpwd').val());
        if (username == "") {
            str += '用户名不能为空<br>';
            num++;
        }
        if (password == "") {
            str += '密码不能为空<br>';
            num++;
        }

        //只要num>0，就表明有错误
        if (num > 0) {
            layer.msg(str, {
                title: '错误提示',
                icon: 2
            });
            //return 关键字就是结束函数的执行，后面的代码不再执行
            return false;
        }
        //如果验证都通过，则提交数据进行登录
        var data = {
            username: username,
            password: password,
        };
        var url = "<?php echo url('register/register'); ?>";

        $.post(url, data, function (res) {
            console.log(res);
            if (res.status == 1) {
                location.href='<?php echo url("login/index"); ?>'
            }else{
                layer.msg(res.msg, {
                    title: '错误提示',
                    icon: 2
                });
            }

        }, 'json')


    });
</script>