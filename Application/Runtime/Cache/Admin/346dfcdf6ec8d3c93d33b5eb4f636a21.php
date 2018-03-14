<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <title>Dashboard</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">


    <!--Basic Styles-->
    <link href="/moban/Application/Admin/Public/style/bootstrap.css" rel="stylesheet">
    <link href="/moban/Application/Admin/Public/style/font-awesome.css" rel="stylesheet">
    <link href="/moban/Application/Admin/Public/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="/moban/Application/Admin/Public/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="/moban/Application/Admin/Public/style/demo.css" rel="stylesheet">
    <link href="/moban/Application/Admin/Public/style/typicons.css" rel="stylesheet">
    <link href="/moban/Application/Admin/Public/style/animate.css" rel="stylesheet">
    <style type="text/css">
        .goods_photo_box {
            width:120px;height: 30px;background:#2DC3E8;text-align:center;line-height:30px;letter-spacing: 5px;
            font-weight: 800;
        }

    </style>
</head>
<body>
<!-- 头部 -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="/moban/Application/Admin/Public/images/logo.png" alt="">
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
                                    <img src="/moban/Application/Admin/Public/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>admin</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="/moban/index.php/Admin/Admin/out">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="/moban/index.php/Admin/Admin/edit/id/<?php echo ($_SESSION['a_id']); ?>">
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
        <li <?php if($ac == 'Admin' or $ac == 'Cate' or $ac == 'Article'): ?>class="open"<?php endif; ?> >
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">控制面版</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li >

                <a href="/moban/index.php/Admin/Admin/index"><span class="menu-text">管理员管理</span>
                    <i class="menu-expand"></i>
                </a>
                </li>
                <li>
                    <a href="/moban/index.php/Admin/Cate/index"><span class="menu-text">栏目  管理</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/moban/index.php/Admin/Article/index"><span class="menu-text">文章  管理</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>

            </ul>
        </li>
        <li <?php if($ac == 'Attrtype' or $ac == 'Attr' or $ac == 'Attrs' or $ac == 'Goods' or $ac == 'Search'): ?>class="open"<?php endif; ?> >
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">商品管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/moban/index.php/Admin/goods/index">
                                    <span class="menu-text">
                                        商品管理                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/moban/index.php/Admin/Search/index">
                                    <span class="menu-text">
                                        商品搜索设置                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/moban/index.php/Admin/Attrtype/index">
                                    <span class="menu-text">
                                        商品种类管理                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/moban/index.php/Admin/Attr/index">
                                    <span class="menu-text">
                                        商品属性管理                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>

            </ul>
        </li>
        <li <?php if($ac == 'User'): ?>class="open"<?php endif; ?> >
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-gear"></i>
            <span class="menu-text">会员管理</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu">
            <li>
                <a href="/moban/index.php/Admin/User/index">
                                    <span class="menu-text">
                                        会员管理                                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
            <li>
                <a href="/moban/index.php/Admin/Search/index">
                                    <span class="menu-text">
                                        会员等级                                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
            <li>
                <a href="/moban/index.php/Admin/Attrtype/index">
                                    <span class="menu-text">
                                        ???                                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
            <li>
                <a href="/moban/index.php/Admin/Attr/index">
                                    <span class="menu-text">
                                        ???                                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>

        </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>

                <span class="menu-text">
                                系统                            </span>

                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/user/index.html">
                                    <span class="menu-text">
                                        用户管理                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/auth_group/index.html">
                                    <span class="menu-text">
                                        角色管理                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/auth_rule/index.html">
                                    <span class="menu-text">
                                        权限列表                                    </span>
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
                        <a href="#">系统</a>
                    </li>
                    <li>
                        <a href="/moban/index.php/Admin/Goods/index">商品管理</a>
                    </li>
                    <li class="active">添加商品</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">

                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-header bordered-bottom bordered-blue">
                                <span class="widget-caption">商品基本信息</span>
                            </div>
                            <div class="widget-body">
                                    <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="username" class="col-sm-2 control-label " style="text-align:right;padding-top:5px">商品标题：</label>
                                            <div class="col-sm-6">
                                                <input class="form-control"  placeholder="" name="goods_name" required="" type="text" value="">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="username" class="col-sm-2 control-label " style="text-align:right;padding-top:5px">属于栏目：</label>
                                            <div class="col-sm-6">
                                                <select name="cate_id" id="cate_id" class="selected">
                                                    <option>选择栏目</option>
                                                    <?php if(is_array($cates)): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v['id']); ?>"><?php echo ($v['cate_name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div id="goods_auth" class="form-group" style="margin-top:10px;"></div>
                                        <div class="form-group">
                                            <label for="username" class="col-sm-2 control-label " style="text-align:right;padding-top:5px">属于种类：</label>
                                            <div class="col-sm-6">
                                                <select name="attrtype_id" id="attrtype_id" class="selected">
                                                    <option>选择种类</option>
                                                    <?php if(is_array($attrtypes)): $i = 0; $__LIST__ = $attrtypes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v['id']); ?>"><?php echo ($v['attrtype_name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                                </select>
                                            </div>
                                        </div>



                                        <div class="form-group" style="margin-top:10px;" >
                                            <label for="username" class="col-sm-2 control-label " style="text-align:right;padding-top:5px">商品浏览量：</label>
                                            <div class="col-sm-1">
                                                <input class="form-control"  placeholder="" name="goods_comment" required="" type="text" value="">

                                            </div>
                                        </div>
                                        <div class="form-group" >
                                            <label for="username" class="col-sm-2 control-label " style="text-align:right;padding-top:5px">商品收藏量：</label>
                                            <div class="col-sm-1">
                                                <input class="form-control"  placeholder="" name="goods_store" required="" type="text" value="">

                                            </div>
                                        </div>
                                        
                                        <div class="form-group" style="margin-top:10px;">
                                            <label for="username" class="col-sm-2 control-label " style="text-align:right;padding-top:5px">商品评论量：</label>
                                            <div class="col-sm-1">
                                                <input class="form-control"  placeholder="" name="goods_recommend" required="" type="text" value="">

                                            </div>
                                        </div>
                                        <div class="form-group " style="margin-top:10px;">
                                            <label for="username" class="col-sm-2 control-label " style="text-align:right;padding-top:5px">商品下载量：</label>
                                            <div class="col-sm-1">
                                                <input class="form-control"  placeholder="" name="download_num" required="" type="text" value="">

                                            </div>
                                        </div>

                                        <div class="form-group" style="margin-top:10px;">
                                            <label for="username" class="col-sm-2 control-label " style="text-align:right;padding-top:5px">商品作者：</label>
                                            <div class="col-sm-4">
                                                <input class="form-control"  placeholder="" name="goods_author" required="" type="text" value="">

                                            </div>
                                        </div>

                                        <div class="form-group" style="margin-top:10px;">
                                            <label for="username" class="col-sm-2 control-label " style="text-align:right;padding-top:5px">商品演示地址：</label>
                                            <div class="col-sm-4">
                                                <input class="form-control"  placeholder="" name="goods_view" required="" type="text" value="">

                                            </div>
                                        </div>
                                        <div style="clear: both"></div>
                                        <div class="form-group" style="margin-top:10px;">
                                            <label for="username" class="col-sm-2 control-label " style="text-align:right;padding-top:5px">商品下载地址：</label>
                                            <div class="col-sm-4">
                                                <input class="form-control"  placeholder="" name="download_url" required="" type="text" value="">

                                            </div>
                                        </div>

                                        <div class="form-group" style="margin-top:10px;">
                                            <label for="username" class="col-sm-2 control-label " style="text-align:right;padding-top:5px">手机演示二维码地址：</label>
                                            <div class="col-sm-4">
                                                <input class="form-control"  placeholder="" name="code_url" required="" type="text" value="">

                                            </div>
                                        </div>

                                        <div class="form-group" style="margin-top:10px;">
                                            <span for="username" class="col-sm-2 control-label " style="text-align:right;padding-top:5px">商品首页图片：</span>
                                            <div class="col-sm-4">
                                                <label for="goods_photo"><img src="/moban/Application/Admin/Public/images/upload.png"></label>
                                                <input type="file" id="goods_photo" multiple style="display:none;" ><i id="app"></i>


                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label for="username" class="col-sm-2 control-label no-padding-right">是否推荐：</label>
                                            <div class="col-xs-4">
                                                <label>
                                                    <input class="checkbox-slider yesno" name="goods_tuijian" value="1" type="checkbox">
                                                    <span class="text"></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group" style="margin-top:10px;">
                                            <label for="username" class="col-sm-2 control-label " style="text-align:right;padding-top:5px">内容详情：</label>
                                            <div class="col-sm-4">
                                                <textarea id='goods_content' name="goods_content"></textarea>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-default">保存信息</button>
                                            </div>
                                        </div>
                                    </form>

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
        <script src="/moban/Application/Admin/Public/style/jquery_002.js"></script>
        <script src="/moban/Application/Admin/Public/style/bootstrap.js"></script>
        <script src="/moban/Application/Admin/Public/style/jquery.js"></script>
        <!--Beyond Scripts-->
        <script src="/moban/Application/Admin/Public/style/beyond.js"></script>
        <script src="/moban/Application/Extends/editor/ueditor.config.js"></script>
        <script src="/moban/Application/Extends/editor/ueditor.all.min.js"></script>
        <script>
            var et=UE.getEditor('goods_content',{
                initialFrameWidth:850,
                initialFrameHeight:320
            });
            //模板选择栏目时，select下出现不同的选择
            $('#cate_id').change(function(){
                var cate_id=$(this).val();
                var html='';
                var html2='';
                var div=$('#goods_auth');
                div.html('');
                if(cate_id==3){
                    html='<label for="goods_price" class="col-sm-2 control-label " style="text-align:right;padding-top:5px;color:#C55407">商业模板价格：</label> <div class="col-sm-1"> <input class="form-control" name="goods_price" required="" type="text" value=""> </div><p class="help-block col-sm-4 red">*商业模板必要填价格</p>';
                    div.html(html);
                }else{
                    $.ajax({
                        type:'post',
                        url:'/moban/index.php/Admin/Goods/getVip',
                        data:cate_id,
                        success:function(data){
                            var a=eval(data);
                            html='<label for="username" class="col-sm-2 control-label " style="text-align:right;padding-top:5px; color:#C55407">下载权限：</label>';
                            $(a).each(function(k,v){
                                html+=' <div class="col-lg-1 col-sm-1 col-xs-1"> <div class="checkbox"> <label> <input type="checkbox" class="colored-blue" name="goods_vips[]" value="'+v.id+'" > <span class="text" style="color:#036F9E">'+v.vip_name+'</span> </label> </div> </div>';
                            });

                            div.html(html);

                        }
                    });


                }
            });


        //上传图片与CONTROLLER交换数据
            $('#goods_photo').change(function(){
                var img=$("#goods_photo")[0].files[0];
                var size = img.size;
                var value1 =$("#goods_photo")[0].value;
                var types='gif,jpeg,jpg,png,bmp';
                var prech=/.(gif|jpg|jpeg|png|GIF|JPG|bmp)$/;
                var big=2*1024;
                var html='';
                var src=$('#goods_photo_link').attr('alt');
                var i=$('#app');
                if(!prech.test(value1)){
                    alert('错误！请上传指定文件类型');
                }
                if(!size>big){
                    alert('错误！上传文本大于2M');
                }
                var data=new FormData();
                data.append('upload_file', img);
                $.ajax({
                    type:'post',
                    url:'/moban/index.php/Admin/Goods/uploadImg',
                    data:data,
                    contentType: false,
                    processData: false,
                    success:function(data){
                        if(src){
                            delPhoto(src);
                            i.html('');
                        }
                        html='<img alt="'+data+'" id="goods_photo_link" src="/moban'+data+'"/>';
                        html+='<input id="hid_photo" type=hidden name="goods_photo" value="'+data+'" />';
                        i.html(html);
                        $('#goods_photo').val('');

                    }
                });
            });
            //上传图片，把不要的图片从后台删除
            function delPhoto(src){
                $.ajax({
                    type:'post',
                    url:'/moban/index.php/Admin/Goods/delPhoto',
                    data:{
                        src:src,
                    },
                    success:function(data){
                        if(data==1){
                            $('#goods_photo').val('');
                        }else{
                            alert('原图片删除失败');
                        }
                   }
                });
            }







        </script>


</body>

</html>