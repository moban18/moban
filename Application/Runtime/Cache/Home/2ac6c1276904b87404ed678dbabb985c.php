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


<div id="main" class="clearfix">
    
    <div class="article_box clearfix">
        <div class="article_left">
            <div class="article_left_top clearfix">
                <div class="article_top_left">
                    <a href="###">首页</a><span>></span>
                    <a href="###">建站小识</a><span>></span>
                    <a href="###">建站小识</a><span>></span>
                </div>
                <div class="article_top_right">
                    <a href="###" class="anther">相关案例演示</a>
                </div>

            </div>
            <div class="article_recommon">
                <ul class="godds_recommon">
                    <li>
                        <a href="###">
                            <img src="/moban/Public/images/artrecommon1.png"/>白蓝色bootstrap课程模板_精选教育模板
                        </a>
                    </li>
                    <li>
                        <a href="###">
                            <img src="/moban/Public/images/artrecommon2.png"/>白蓝色bootstrap课程模板_精选教育模板
                        </a>
                    </li>
                    <li>
                        <a href="###">
                            <img src="/moban/Public/images/artrecommon1.png"/>白蓝色bootstrap课程模板_精选教育模板
                        </a>
                    </li>
                    <li>
                        <a href="###">
                            <img src="/moban/Public/images/artrecommon2.png"/>白蓝色bootstrap课程模板_精选教育模板
                        </a>
                    </li>
                    <li>
                        <a href="###">
                            <img src="/moban/Public/images/artrecommon1.png"/>白蓝色bootstrap课程模板_精选教育模板
                        </a>
                    </li>
                    <li>
                        <a href="###">
                            <img src="/moban/Public/images/artrecommon2.png"/>白蓝色bootstrap课程模板_精选教育模板
                        </a>
                    </li>
                </ul>
            </div>
            <div id="article_content">
                <p>织梦移动站使用方法：

                    一、 安装Dedecms移动站点的两种方式：

                    （1）下载新版本直接安装使用，Dedecms版本：V5.7SP1正式版(2015-06-18)该版本包含旧版本所没有的移动站点功能。
                    （2）老版本升级（仅针对增加移动站点功能），下载最新版本（注意网站编码需与原站一致），复制压缩包中以下文件到原站对应目录下：
                    织梦dedeCMS手机移动端站点安装搭建使用教程
                    织梦DedeCMS移动端手机端站点安装搭建使用教程

                    注意：如果原站有非默认模板，如某栏目模板为/templets/defaultst_default_news.htm，可将/templets/defaultst_default_m.htm复制一份改名为list_default_news_m.htm。即：pc端网站模板需有对应的移动端网站模板，后者文件名为前者文件名后“_m”。

                    安装或升级dedecms完成，此时应该就可以进行制作移动网站了，但dedecms20150618版本提供的移动站点功能在使用过程中发现一些问题，需要进行修改后才可正常使用，所以有了下面的dedecms修改步骤…

                    二、修改Dedecms

                     </p>

            </div>
            <div class="goods_tags clearfix">
                <span>标签：</span>
                <a class="tags_a" href="###" target="_blank">摄影</a>

            </div>
            <div class="declare">
                <span>注意：</span>如需转载，请注明来源<a href="http://www.moban18.com">moban18.com</a>并保留原文链接：<a href="http://www.sucaihuo.com/templates/4339.html">http://www.sucaihuo.com/templates/4339.html</a>
            </div>
            <div class="article_foot">
                <div class="goods_pagess clearfix article_pages">
                    <div class="goods_pagess_pre">
                        <a href="###">卡通风格html5响应式儿童学校教育网站模板</a>
                    </div>
                    <div class="goods_pagess_nex">
                        <a href="###">品牌服装鞋子箱包奢侈品购物商城手机模板</a>
                    </div>

                </div>
            </div>
            <div class="article_dashang">
                <div class="dashang_top"></div>
                <div id="cy-reward-pop" style="display:none">
                    <div node-type="cy-close-btn" class="cy-close-btn"></div>
                    <img class="cy-avatar" src="/moban/Public/images/pY9YN2e_jpg.jpg">
                    <div class="cy-reward-title">感谢你的支持，我会继续努力！
                </div>
                    <div node-type="cy-reward-code" class="cy-reward-code">
                        <img node-type="alipay-code" style="display:block" src="/moban/Public/images/pY9Ygvv_png.png">
                        <img node-type="weichat-code" style="display:none" src="/moban/Public/images/pY9YfZU_png.png">
                    </div>
                    <div class="cy-reward-txt">扫码打赏，建议金额1-10元</div>
                    <div node-type="platform-choice" class="platform-choice clearfix">
                        <div class="platform-item clearfix">
                            <span node-type="check-platform" data-id="alipay" class="platform-radio-box platform-checked"></span>
                            <span class="platform-logo alipay"></span>
                        </div>
                        <div class="platform-item clearfix">
                         <span node-type="check-platform" data-id="weichat" class="platform-radio-box"></span>
                        <span class="platform-logo weichat"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="article_right">
            <div class="goods_right_box">
                <div class="goods_right_box_top">
                    <h1>相关文章</h1>
                    <span>/Article</span>
                    <a href="###">更多></a>
                </div>
                <div class="goods_right_ul clearfix">
                    <ul>
                        <li>
                            <a href="###">html5响应式摄影爱好者团队作afdfsdfds</a>
                            <span>03-17</span>
                        </li>
                        <li>
                            <a href="###">html5响应式摄影爱好者团队作</a>
                            <span>03-17</span>
                        </li>
                        <li>
                            <a href="###">html5响应式摄影爱好者团队作</a>
                            <span>03-17</span>
                        </li>
                        <li>
                            <a href="###">html5响应式摄影爱好者团队作afdfsdfds</a>
                            <span>03-17</span>
                        </li>
                        <li>
                            <a href="###">html5响应式摄影爱好者团队作</a>
                            <span>03-17</span>
                        </li>
                        <li>
                            <a href="###">html5响应式摄影爱好者团队作</a>
                            <span>03-17</span>
                        </li>
                        <li>
                            <a href="###">html5响应式摄影爱好者团队作afdfsdfds</a>
                            <span>03-17</span>
                        </li>
                        <li>
                            <a href="###">html5响应式摄影爱好者团队作</a>
                            <span>03-17</span>
                        </li>
                        <li>
                            <a href="###">html5响应式摄影爱好者团队作</a>
                            <span>03-17</span>
                        </li>
                        <li>
                            <a href="###">html5响应式摄影爱好者团队作afdfsdfds</a>
                            <span>03-17</span>
                        </li>
                        <li>
                            <a href="###">html5响应式摄影爱好者团队作</a>
                            <span>03-17</span>
                        </li>
                        <li>
                            <a href="###">html5响应式摄影爱好者团队作</a>
                            <span>03-17</span>
                        </li>
                        <li>
                            <a href="###">html5响应式摄影爱好者团队作afdfsdfds</a>
                            <span>03-17</span>
                        </li>
                        <li>
                            <a href="###">html5响应式摄影爱好者团队作</a>
                            <span>03-17</span>
                        </li>
                        <li>
                            <a href="###">html5响应式摄影爱好者团队作</a>
                            <span>03-17</span>
                        </li>
                        <li>
                            <a href="###">html5响应式摄影爱好者团队作afdfsdfds</a>
                            <span>03-17</span>
                        </li>
                        <li>
                            <a href="###">html5响应式摄影爱好者团队作afdfsdfds</a>
                            <span>03-17</span>
                        </li>
                        <li>
                            <a href="###">html5响应式摄影爱好者团队作afdfsdfds</a>
                            <span>03-17</span>
                        </li>
                        <li>
                            <a href="###">html5响应式摄影爱好者团队作afdfsdfds</a>
                            <span>03-17</span>
                        </li>
                        <li>
                            <a href="###">html5响应式摄影爱好者团队作afdfsdfds</a>
                            <span>03-17</span>
                        </li>

                    </ul>
                </div>

            </div>
            <div class="goods_right_box">
                <div class="goods_right_box_top">
                    <h1>标签云</h1>
                    <span>/Tag</span>
                    <a href="###">更多></a>
                </div>
                <div class="goods_right_a clearfix">
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-响应式.html">响应式</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-bootstrap.html">bootstrap</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-装修.html">装修</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-绿色.html">绿色</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-企业模板.html">企业模板</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-后台模板.html">后台模板</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-响应式.html">响应式</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-bootstrap.html">bootstrap</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-装修.html">装修</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-绿色.html">绿色</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-企业模板.html">企业模板</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-后台模板.html">后台模板</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-装修.html">装修</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-绿色.html">绿色</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-企业模板.html">企业模板</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-后台模板.html">后台模板</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-响应式.html">响应式</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-bootstrap.html">bootstrap</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-bootstrap.html">bootstrap</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-装修.html">装修</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-绿色.html">绿色</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-企业模板.html">企业模板</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-后台模板.html">后台模板</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-装修.html">装修</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-绿色.html">绿色</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-企业模板.html">企业模板</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-后台模板.html">后台模板</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-响应式.html">响应式</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-bootstrap.html">bootstrap</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-响应式.html">响应式</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-bootstrap.html">bootstrap</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-装修.html">装修</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-绿色.html">绿色</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-企业模板.html">企业模板</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-后台模板.html">后台模板</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-响应式.html">响应式</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-bootstrap.html">bootstrap</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-装修.html">装修</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-绿色.html">绿色</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-企业模板.html">企业模板</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-后台模板.html">后台模板</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-装修.html">装修</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-绿色.html">绿色</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-企业模板.html">企业模板</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-后台模板.html">后台模板</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-响应式.html">响应式</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-bootstrap.html">bootstrap</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-bootstrap.html">bootstrap</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-装修.html">装修</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-绿色.html">绿色</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-企业模板.html">企业模板</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-后台模板.html">后台模板</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-装修.html">装修</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-绿色.html">绿色</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-企业模板.html">企业模板</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-后台模板.html">后台模板</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-响应式.html">响应式</a>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/tag-bootstrap.html">bootstrap</a>
                </div>

            </div>
        </div>

    </div>
    <script>
        $(function() {
            //标签云JS开始

            var tagss = $('.goods_right_a a');
            tagss.each(function(){
                var r = Math.floor(Math.random() * 255);
                var g = Math.floor(Math.random() * 255);
                var b = Math.floor(Math.random() * 255);
                $(this).css("background-color","rgb("+r+","+g+","+b+")");
                $(this).css("opacity",'0.7');
            });

            tagss.hover(function(){
                $(this).css("opacity",'1.0');
                $(this).mouseout(function(){
                    $(this).css("opacity",'0.7');
                });
            });
            //标签云JS结束





        });
    </script>


</div>



<div class="footer_bg clearfix">
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

<div class="right_bar"> <img src="/moban/Public/images/right_bar.jpg"> </div>
<div id="tbox" style="display: block;"> <a class="taoba" title="双语" href="http://www.dede58.com/moban/sy.html" target="_top">双语模板</a>
    <a class="taoba" title="营销型" href="http://www.dede58.com/moban/yx.html" target="_top">营销型模板</a>
    <a class="taoba" title="手机" href="http://www.dede58.com/moban/shouji.html" target="_top">手机模板</a>
    <a class="taoba" title="响应式" href="http://www.dede58.com/moban/xys.html" target="_top">响应式模板</a>
</div>

<script src="/moban/Public/js/cate.js"></script>



</body>
</html>