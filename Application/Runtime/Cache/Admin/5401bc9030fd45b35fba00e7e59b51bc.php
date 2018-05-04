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
    <link href="/moban/Application/Extends/uploadify/uploadify.css" rel="stylesheet">
    <style>
        #addPhotos img {margin-bottom:5px;}
        .img_photo_box{ position:relative;}
        .img_phpoto{display:block;border:1px solid #eee;}
        .close_icon{width:25px;height:25px;background:url('/moban/Application/Admin/Public/images/close.png');display:block;position:absolute;cursor:pointer; display:none;}
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
        <li <?php if($ac == 'Admin' or $ac == 'Cate' or $ac == 'Article' or $ac == 'Lun'): ?>class="open"<?php endif; ?> >
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
                <li>
                    <a href="/moban/index.php/Admin/Lun/index"><span class="menu-text">轮播  管理</span>
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
                        <a href="/moban/index.php/Admin/Lun/index">轮播管理</a>
                    </li>
                                        <li class="active">添加轮播</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">

  <div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增轮播</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">轮播名称：</label>
                            <div class="col-sm-4">
                                <input class="form-control"  name="lun_name" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填,不超过25个字符</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">轮播简介：</label>
                            <div class="col-sm-4">
                                <textarea name="lun_notise" style="width:340px;"></textarea>
                            </div>

                        </div>
                        <div class="form-group" style="clear:both;">
                            <label for="username" class="col-sm-2 control-label no-padding-right">轮播图片：</label>
                            <div class="col-sm-4">
                                <input id="lun_photos"  name="lun_photos" type="file" style="float:left;border:0">
                        </div>
                            <p class="help-block col-sm-4 red">* 多张图片，直接选择多张，最佳显示像素为782*250</p>
                            <div id="addPhotos" style="clear:both;margin-left:18%;">

                            </div>
                       </div>
                        <div id="goods_links_box">
                            <div class="form-group clearfix goods_links"  >
                                <label for="username" class="col-sm-2 control-label no-padding-right">商品链接：</label>
                                <div id="add_links" style="background:url('/moban/Application/Admin/Public/images/jiahao.png');width:35px;height:35px;float:left;" onclick="addGoodsLinks(this);"></div>
                                <div class="col-xs-4" style="float: left">
                                    <label>
                                        <select name="goods_links[]">
                                            <option value="">请选择商品</option>
                                            <?php foreach($goodss as $v):?>
                                            <option value="<?php echo ($v['id']); ?>"><?php echo ($v['id']); ?>、<?php echo ($v['goods_name']); ?></option>
                                            <?php endforeach;?>
                                        </select>
                                        <span class="text"></span>
                                    </label>
                                </div>
                                <div id="del_links" style="background:url('/moban/Application/Admin/Public/images/jianhao.png');width:35px;height:35px;float:left;margin-left:70px;" onclick="delGoodsLinks(this);"></div>
                            </div>
                        </div>



                        <div class="form-group" style="clear:both;">
                            <label for="username" class="col-sm-2 control-label no-padding-right">是否显示：</label>
                            <div class="col-xs-4">
                                <label>
                                    <input class="checkbox-slider yesno" name="lun_lock" value="1" type="checkbox">
                                    <span class="text"></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button id="lun_submit" type="submit" class="btn btn-default">保存信息</button>
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
    <script src="/moban/Application/Admin/Public/style/jquery_002.js"></script>
    <script src="/moban/Application/Admin/Public/style/bootstrap.js"></script>
    <script src="/moban/Application/Admin/Public/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="/moban/Application/Admin/Public/style/beyond.js"></script>
    <script src="/moban/Application/Extends/uploadify/jquery.uploadify.min.js"></script>
    <script>
            var html='';
            var html1='';
            var div=$('#addPhotos');
            var img=div.find('img');
            $("#lun_photos").uploadify({
                uploader:'/moban/index.php/Admin/Lun/uploadify',           // 服务器端处理地址
                swf:'/moban/Application/Extends/uploadify/uploadify.swf',    // 上传使用的 Flash
                buttonText:"图片上传",
                dataType: 'json',
                onUploadSuccess:function(file, data, response){
                    html='<div class="img_photo_box">';
                    html+='<img class="img_phpoto"  src="/moban'+data+'" alt="'+data+'"/>';
                    html+='<i class="close_icon"></i></div>';
                    var divHtml=div.html();
                    if(divHtml!=''){
                        html=divHtml+html;
                        div.html(html);
                    }else{
                        div.html(html);
                    }
                    html1='<input name="lun_photos[]" class="lun_photos" type="hidden" value="'+data+'">';
                    div.after(html1);
                }
            });


            $('#addPhotos').bind('mouseover',function(event){
                event.stopPropagation();
                $('.img_photo_box').bind('mouseover',function(event){
                    event.stopPropagation();
                    $(this).find('img').css({'filter':'alpha(Opacity=50)','opacity': '0.5'});
                    var w= $(this).find('img').width();
                    $(this).find('.close_icon').css({'left':w-25,'top':'0px'});
                    $(this).find('.close_icon').show();
                    $(this).find('.close_icon').mouseover(function(){
                        $(this).find('.close_icon').show();
                        $(this).find('img').css({'filter':'alpha(Opacity=50)','opacity': '0.5'});
                    });
                    $(this).mouseout(function(){
                        $(this).find('img').css({'filter':'alpha(Opacity=100)','opacity': '1'});
                        $(this).find('.close_icon').hide();
                    });
                });
            });

            $('#addPhotos').bind('mouseover',function(event){
                event.stopPropagation();
                $(this).find('.close_icon').click(function(event){
                    event.stopPropagation();
                    var _this=$(this);
                    event.stopPropagation();
                    var path= _this.parent('.img_photo_box').find('img').attr('alt');
                    event.stopPropagation();
                    $.ajax({
                        type:'post',
                        url:'/moban/index.php/Admin/Lun/delLocatePhotos',
                        data:{
                            path:path
                        },
                        success:function(data){
                            if(data==1){
                                _this.parent('.img_photo_box').remove();
                                delInput(path);
                            }
                        }

                    });
                });

            });

            $('#lun_submit').click(function(){
                delInput();
            });

        function delInput(value){
          var values= $('.lun_photos');
            for(var i=0;i<values.length;i++){
               /* alert(values[i].value);*/
                if(values[i].value==value){
                    values[i].remove();
                }
            }
        }
        //添加轮播图片的对应产品 链接
        function addGoodsLinks(o){
            var div=$(o).parent();
            $('#goods_links_box').append(div.clone());
        }
        //删除轮播图片的对应的产品链接
        function delGoodsLinks(o){
            var div = $(o).parent();
            div.remove();
        }



    </script>



</body></html>