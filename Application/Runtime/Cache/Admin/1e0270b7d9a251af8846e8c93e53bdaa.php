<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>后台管理系统</title>
    <meta name="author" content="DeathGhost" />
    <link rel="stylesheet" type="text/css" href="<?php echo ADMIN_CSS; ?>/style.css">
    <!--[if lt IE 9]>
    <script src="<?php echo ADMIN_JS; ?>/html5.js"></script>
    <![endif]-->
    <script src="<?php echo ADMIN_JS; ?>/jquery.js"></script>
    <script src="<?php echo ADMIN_JS; ?>/jquery.mCustomScrollbar.concat.min.js"></script>
    <script>

        (function($){
            $(window).load(function(){

                $("a[rel='load-content']").click(function(e){
                    e.preventDefault();
                    var url=$(this).attr("href");
                    $.get(url,function(data){
                        $(".content .mCSB_container").append(data); //load new content inside .mCSB_container
                        //scroll-to appended content
                        $(".content").mCustomScrollbar("scrollTo","h2:last");
                    });
                });

                $(".content").delegate("a[href='top']","click",function(e){
                    e.preventDefault();
                    $(".content").mCustomScrollbar("scrollTo",$(this).attr("href"));
                });

            });
        })(jQuery);
    </script>
</head>
<body>

<header>
    <h1><img src="<?php echo ADMIN_IMG; ?>/admin_logo.png"/></h1>
    <ul class="rt_nav">
        <li><a href="http://www.deathghost.cn" target="_blank" class="website_icon">站点首页</a></li>
        <li><a href="#" class="clear_icon">清除缓存</a></li>
        <li><a href="#" class="admin_icon"><?php echo session('username'); ?></a></li>
        <li><a href="#" class="set_icon">账号设置</a></li>
        <li><a href="/moban/index.php/Admin/Login/out" class="quit_icon">安全退出</a></li>
    </ul>
</header>


<!--aside nav-->
<!--aside nav-->
<aside class="lt_aside_nav content mCustomScrollbar">
    <h2><a href="index.html">起始页</a></h2>
    <ul>
        <li>
            <dl>
                <dt>商品管理</dt>
                <dd><a href="/moban/index.php/Admin/Goods/index" <?php if($ac == 'Goods/index'): ?>class="active"<?php endif; ?> >商品列表</a></dd>
                <dd><a href="/moban/index.php/Admin/Goods/add" <?php if($ac == 'Goods/add'): ?>class="active"<?php endif; ?> >添加商品</a></dd>
                <dd><a href="/moban/index.php/Admin/GoodsIndustry/index" <?php if($ac == 'GoodsIndustry/index'): ?>class="active"<?php endif; ?> >商品行业</a></dd>
                <dd><a href="/moban/index.php/Admin/GoodsIndustry/add" <?php if($ac == 'GoodsIndustry/add'): ?>class="active"<?php endif; ?> >行业添加</a></dd>
                <dd><a href="/moban/index.php/Admin/GoodsColor/index" <?php if($ac == 'GoodsColor/index'): ?>class="active"<?php endif; ?> >商品颜色</a></dd>
                <dd><a href="/moban/index.php/Admin/GoodsColor/add" <?php if($ac == 'GoodsColor/add'): ?>class="active"<?php endif; ?> >颜色添加</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>网站栏目管理</dt>
                <!--当前链接则添加class:active-->
                <dd><a href="/moban/index.php/Admin/Nav/index" <?php if($ac == 'Nav/index'): ?>class="active"<?php endif; ?>>栏目列表</a></dd>
                <dd><a href="/moban/index.php/Admin/Nav/add" <?php if($ac == 'Nav/add'): ?>class="active"<?php endif; ?> >添加栏目</a></dd>
                <dd><a href="recycle_bin.html">商品回收站示例</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>订单信息</dt>
                <dd><a href="order_list.html">订单列表示例</a></dd>
                <dd><a href="order_detail.html">订单详情示例</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>会员管理</dt>
                <dd><a href="/moban/index.php/Admin/Member/index" <?php if($ac == 'Member/index'): ?>class="active"<?php endif; ?> >会员列表</a></dd>
                <dd><a href="/moban/index.php/Admin/Member/add" <?php if($ac == 'Member/add'): ?>class="active"<?php endif; ?> >添加会员</a></dd>
                <dd><a href="/moban/index.php/Admin/Member/viplst" <?php if($ac == 'Member/viplst'): ?>class="active"<?php endif; ?> >会员等级</a></dd>
                <dd><a href="adjust_funding.html">会员资金管理示例</a></dd>
            </dl>
        </li>

        <li>
            <dl>
                <dt>基础设置</dt>
                <dd><a href="setting.html">站点基础设置示例</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>配送与支付设置</dt>
                <dd><a href="express_list.html">配送方式</a></dd>
                <dd><a href="pay_list.html">支付方式</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>在线统计</dt>
                <dd><a href="discharge_statistic.html">流量统计</a></dd>
                <dd><a href="sales_volume.html">销售额统计</a></dd>
            </dl>
        </li>
        <li>
            <p class="btm_infor">© DeathGhost.cn 版权所有</p>
        </li>
    </ul>
</aside>
<style>
    .dataStatistic{width:400px;height:200px;border:1px solid #ccc;margin:0 auto;margin:10px;overflow:hidden}
    #cylindrical{width:400px;height:200px;margin-top:-15px}
    #line{width:400px;height:200px;margin-top:-15px}
    #pie{width:400px;height:200px;margin-top:-15px}
</style>


<section class="rt_wrap content mCustomScrollbar">
<div id="main">
    
 <div class="rt_content">
  <div class="page_title">
   <h2 class="fl">颜色列表</h2>
   <a href="/moban/index.php/Admin/GoodsColor/add" class="fr top_rt_btn add_icon">添加新颜色</a>
  </div>
  
  <table class="table">
   <tbody><tr>
    <th>Id</th>
    <th>颜色名称</th>
    <th>颜色排序</th>
    <th>操作</th>
   </tr>
   <?php if(is_array($colorInfo)): $i = 0; $__LIST__ = $colorInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>

     <td class="center"><?php echo ($v["id"]); ?></td>
     <td class="center"><?php echo ($v["color_name"]); ?></td>
     <td class="center">
         <input id="navSort" style="width:20px;height:20px;text-align: center" type="text" name="<?php echo ($v["id"]); ?>" value="<?php echo ($v["sort"]); ?>"/>

     </td>
     <td class="center">
      <a href="/moban/index.php/Admin/GoodsColor/edit/id/<?php echo ($v["id"]); ?>" title="编辑" class="link_icon">e</a>
      <a href="/moban/index.php/Admin/GoodsColor/del/id/<?php echo ($v["id"]); ?>" title="删除" onclick="return confirm('确定要删除吗？')" class="link_icon">d</a>
     </td>

   </tr><?php endforeach; endif; else: echo "" ;endif; ?>

   </tbody>

  </table>
     <div class="foot_page">
         <div class="foot_data">

         </div>
         <div class="pages">
             <?php echo ($page); ?>
         </div>
     </div>
 </div>






</div>
</section>
<script src="<?php echo ADMIN_JS; ?>/memberAjax.js"></script>
<script src="/moban/Public/dialog/dialog.js"></script>

</body>
</html>