<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>后台管理系统</title>
    <meta name="author" content="DeathGhost" />

    <!--[if lt IE 9]>
    <script src="<?php echo ADMIN_JS; ?>/html5.js"></script>
    <![endif]-->
    <script src="<?php echo ADMIN_JS; ?>/jquery.js"></script>
    <script src="<?php echo ADMIN_JS; ?>/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/moban/Application/Extends/uploadify/jquery.uploadify.min.js"></script>
    <script src="/moban/Application/Extends/editor/ueditor.config.js"></script>
    <script src="/moban/Application/Extends/editor/ueditor.all.min.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo ADMIN_CSS; ?>/style.css">
    <link rel="stylesheet" type="text/css" href="/moban/Application/Extends/uploadify/uploadify.css">

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



<aside class="lt_aside_nav content mCustomScrollbar">
    <h2><a href="index.html">起始页</a></h2>
    <ul>
        <li>
            <dl>
                <dt>商品属性管理</dt>
                <dd><a href="/moban/index.php/Admin/Attrtype/index" <?php if($ac == 'Attrtype/index'): ?>class="active"<?php endif; ?> >属性种类列表</a></dd>
                <dd><a href="/moban/index.php/Admin/Attrtype/add" <?php if($ac == 'Attrtype/add'): ?>class="active"<?php endif; ?> >属性种添加</a>
                </dd>
             <!--   <dd><a href="/moban/index.php/Admin/Attr/index" <?php if($ac == 'Attr/index'): ?>class="active"<?php endif; ?> >商品属性列表</a></dd>
                <dd><a href="/moban/index.php/Admin/Attr/add" <?php if($ac == 'Attr/add'): ?>class="active"<?php endif; ?> >添加商品属性</a></dd>-->
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
   <h2 class="fl">添加会员</h2>
  </div>
  <section>
   <div class="add_box">
    <form action="" method="post">
     <ul class="ulColumn2">
      <li>
       <span class="item_name" style="width:120px;">会员名称：</span>
       <input class="textbox textbox_225" name="username" type="text">
       <span class="errorTips">一般不超过20个字符</span>
      </li>
      <li>
      <span class="item_name" style="width:120px;">会员EMAIL：</span>
      <input class="textbox textbox_225" name="email" type="text">
      <span class="errorTips">用于网站帐号登陆</span>
     </li>
      <li>
       <span class="item_name" style="width:120px;">会员密码：</span>
       <input class="textbox textbox_225" name="password"  type="text">
      </li>
      <li>
       <span class="item_name" style="width:120px;">是否锁定：</span>
       <label><input id="lock" type="radio" value="0" name="lock" checked="checked" />正常</label>
       <label><input id="lock"  type="radio" value="1" name="lock"/>锁定</label>
      </li>
      <li>
       <span class="item_name" style="width:120px;"></span>
       <input class="member_btn" value="保存" type="submit">
      </li>
     </ul>
    </form>
   </div>
  </section>
 </div>



</div>
</section>
<script src="<?php echo ADMIN_JS; ?>/memberAjax.js"></script>
<script src="/moban/Public/dialog/dialog.js"></script>

</body>
</html>