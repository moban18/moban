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
        <li <?php if($ac == 'Admin' or $ac == 'Cate'): ?>class="open"<?php endif; ?> >
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
                    <a href="/moban/index.php/Admin/Cate/index"><span class="menu-text">栏目 管理</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/auth_rule/index.html"><span class="menu-text">权限列表</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>

            </ul>
        </li>
        <li <?php if($ac == 'Attrtype' or $ac == 'Attr' or $ac == 'Attrs'): ?>class="open"<?php endif; ?> >
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">商品管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
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
                        <a href="/moban/index.php/Admin/Attr/index">属性管理</a>
                    </li>
                                        <li class="active">添加属性</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增属性</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="" method="post">
                        <input type="hidden" name="id" value="<?php echo ($attrs["id"]); ?>"/>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">属于种类：</label>
                            <div class="col-sm-6">
                                <select name="attrtype_id">
                                    <option value=0>选择种类</option>
                                    <?php if(is_array($attrtypes)): $i = 0; $__LIST__ = $attrtypes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option <?php if($v['id'] == $attrs['attrtype_id']): ?>selected="selected"<?php endif; ?>  value="<?php echo ($v["id"]); ?>"><?php echo ($v["attrtype_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>

                            </div>
                            <p class="help-block col-sm-4 red"></p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">属性名称：</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="attr_name" required="" type="text" value="<?php echo ($attrs["attr_name"]); ?>" for-data="<?php echo ($attrs["id"]); ?>">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">属性值：</label>
                            <div class="col-sm-6">
                                <textarea id="value_textarea" name="attr_value" style="width:800px;text-align: left;" for-data="<?php echo ($attrs["id"]); ?>" is_attr="<?php echo ($attrs["is_attr"]); ?>"><?php echo ($attrs["attr_value"]); ?></textarea>

                            </div>
                            <p class="help-block col-sm-4 red">多个值，英文状态下的逗号（','）隔开</p>
                        </div>
                        <?php if(isset($attres)):?>
                        <?php foreach($attres as $v):?>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right" style="color:#2DC3E8"><?php echo $v['attr_name']; ?>：</label>
                            <div class="col-sm-6" style="text-align: left;">
                                <input type="text" class="form-control" name="attr_value1" for-data="<?php echo $v['id']; ?>" value="<?php echo $v['attr_value'];?>" for-data="<?php echo $v['id'];?>"/>
                            </div>
                            <p class="help-block col-sm-4 red"></p>
                        </div>



                        <?php endforeach;endif;?>



                         
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
       $(document).ready(function(){
           var attr_name=$('input[name=attr_name]').val();
           var attr_value=$('#value_textarea').val();


           $('input[name=attr_name]').blur(function(){
              var new_attr_name= $(this).val();
               var id=$(this).attr('for-data');
               if(new_attr_name!=attr_name){
                   $.ajax({
                       type:'post',
                       url:'/moban/index.php/Admin/Attr/attrName',
                       data:{
                           id:id,
                           attr_name:new_attr_name,
                       },
                       success:function(data){
                          if(data==1){
                              window.location.reload();
                          }else{
                              alert('修改失败');
                          }
                       }
                   });
               }
           });

           $('#value_textarea').blur(function(){
               var new_attr_value=$(this).val();
               var id=$(this).attr('for-data');
               var is_attr=$(this).attr('is_attr');

               if(new_attr_value!=attr_value){
                   $.ajax({
                       type:'post',
                       url:'/moban/index.php/Admin/Attr/attrValue',
                       data:{
                           id:id,
                           attr_value:attr_value,
                           new_attr_value:new_attr_value,
                           is_attr:is_attr,
                       },
                       success:function(data){
                           if(data==1){
                                window.location.reload();
                           }else{
                               alert('修改失败');
                           }
                       }
                   });
               }
           });

           $('input[name=attr_value1]').each(function(k,v){
              $(v).bind('blur',function(){
                  var attr_id=$(this).attr('for-data');
                  var attr_value=$(this).val();
                  $.ajax({
                      type:'post',
                      url:'/moban/index.php/Admin/Attr/changeAttrter',
                      data:{
                          attr_id:attr_id,
                          attr_value:attr_value,
                      },
                      success:function(data){
                          if(data==1){
                              window.location.reload();
                          }else{
                              alert('修改失败');
                          }
                      }
                  });
              });
           });


       });


    </script>


</body></html>