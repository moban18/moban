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
<script src="/moban/Public/js/jquery-1.4.4.min.js"></script>
<script src="/moban/Public/js/index.js"></script>
</head>
<script>
    var Thinkphp={
        'login':"/moban/index.php/Home/Login/login",
    };
</script>
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
                <li class="nLi on">
                    <h3><a href="http://127.0.0.1/">首页</a></h3>
                </li>
                <?php if(is_array($cates)): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="nLi">
                    <h3><a href="/moban/index.php/Home/<?php echo ($v['cate_url']); ?>"><?php echo ($v['cate_name']); ?></a></h3>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>



                <span class="new"></span> <span class="vip"></span>
            </ul>
        </div>
    </div>

    <div class="blank8"></div>
</div>

<div class="reg">

        <div class="reg_top">
            <div class="reg_box">
                <h2>登陆</h2>
                <p>与网友进行讨论及互动；收藏您喜欢的文章和内容；积累积分下载原创模板、精品源码、(兑换礼品正在开发中...)；分享原创代码赢取火币。</p>
            </div>
            <a href="###" >注册</a>
        </div>
        <div class="reg_mid">


                <div class="reg_mid_left">
                    <p>亲，您可以使用<span>以下帐号</span>直接登录素材火，无需注册</p>
                    <div class="reg_mid_left_imgs">
                        <a href="###">
                            <div class="qq_login_img"></div>
                            <div class="qq_login_txt">QQ</div>
                        </a>
                        <a href="###">
                            <div class="weix_login_img"></div>
                            <div class="weix_login_txt">微信</div>
                        </a>
                        <a href="###">
                            <div class="weib_login_img"></div>
                            <div class="weib_login_txt">微博</div>
                        </a>

                    </div>

                </div>


                <div class="reg_mid_right">
                    <div class="reg_mid_right_box">
                        <div class="input_item">
                            <div id="email_title" class="item_title ">邮箱</div>
                            <input id="email" type="text" class="form_input " name="email"/>
                            <span class="error" style="display:none;color:red;">不能为空</span>
                            <i class="right_igon" style="display:none"></i>
                            <span class='grey' style='display: inline-block;'>邮箱为登陆帐号</span>
                        </div>

                        <div class="input_item">
                            <div id="password_title" class="item_title">密码</div>
                            <input id="password" type="password" class="form_input" name="password"/>
                            <span class="error" style="display:none;color:red;">不能为空</span>
                            <i class="right_igon" style="display:none"></i>
                            <span class='grey' style='display: none;'>6-20位</span>
                        </div>
                        <div class="input_item">
                            <div id="verify_title" class="item_title">验证码</div>
                            <input id="verify" type="text" class="form_input" name="verify"/>
                            <span class="error" style="display:none;color:red;">不能为空</span>
                            <i class="right_igon" style="display:none"></i>
                            <div class="verify_img"><img src="/moban/index.php/Home/Login/veifiy_img_login" alt=""  onclick="this.src='/moban/index.php/Home/Login/veifiy_img_login/'+Math.random()"/></div>
                        </div>



                        <a href="javascript:void(0);" id="login" class="loginBottom">登录</a>
                    </div>



                </div>

        </div>



        <div class="reg_foot">
            <div class="reg_foot_top">
                <ul>
                    <li>扒模板</li>
                    <li>联系我们</li>
                    <li>关于我们</li>
                    <li>招纳贤士</li>
                </ul>
                <p>Copyright©2010-2017 All Rights Reserved. 苏ICP备15009298</p>
            </div>
            <div class="reg_foot_bot">
                <a href="####"><img src="/moban/Public/images/qq-chat.png" alt=""/></a>
                <span class="reg_foot_qgroup">qq群：35291327</span>
                <span class="reg_foot_email">邮箱：416148489@qq.com</span>
                <span class="reg_foot_phone">手机：18005151538</span>

            </div>


        </div>


</div>
</body>
</html>