<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<title>模板易吧(moban18.com)|模板易吧-做完整无错带数据的模板下载平台</title>
<meta name="description" content="模板易吧.模板18(moban18.com)专注精美实用模板制作及整合.包括企业网站模板,商业模板,免费模板,网站源码,整站模板带数据下载,网站教程等,站长快速建站好帮手,服务QQ970003436!">
<meta name="keywords" content="模板易吧,网站模板,模板,网站源码,商城源码,企业模板,商城模板,模板下载">
<meta property="qc:admins" content="552103611764545506375">
<meta name="baidu-site-verification" content="DLLJTpAaCu">
<meta http-equiv="mobile-agent" content="format=xhtml;url=http://www.dede58.com/m/index.php">
<link media="all" href="/moban/Public/css/index.css" type="text/css" rel="stylesheet">
<link media="all" href="/moban/Public/css/study.css" type="text/css" rel="stylesheet">
<link media="all" href="/moban/Public/css/cate.css" type="text/css" rel="stylesheet">
<script src="/moban/Public/js/jquery-1.4.4.min.js"></script>
<script src="/moban/Public/js/index.js"></script>

</head>
<body>

<div class="top_bg">
    <div class="top"> <span>欢迎来到模板18(www.moban18.com)！我们致力于商业模板及VIP模板更新</span>
        <div id="uc_member">
            <?php if($_SESSION['userid']):?>

            <div class="header_r">
                你好，<a href="/moban/index.php/Home/User/index"><?php echo $_SESSION['username'];?></a> |
                <a href="/moban/index.php/Home/User/logout">退出</a> |

                <a href="/moban/index.php/Home/User/index">我的账户</a>
                |
                <a href="/moban/index.php/Home/User/buy">升级会员</a>
                |
                <a href="/moban/index.php/Home/User/buy#jbin">充值金币</a>
                |
                <a href="/moban/index.php/Home/User/myorder">我的下载</a>

            </div>

            <?php else:?>
                <div class="userlogin">
                    <ul class="tg_tools fl" id="login_area">
                        <li class="no-hover nologin">
                            <span>
                                <a href="http://www.sucaihuo.com/Index/login/type/qq" rel="nofollow">
                                    <img alt="Connect_logo_6.png" src="http://qzonestyle.gtimg.cn/qzone/vas/opensns/res/img/Connect_logo_6.png" >
                                </a>
                            </span>
                        </li>
                        <li class="no-hover nologin">
                            <span>
                                <a href="/moban/index.php/Home/Regist/index" rel="nofollow">注册</a>
                            </span>
                        </li>
                        <li class="box_color nav_home" id="nav_login" >
                            <span>
                                <a href="/moban/index.php/Home/Login/index" class="sn_login common_color" rel="nofollow">登录</a>
                            </span>
                            <b class="icon"></b>
                            <!--<ul>
                                <li><a href="http://www.sucaihuo.com/Index/login/type/sina" rel="nofollow"><span>新浪微博</span></a></li>
                                <li><a href="javascript:;" onclick="showWeinxiLoginBox($(this))" rel="nofollow"><span>微信登录</span></a></li>
                            </ul>-->
                        </li>
                    </ul>

                </div>

            <?php endif;?>


        </div>
    </div>
</div>
<div class="mainer">
    <div class="header">
        <div class="wrap">
            <h1><a href="http://www.moban18.com/" target="_parent" title="网站模板_网站源码_MOBAN18.COM">模板易吧(moban18)</a></h1>
            <div class="searchx">
                <div class="ss">
                    <div class="s_form">
                        <form name="formsearch" method="get" action="" target="_blank">
                            <input name="kwtype" value="0" type="hidden">
                            <input name="typeid" value="1" type="hidden">
                            <div class="s1">
                                <input class="keywords" name="q" id="q" title="请输入关键字" value="模板18搜索..." onfocus="if(this.value=='模板18搜索...'){this.value='';}" onblur="if(this.value==''){this.value='模板18搜索...';}" maxlength="27" type="text">
                            </div>
                            <div class="s2">
                                <select name="typeid" class="search-option" id="typeid">
                                    <option value="0" selected="1">全部</option>
                                    <?php if(is_array($cates)): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["cate_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>

                            </div>
                            <div class="btn">
                                <input class="btnb" value="搜&nbsp;索" type="submit">
                            </div>
                        </form>
                    </div>


                    <div class="s_b_link"><a href="">每日更新</a>|<a href="" rel="nofollow">每板必测</a>|<a href="" target="_top">Tag标签</a>|<a href="" rel="nofollow">充值</a></div>
                    <div class="cl"></div>
                </div>
            </div>

            <div class="s_rad">
                <ul>
                    <li><a href="http://www.dede58.com/shop/" style="color: rgb(255, 0, 0); font-weight: bold;"><b>模板18商业模板频道上线！ </b></a></li>
                    <li><a href="http://www.dede58.com/a/dedecode/" style="color: red;">模板18会员模板，持续更新！</a></li>
                    <li><a href="http://www.dede58.com/host" style="color: rgb(62, 147, 26); font-weight: bold;"><b>模板18小程序专业频道上线</b></a></li>
                </ul>
                <a href="" title="随机增送5-12个金币，可用来购买商业模板" class="dayvip"></a>
            </div>
        </div>
    </div>
    <div class="nav_bg">
        <div class="wrap">
            <a class="qiandao" href="" target="_self" title="随机增送5-12个金币，可用来购买商业模板">签到领金币！</a>
            <ul id="nav" class="nav clearfix">
                <li class="nLi
                    <?php
 if($ac=='Index' || empty($ac)){ echo 'on'; } ?>
                    ">
                    <h3><a href="http://127.0.0.1/moban/index.php">首页</a></h3>
                </li>
                <?php foreach($cates as $v):?>
                <li class="nLi
                <?php if($ac==$v['cate_url']){ echo 'on'; }?>
                        ">
                    <h3><a href="/moban/index.php/Home/<?php echo ($v['cate_url']); ?>"><?php echo ($v['cate_name']); ?></a></h3>
                </li>
                <?php endforeach;?>



                <span class="new"></span> <span class="vip"></span>
            </ul>
        </div>
    </div>

    <div class="blank8"></div>
</div>


<div id="main" class="clearfix">
    
    <div class="main_box">
        <div class="box">
            <div class="blank"></div>
            <div id="ur_here">
                当前位置: <a href="mbmeilishuo/">首页</a> <code>&gt;</code> 用户中心
            </div>
        </div>
        <div class="block clearfix1">
            
<div class="AreaL">
    <div class="AreaL_box">
        <div class="box_1">
            <div class="userCenterBox">
                <div class="userMenu clearfix">
                    <div class="user_info_box">
                        <div class="userinfo">
                            <div class="user-Info_box1">
                                <a href="/moban/index.php/Home/User/tx">
                                    <?php if($users['user_photo'] == ''): ?><img style="width: 60px;height: 60px" src="/moban/Public/images/tx.jpg">
                                        <?php else: ?>
                                        <img style="width: 60px;height: 60px" src="/moban/<?php echo ($users['user_photo']); ?>"><?php endif; ?>
                                </a>
                            </div>
                            <div class="user-name">
                                <ul>
                                    <li>
                                        <a href="/moban/index.php/Home/User/buy">
                                        <span class="mp-title">积分：</span>
                                        <span class="mp-num"><?php echo ($users["user_points"]); ?></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/moban/index.php/Home/User/buy#jbin">
                                        <span class="mp-title">金币：</span>
                                        <span class="mp-num"><?php echo ($users["user_jbin"]); ?></span>
                                        </a>

                                    </li>


                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="userInfo_box2">
                        <a href="/moban/index.php/Home/User/ziliao">
                            <h2>帐号类型：<b><?php echo ($users['vip_name']); ?></b></h2>
                            <p>呢&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;称：<b><?php echo ($users['user_nick']); ?></b></p>
                        </a>

                    </div>


                </div>

            </div>



        </div>
    </div>

        <div class="AreaL_box clearfix">
            <div class="box_1">
                <div class="userCenterBox">
                    <div class="userMenu">
                        <a href="/moban/index.php/Home/User/index" <?php if($ac == index): ?>class="active"<?php endif; ?>><img src="/moban/Public/images/u1.gif"> 会员中心</a>
                        <a href="/moban/index.php/Home/User/ziliao" <?php if($ac == ziliao): ?>class="active"<?php endif; ?> ><img src="/moban/Public/images/u2.gif"> 用户信息</a>
                        <a href="/moban/index.php/Home/User/buy" <?php if($ac == buy): ?>class="active"<?php endif; ?> ><img src="/moban/Public/images/u3.gif"> 加入会员</a>
                        <a href="/moban/index.php/Home/User/buy#jbin"><img src="/moban/Public/images/u4.gif"> 充值金币</a>
                        <a href="/moban/index.php/Home/User/operation" <?php if($ac == operation): ?>class="active"<?php endif; ?>><img src="/moban/Public/images/u5.gif"> 消费记录</a>
                        <a href="/moban/index.php/Home/User/myorder" <?php if($ac == myorder): ?>class="active"<?php endif; ?>><img src="/moban/Public/images/u6.gif"> 我的下载</a>
                        <a href="mbmeilishuo/user.php?act=collection_list"><img src="/moban/Public/images/u5.gif"> 我的收藏</a>
                        <a href="mbmeilishuo/user.php?act=message_list"><img src="/moban/Public/images/u6.gif"> 我的评论</a>
                        <a href="mbmeilishuo/user.php?act=logout" style="background:none; text-align:right; margin-right:10px;"><img src="/moban/Public/images/bnt_sign.gif"></a>
                    </div>

                </div>



            </div>

    </div>
</div>








            <div class="AreaR">
                <div class="AreaR_box">
                    <div class="AreaR_box_1">
                        <div class="clearfix">
                            <h5><span
                                    style="font-size: 20px;display: block;margin-bottom:10px;border-bottom:1px solid #DDDDDD;">个人资料</span>
                            </h5>
                            <div class="blank"></div>
                            <ul id="userinfo">
                                <li><a href="/moban/index.php/Home/User/ziliao" class="user_active">基本资料</a></li>
                                <li><a href="/moban/index.php/Home/User/tx">头像设置</a></li>
                            </ul>
                            <form method="post" action="">
                            <div id="user_info">
                                <div class="userinfo_box">
                                    <ul>
                                        <li>
                                            <span>帐号类型：</span>
                                            <p><?php echo ($users['vip_name']); ?></p>
                                        </li>
                                        <li>
                                            <span>用户邮箱：</span>
                                            <p><?php echo ($users['user_email']); ?></p>
                                        </li>
                                        <li>
                                            <span>昵&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;称：</span>
                                            <input name="nick_name" value="<?php echo ($users['user_nick']); ?>"/>(个人会员该项为昵称，企业会员填写公司名称)

                                        </li>
                                        <li>
                                            <span>原&nbsp;&nbsp;密&nbsp;&nbsp;码：</span>
                                            <input name="password" value=""/>

                                        </li>
                                        <li>
                                            <span>新&nbsp;&nbsp;密&nbsp;&nbsp;码：</span>
                                            <input name="password1" value=""/>(不修改密码请保留此项为空)

                                        </li>
                                        <li>
                                            <span>确认密码：</span>
                                            <input name="password2" value=""/>(不修改密码请保留此项为空)

                                        </li>
                                        <li id="verifly">
                                            <span>验&nbsp;&nbsp;证&nbsp;&nbsp;码：</span>
                                            <input name="verifly" style="width: 60px" value=""/>
                                            <img src="/moban/index.php/Home/User/verifly_img" style="cursor: pointer" onclick="this.src='/moban/index.php/Home/User/verifly_img/'+Math.random()"/>

                                        </li>

                                    </ul>

                                    <input class="userinfo_submit" name="submit" type="submit" value="确认修改"/>


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



<div class="footer_bg">
    <div class="footer">
        <div class="foot_nav">
            <div class="foot_logo">
                <p>有问题吗？请联系客服</p>
                <p>QQ：<a target="_top" href="http://wpa.qq.com/msgrd?v=3&amp;uin=970003436&amp;site=qq&amp;menu=yes">970003436</a></p>
            </div>
            <dl class="foot_dl">
                <dt><a href="http://www.dede58.com/a/help/" rel="nofollow">新手上路</a></dt>
                <dd><a href="http://www.dede58.com/a/help/1193.html" rel="nofollow">织梦CMS</a></dd>
                <dd><a href="http://www.dede58.com/a/help/1248.html" rel="nofollow">模板网站的优势</a></dd>
                <dd><a href="http://www.dede58.com/vip" rel="nofollow">怎么购买模板</a></dd>
                <dd><a href="http://www.dede58.com/a/dedeaz/4007.html" rel="nofollow">模板购买后怎么安装</a></dd>
            </dl>
            <dl class="foot_dl">
                <dt><a href="http://www.dede58.com/a/help/guanyuwomen/" rel="nofollow">业务介绍</a></dt>
                <dd><a href="http://www.dede58.com/a/dedecms/">模板存档</a></dd>
                <dd><a href="http://www.dede58.com/host/" rel="nofollow">织梦主机</a></dd>
                <dd><a href="http://www.dede58.com/a/help/guanggaofuwu/" rel="nofollow">广告投放</a></dd>
                <dd><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=516124166&amp;site=dede58.com&amp;menu=yes" rel="nofollow">网站仿制</a></dd>
            </dl>
            <dl class="foot_dl">
                <dt><a href="#" rel="nofollow">服务支持</a></dt>
                <dd><a href="http://www.dede58.com/vip" rel="nofollow">支付方式</a></dd>
                <dd><a href="http://www.dede58.com/data/sitemap.html" rel="nofollow">网站地图</a></dd>
                <dd><a href="http://www.dede58.com/a/help/1250.html" rel="nofollow">程序环境介绍</a></dd>
                <dd><a href="http://www.dede58.com/a/help/mianzeshengming/" rel="nofollow">版权与免责声明</a></dd>
            </dl>
            <dl class="foot_dl">
                <dt><a href="http://www.dede58.com/a/pay/" rel="nofollow">售后服务</a></dt>
                <dd><a href="http://www.dede58.com/a/pay/" rel="nofollow">服务项目</a></dd>
                <dd><a href="http://www.dede58.com/a/zhimengjiaocheng/">技术教程</a></dd>
                <dd><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=541475789&amp;site=qq&amp;menu=yes" rel="nofollow">建议反馈</a></dd>
            </dl>
            <dl class="foot_dl foot_dlno">
                <dt><a href="http://www.dede58.com/a/help/guanyuwomen/" rel="nofollow">关于我们</a></dt>
                <dd><a href="http://www.dede58.com/a/help/guanyuwomen/" rel="nofollow">关于DEDE58</a></dd>
                <dd><a href="http://www.dede58.com/a/help/contact/" rel="nofollow">联系我们</a></dd>
                <!--<dd><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=970003436&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:970003436:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></dd>-->
                <dd style="height: auto; padding-top: 12px;"> <a key="59562586efbfb06c757b849e" logo_size="124x47" logo_type="common" href="http://www.cn-ecusc.org.cn/cert/aqkx/site/?site=www.dede58.com" target="_top"><b id="aqLogoVWJPM" style="display: none;"></b><img src="/moban/Public/images/aqkx_124x47.png" alt="安全联盟认证" style="border: medium none;" width="124" height="47"></a> </dd>
            </dl>
        </div>
        <div class="foot_pre">
            <p>Copyright @ 2011-2017 <a href="http://www.dede58.com/" title="DEDECMS模板">织梦58</a> All Rights Reserved. <a href="http://www.miibeian.gov.cn/" rel="nofollow">琼ICP备14001732号</a> 版权所有 Powered by <a href="http://www.dedecms.com/">DedeCMS</a></p>
            <p>  </p>
        </div>
    </div>
    <div class="clear"></div>
</div>

<div id="kefu">
    <div class="top"> 在线客服<img src="/moban/Public/images/close.gif" class="close"> </div>
    <div class="middle"> <a target="_top" href="http://wpa.qq.com/msgrd?v=3&amp;uin=970003436&amp;site=qq&amp;menu=yes"><img src="/moban/Public/images/qq.png"></a><br>
        <a target="_top" href="http://wpa.qq.com/msgrd?v=3&amp;uin=541475789&amp;site=qq&amp;menu=yes"><img src="/moban/Public/images/qq.png"></a> <a target="_top" href="http://wpa.qq.com/msgrd?v=3&amp;uin=383600043&amp;site=qq&amp;menu=yes"><img src="/moban/Public/images/qq.png"></a> </div>
</div>
<div class="right_bar"> <img src="/moban/Public/images/right_bar.jpg"> </div>
<div id="tbox" style="display: block;"> <a class="taoba" title="双语" href="http://www.dede58.com/moban/sy.html" target="_top">双语模板</a>
    <a class="taoba" title="营销型" href="http://www.dede58.com/moban/yx.html" target="_top">营销型模板</a>
    <a class="taoba" title="手机" href="http://www.dede58.com/moban/shouji.html" target="_top">手机模板</a>
    <a class="taoba" title="响应式" href="http://www.dede58.com/moban/xys.html" target="_top">响应式模板</a>
</div>


</body>
</html>