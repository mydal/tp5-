<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"F:\xampp\htdocs\shop\public/../application/admin\view\category\index.html";i:1584599673;}*/ ?>
<!-- <!DOCTYPE html> -->
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>商品分类</title>
    <link href="/static/admin/assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/static/admin/css/style.css"/>
    <link href="/static/admin/assets/css/codemirror.css" rel="stylesheet">
    <link rel="stylesheet" href="/static/admin/assets/css/ace.min.css"/>
    <link rel="stylesheet" href="/static/admin/font/css/font-awesome.min.css"/>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/static/admin/assets/css/ace-ie.min.css"/>
    <![endif]-->
    <script src="/static/admin/js/jquery-1.9.1.min.js"></script>
    <script src="/static/admin/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/static/admin/Widget/Validform/5.3.2/Validform.min.js"></script>
    <script src="/static/admin/assets/js/typeahead-bs2.min.js"></script>
    <script src="/static/admin/assets/js/jquery.dataTables.min.js"></script>
    <script src="/static/admin/assets/js/jquery.dataTables.bootstrap.js"></script>
    <script src="/static/admin/js/lrtk.js" type="text/javascript"></script>
    <script src="/static/admin/assets/layer/layer.js" type="text/javascript"></script>
    <script src="/static/admin/assets/laydate/laydate.js" type="text/javascript"></script>
</head>

<body>

<div class="crumbs">

    <ul>
        <li>
            <a class="active" href="javascript:;">商品分类列表</a>
        </li>
    </ul>
</div>
<div class="page-content clearfix">
    <div class="administrator">
        <div class="d_Confirm_Order_style">
            <div class="border clearfix">
                <span class="l_f">
                    <a href="<?php echo url('category/add'); ?>" class="btn btn-warning"><i
                            class="fa fa-plus"></i> 添加商品分类</a>
                    <a href="javascript:;" class="btn btn-danger" onclick="delAll()"><i
                            class="fa fa-trash"></i> 批量删除</a>
                </span>
            </div>
            <!--管理员列表-->
            <div class="clearfix">
                <div class="table_menu_list">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th width="25px">
                                <label>
                                    <input type="checkbox" class="ace" id="all">
                                    <span class="lbl"></span>
                                </label>
                            </th>
                            <th width="80px">编号</th>
                            <th width="180px">商品分类名称</th>
                            <th width="80px">父id</th>
                            <th width="70px">排序</th>
                            <th width="70px">状态</th>
                            <th width="100px">添加时间</th>
                            <th width="100px">更新时间</th>
                            <th width="200px">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <form class="piliangshanchan">
                            <?php foreach($model as $value): ?>
                            <tr>
                                <td>
                                    <label>
                                        <input type="checkbox" class="cheidbox" name="id[]" id="checkbox"
                                               value="<?php echo $value['id']; ?>">
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td><?php echo $value['id']; ?></td>
                                <td>
                                    <?php if($value['level'] != 0): ?>
                                    @
                                    <?php endif; ?>
                                    <?php echo str_repeat('----',$value['level'])?>
                                    <?php echo $value['title']; ?>

                                </td>
                                <td><?php echo $value['pid']; ?></td>
                                <td><?php echo $value['sort']; ?></td>
                                <td>
                                <span class="label label-success radius">
                                    <?php if($value['status'] == 1): ?>
                                    已启用
                                    <?php else: ?>
                                    已禁用
                                    <?php endif; ?>
                                </span>

                                </td>
                                <td class="text-center"><?php echo $value['create_time']; ?></td>
                                <td class="text-center"><?php echo $value['update_time']; ?></td>
                                <td>
                                    <a title="编辑" href="<?php echo url('edite',['id'=>$value['id']]); ?>"
                                       class="btn btn-xs btn-info">
                                        <i class="fa fa-edit bigger-120"></i>
                                    </a>
                                    <a title="删除" data-id="<?php echo $value['id']; ?>" href="javascript:;"
                                       class="btn del btn-xs btn-warning">
                                        <i class="fa fa-trash  bigger-120"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </form>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="dataTables_info"></div>
                </div>
                <div class="col-sm-6">
                    <div class="dataTables_paginate paging_bootstrap">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

    // 全选
    $('#all').change(function () {
        if ($(this).is(':checked')) {
            $(':checkbox').prop("checked", true);
        } else {
            $(':checkbox').prop("checked", false);
        }
    });

    //反选
    $(".cheidbox").change(function () {
        var len = $(".cheidbox").length;  //获取所有小复选框的个数

        var len2 = $("input.cheidbox:checked").length;  //获取选中的小复选框个数
        if (len == len2) {
            $('#all').prop("checked", true);
        } else {
            $('#all').prop("checked", false);
        }

    });

    //批量删除提交
    function delAll() {
        layer.confirm('确认要删除吗？', function (index) {
            if ($('.cheidbox').is(':checked')) {
                $.ajax({
                    url: "<?php echo url('Category/delAll'); ?>",
                    data: $('.piliangshanchan').serialize(),
                    dataType: "json",
                    type: 'post',
                    async: false,
                    success: function (res) {
                        // console.log(res);
                        if (res.status == 1) {
                            layer.alert(res.msg + "，共删除" + res.num + "数据", {icon: 6}, function () {
                                window.location.reload();  //页面刷新
                                // layer.close(index) - 关闭特定层
                                // 获得iframe索引
                                var index = parent.layer.getFrameIndex(window.name);
                                //关闭当前frame
                                parent.layer.close(index);

                            });
                        } else {
                            layer.alert(res.msg, {icon: 1}, function () {
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

    //    点击删除当前行
    $('.del').on('click', function () {
        var id = $(this).data('id');  //获取自定义属性id
        var that = $(this);  //改变this指向

        layer.confirm('你真的要删除吗?', {icon: 3}, function () {
            $.ajax({
                url: "<?php echo url('Category/del'); ?>",
                type: 'post',
                data: {
                    'id': id
                },
                dataType: 'json',
                success: function (res) {
                    if (res.status == 1) {
                        that.parent().parent().remove();
                        layer.alert(res.msg, {
                            title: '信息提示',
                            icon: 1

                        })
                    } else {
                        layer.alert(res.msg, {
                            title: '信息提示',
                            icon: 2
                        })
                    }

                }
            })

        })

    });
</script>
</body>
</html>