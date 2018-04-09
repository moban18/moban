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
        /*后台分页CSS*/
        .page {  text-align: right;  margin:20px 50px 0 0; }
        .prev,.next,.num{display: inline-block;height: 25px; border:1px solid #2DC3E8;padding: 3px 9px;}
        .current { display:inline-block;border:1px solid #2DC3E8;padding: 2px 9px; margin:0 3px; background:#0092FF;color:#fff; }


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
                    <li class="active">属性管理</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">
                <div class="select_box">
                    <div class="attrtype_s" style="float:left;">
                        <span>种类属性查询：</span>
                        <select class="select" name="attrtype_id">
                            <option value="0">选择种类</option>
                            <?php if(is_array($attrtypes)): $i = 0; $__LIST__ = $attrtypes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v['id']); ?>"><?php echo ($v['attrtype_name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                    <div class="attrtype_attr" style="float:left;margin-left:20px;">

                    </div>
                </div>
                <div style="clear: both;"></div>
                <button type="button" tooltip="添加属性" class="btn btn-sm btn-azure btn-addon"  onClick="javascript:window.location.href = '/moban/index.php/Admin/Attr/add'"> <i class="fa fa-plus"></i> Add
                </button>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-body">
                                <div class="flip-scroll">
                                    <table class="table table-bordered table-hover">
                                        <thead class="">
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">属性名称</th>
                                            <th class="text-center">属性值</th>
                                            <th class="text-center">属性种类</th>
                                            <th class="text-center">操作</th>
                                        </tr>
                                        </thead>
                                        <tbody id="attrList">

                                        <?php if(is_array($attrs)): $i = 0; $__LIST__ = $attrs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                                            <td align="center" id="cate_id"><?php echo ($v["id"]); ?></td>
                                            <td align="center"><?php echo ($v["attr_name"]); ?></td>
                                            <td align="center"><?php echo ($v["attr_value"]); ?></td>
                                            <td align="center"><?php echo ($v["attrtype_name"]); ?></td>
                                            <td align="center">
                                                <a href="/moban/index.php/Admin/Attr/edit/id/<?php echo ($v["id"]); ?>" class="btn btn-primary btn-sm shiny">
                                                    <i class="fa fa-edit"></i> 编辑
                                                </a>
                                                <a href="/moban/index.php/Admin/Attr/del/id/<?php echo ($v["id"]); ?>" onClick="if(confirm('确定要删除吗')==false)return false;" class="btn btn-danger btn-sm shiny">
                                                    <i class="fa fa-trash-o"></i> 删除
                                                </a>
                                            </td>
                                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page">
                        <?php echo ($page); ?>
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
    style:{

    };
    function cateSort(o){
        var td=$(o).parent();
        var tr=td.parent();
        var sort=td.find('input[name=cate_sort]').val();
        var cate_id=tr.find('td').eq(0).text();
        $.ajax({
            type:'post',
            url:'/moban/index.php/Admin/Attr/getSort',
            data:{
                sort:sort,
                id:cate_id,
            },
            success:function(data){
                if(data==1){
                }else{
                    alert('修改失败');
                }
            }
        });
    }

$('select[name=attrtype_id]').change(function(){
    var attrtype_id=$(this).val();
    var div=$('.attrtype_attr');
    var tbody=$('#attrList');
    var html='';
    var html2='';
    var html3='';
    div.html('');
    $.ajax({
        type:'post',
        url:'/moban/index.php/Admin/Attr/attrp',
        data:{
            attrtype_id:attrtype_id,
        },
        success:function(data){
            var a=eval(data);
            html='<span>属性子类查询：</span>';
            html+='<select name="parent_id" class="select" onchange="getAttrs(this)">';
            html+='<option value="0">选择子类</option>';
            $(a).each(function(k,v){
                html+=' <option value="'+v.id+'">'+v.attr_name+'</option>';

                html2='<tr> <td align="center" id="cate_id">'+v.id+'</td>';
                html2+='<td align="center">'+v.attr_name+'</td>';
                html2+='<td align="center">'+v.attr_value+'</td>';
                html2+='<td align="center">'+v.attrtype_name+'</td>';
                html2+='<td align="center"> <a href="/moban/index.php/Admin/Attr/edit/id/<?php echo ($v["id"]); ?>" class="btn btn-primary btn-sm shiny"> <i class="fa fa-edit"></i> 编辑 </a> <a href="/moban/index.php/Admin/Attr/del/id/<?php echo ($v["id"]); ?>" onClick="if(confirm("确定要删除吗")==false)return false;" class="btn btn-danger btn-sm shiny"> <i class="fa fa-trash-o"></i> 删除 </a> </td> </tr>';
                html3+=html2;
            });
            html+='</select>'
            div.html(html);
            tbody.html(html3);

        }
    });


});

    function getAttrs(o){
        var id=$(o).val();
        var tbody=$('#attrList');
        var html='';
        var html1='';
        $.ajax({
            type:'post',
            url:'/moban/index.php/Admin/Attr/getAttres',
            data:{
                id:id
            },
            success:function(data){
                var a=eval(data);
                $(a).each(function(k,v){
                    html='<tr> <td align="center" id="cate_id">'+v.id+'</td>';
                    html+='<td align="center">'+v.attr_name+'</td>';
                    html+='<td align="center">'+v.attr_value+'</td>';
                    html+='<td align="center"></td>';
                    html+='<td align="center"> <a href="/moban/index.php/Admin/Attr/edit/id/<?php echo ($v["id"]); ?>" class="btn btn-primary btn-sm shiny"> <i class="fa fa-edit"></i> 编辑 </a> <a href="/moban/index.php/Admin/Attr/del/id/<?php echo ($v["id"]); ?>" onClick="if(confirm("确定要删除吗")==false)return false;" class="btn btn-danger btn-sm shiny"> <i class="fa fa-trash-o"></i> 删除 </a> </td> </tr>';
                    html1+=html;
                });
                tbody.html(html1);
            }
        });

    }




</script>


</body></html>