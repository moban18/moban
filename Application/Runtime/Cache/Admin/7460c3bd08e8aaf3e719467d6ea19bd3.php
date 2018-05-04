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
        /*后台商品搜索CSS*/
        .float_left{float:left;}
        .goods_search{float:left;margin-left:10px;}
        .goods_search_input{width:250px;height:25px;padding:2px 1px 2px 10px;}
        .goods_search_submit{background-color:#2BBBDF;color:#fff}
        .goods_search2{margin-left:40px;}
        .goods_search_select{height:28px;font-size:11px;}
        .search_btn_box{margin-left:15px;}

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
                    <li class="active">商品管理</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">
                <div class="goods_search_box clearfix">
                    <form method="post" action="/moban/index.php/Admin/Goods/searchOthers">
                    <button type="button" tooltip="添加商品" class="btn btn-sm btn-azure btn-addon float_left" onClick="javascript:window.location.href = '/moban/index.php/Admin/Goods/add'"> <i class="fa fa-plus"></i> Add
                    </button>
                    <div class="goods_search">
                        <span style="color:#2BBBDF">查询商品标题：</span>
                            <input type="text" class="goods_search_input" name="goods_name"/>
                    </div>
                    <div class="goods_search2 float_left">
                        <span style="color:#2BBBDF">栏目商品搜索：</span>
                        <select class="goods_search_select" name="cate_id">
                            <option value="0">请选栏目</option>
                            <?php foreach($cates as $v):?>
                            <option value="<?php echo ($v['id']); ?>"><?php echo ($v['cate_name']); ?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="goods_search2 float_left clearfix">
                        <label>
                            <input type="checkbox" class="colored-blue" name="goods_search" value="1">
                            <span class="text" style="color:#2DC3E8">搜索设置0</span>
                        </label>
                    </div>
                    <div class="goods_search2 float_left clearfix">
                        <label>
                            <input type="checkbox" class="colored-blue" name="goods_tuijian" value="1">
                            <span class="text" style="color:#2DC3E8">推荐商品</span>
                        </label>
                    </div>
                    <div class="search_btn_box float_left clearfix">
                        <input class="goods_search_submit btn btn-sm" type="submit" value="查询"/>
                    </div>
                    </form>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-body">
                                <div class="flip-scroll">
                                    <table class="table table-bordered table-hover">
                                        <thead class="">
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">商品名称</th>
                                            <th class="text-center">商品图片</th>
                                            <th class="text-center">所属栏目</th>
                                            <th class="text-center">下载权限</th>
                                            <th class="text-center">下载金币</th>
                                            <th class="text-center">浏览量</th>
                                            <th class="text-center">收藏量</th>
                                            <th class="text-center">评论量</th>
                                            <th class="text-center">下载量</th>
                                            <th class="text-center">搜索设置</th>
                                            <th class="text-center">是否推荐</th>

                                            <th class="text-center">操作</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php if(is_array($goodss)): $i = 0; $__LIST__ = $goodss;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                                            <td align="center" id="cate_id"><?php echo ($v['id']); ?></td>
                                            <td align="center"><?php echo ($v['goods_name']); ?></td>
                                            <td align="center">
                                                <img style="width:25px;height:25px" src="/moban/<?php echo ($v['goods_photo']); ?>"/>

                                            </td>
                                            <td align="center"><?php echo ($v['cate_name']); ?></td>
                                            <td align="center">
                                                <?php if($v['goods_vips'] == ''): echo ($v['goods_price']); ?>
                                                    <?php else: ?>
                                                    <?php echo ($v['goods_vips']); endif; ?>
                                            </td>
                                            <td align="center"><?php echo ($v['goods_price']); ?></td>
                                            <td align="center"><?php echo ($v['goods_comment']); ?></td>
                                            <td align="center"><?php echo ($v['goods_store']); ?></td>
                                            <td align="center"><?php echo ($v['goods_recommend']); ?></td>
                                            <td align="center"><?php echo ($v['download_num']); ?></td>
                                            <td align="center"><?php echo ($v['goods_search']); ?></td>
                                            <td align="center"  >
                                                <?php if($v['goods_tuijian'] == 1): ?><span style="color:red">推荐</span>
                                                    <?php else: ?>
                                                    否<?php endif; ?>

                                            </td>

                                            <td align="center">
                                                <a href="/moban/index.php/Admin/Goods/edit/id/<?php echo ($v["id"]); ?>" class="btn btn-primary btn-sm shiny">
                                                    <i class="fa fa-edit"></i> 编辑
                                                </a>
                                                <a href="/moban/index.php/Admin/Goods/del/id/<?php echo ($v["id"]); ?>" onClick="if(confirm('确定要删除吗')==false)return false;" class="btn btn-danger btn-sm shiny">
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
    function cateSort(o){
        var td=$(o).parent();
        var tr=td.parent();
        var sort=td.find('input[name=cate_sort]').val();
        var cate_id=tr.find('td').eq(0).text();
        $.ajax({
            type:'post',
            url:'/moban/index.php/Admin/Goods/getSort',
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



</script>


</body></html>