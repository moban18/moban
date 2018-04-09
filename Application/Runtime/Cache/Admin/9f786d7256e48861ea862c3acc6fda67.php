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
        .ok:after {
            content: '<br>';
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
                        <a href="/moban/index.php/Admin/Search/index">商品搜索管理</a>
                    </li>
                                        <li class="active">添加商品搜索</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">编辑商品搜索</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="" method="post">

                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">选择商品：</label>
                            <div class="col-sm-4">
                                <select id="goods_id" name="goods_id">
                                    <option value=0>选择商品</option>
                                    <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>" <?php if(I('id') == $v['id']): ?>selected="selected"<?php endif; ?> ><?php echo ($v["id"]); ?>.<?php echo ($v["goods_name"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v["goods_search"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>

                            </div>
                            <p class="help-block col-sm-4 red">*请先选择要添加搜索规则商品</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">属于栏目：</label>
                            <div class="col-sm-6">
                                <select id="cate_id" name="cate_id" disabled>
                                    <option value=0>请选择栏目</option>
                                    <?php if(is_array($cates)): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["cate_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">属于种类：</label>
                            <div class="col-sm-6">
                                <select id="attrtype_id" name="attrtype_id" disabled>
                                    <option value=0>请选择种类</option>
                                    <?php if(is_array($attrtypes)): $i = 0; $__LIST__ = $attrtypes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["attrtype_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>

                            </div>
                        </div>
                        <div id="attr_box">
                            <?php if(!empty($parent)): foreach($parent as $v): ?>
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label " style="text-align:right;padding-top:5px; color:#C55407"><?php echo $v['attr_name'];?>：</label>
                                    <?php $attr_value=explode(',',$v['attr_value']);?>
                                    <?php if($v['is_attr']==0):?>
                                    <?php foreach($attr_value as $v1):?>
                                    <div class="col-lg-1 col-sm-1 col-xs-1" style="padding:0 5px;width: 80px;">
                                        <div class="checkbox" style="width: 80px;">
                                            <label>
                                                <input type="checkbox" class="colored-blue" name="goods_vips[]" value="<?php echo $v['id'].'|'.$v1;?>" >
                                                <span class="text" style="color:#036F9E"><?php echo $v1;?></span>
                                            </label>
                                        </div>
                                    </div>
                                    <?php endforeach;?>
                                    <?php else:?>
                                        <div id="box" style="width:70%;margin: 0 auto">
                                            <?php foreach($childs as $v2): $attrs_value=explode(',',$v2['attr_value']); ?>
                                                     <div style="clear:both;border-bottom:1px dashed #999;"></div>
                                                          <label class="col-sm-1 control-label " style="text-align:right;width:80px;;color:#FF0000"><?php echo $v2['attr_name'];?>：</label>
                                                          <?php foreach($attrs_value as $v3): ?>
                                                         <div class="col-lg-1 col-sm-1 col-xs-1" style="padding:0 5px;">
                                                             <div class="checkbox">
                                                                 <label>
                                                                     <input type="checkbox" class="colored-blue" name="goods_vips[]" value="<?php echo $v2['id'].'|'.$v3;?>" >
                                                                     <span class="text" style="color:#006AFF;min-width:49px; white-space:nowrap;"><?php echo $v3;?></span>
                                                                 </label>
                                                             </div>
                                                         </div>

                                            <?php endforeach; endforeach;?>

                                        </div>
                                    <?php  endif;?>


                                </div>

                            <?php endforeach; endif; ?>

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
    <script>
        //选择不同的产品，出现不同的栏目;
        $('#goods_id').change(function(){
            var goods_id=$(this).val();
            $.ajax({
                type:'post',
                url:'/moban/index.php/Admin/Search/getCates',
                data:{
                    goods_id:goods_id
                },
                dataType:'json',
                success:function(data){
                    $('#cate_id').val(data.id);
                    if(data.attrtype_id==null){
                        $('#attrtype_id').val(0);
                    }else{
                        $('#attrtype_id').val(data.attrtype_id);
                        getAttrs(data.attrtype_id);
                    }

                }
            });
        });

        //选择不同种类，展现不同的属性；
        function getAttrs(attrtype_id){
            var div=$('#attr_box');
            var before='<div id="before"></div>';
            var after='<div id="after"></div>';
            var box=before+after;
            var html='';
            var html2='';
            div.html('');
            div.html(box);
                $.ajax({
                    type:'post',
                    url:'/moban/index.php/Admin/Search/getAttrs',
                    data:{
                        attrtype_id:attrtype_id
                    },
                    dataType:'json',
                    success:function(data){
                        $.each(data,function(k,v){
                            if(v.is_attr==1){
                                html=' <div class="form-group"> <label for="username" class="col-sm-2 control-label " style="text-align:right;padding-top:5px; color:#C55407">'+v.attr_name+'：</label><div id="box" style="width:70%;margin: 0 auto">';
                                if(v.childs) {
                                    $.each(v.childs, function (k1, v1) {
                                        if(v1.attr_value){
                                            var values=v1.attr_value.split(',');
                                            html+='<div style="clear:both;border-bottom:1px dashed #999;"></div> <label class="col-sm-1 control-label " style="text-align:right;width:80px;;color:#FF0000">'+v1.attr_name+'：</label>';
                                            for (var k=0;k<values.length;k++) {

                                                html+='<div class="col-lg-1 col-sm-1 col-xs-1" style="padding:0 5px;"> <div class="checkbox"> <label> <input type="checkbox" class="colored-blue" name="search_value[]" value="'+v1.id+'|'+values[k]+'" > <span class="text" style="color:#006AFF;min-width:49px; white-space:nowrap;">'+values[k]+'</span> ';
                                                html+='</label> </div> </div>';
                                            }
                                        }
                                    });
                                }
                                html+='</div></div>';

                                $('#before').html(html);

                            }
                            if(v.attr_value && v.is_attr==0){
                                html=' <div class="form-group"> <label for="username" class="col-sm-2 control-label " style="text-align:right;padding-top:5px; color:#C55407">'+v.attr_name+'：</label>';
                                var values=v.attr_value.split(',');
                                for (var i=0;i<values.length;i++) {
                                    html+='<div class="col-lg-1 col-sm-1 col-xs-1" style="padding:0 5px;width: 80px;"> <div class="checkbox" style="width: 80px;"> <label> <input type="checkbox" class="colored-blue" name="search_value[]" value="'+v.id+'|'+values[i]+'" > <span class="text" style="color:#036F9E">'+values[i]+'</span> </label></div></div>';
                                }
                                html+='</div>';
                                html2+=html;
                                $('#after').html(html2);
                                }

                        });

                    }
                });
        }






    </script>


</body></html>