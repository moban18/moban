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
    
    <script src="<?php echo C('QRCODE');?>/jquery.qrcode.min.js"></script>
    <input type="hidden" name="goods_id" value="<?php echo I('id');?>"/>
    <div class="goods_show_box">
        <div id="goods_show">
            <!--模板内容面包导航-->
            <div class="goods_sbreadcrumbs">
                <span>&gt;</span><a href="/moban/index.php/Home/<?php echo ($cateInfo['cate_url']); ?>" target="_blank"><?php echo ($cateInfo['cate_name']); ?></a>
                <span>&gt;</span>
                <a href="/moban/index.php/Home/Vip/index/filter/<?php echo ($attr['id']); ?>-0-0-0-0-0">
                <?php echo ($attr['attr_name']); ?>
                </a>
                <span>&gt;</span>
                <a href="/moban/index.php/Home/Vip/index/filter/<?php echo ($searchs[0]['attrter_id']); ?>-0-0-0-0-0" target="_blank">
                    <?php if($searchs){ echo $searchs[0]['attr_name']; }?>
                </a>
                <span>&gt;</span><?php echo ($info['goods_name']); ?>
            </div>
            <!--模板内容面包结束-->
            <!--模板内容主体开始-->
            <div id="goods_show_main clearfix">
                <!--主体左边开始-->
                <div class="goods_show_main_left">
                    <div class="head  clearfix">
                        <div class="head_inner clearfix ">
                            <a class="userPic" href="http://www.sucaihuo.com/space/uid/1" target="_blank"><img
                                    class="round-image" alt="头像" src="/moban/Public/images/1.jpg" height="40"
                                    width="40"></a>
                            <!--标题处理【原创】红色字体开始-->
                            <?php
 $b='【原创】'; $a=strpos($info['goods_name'],$b); $c=substr($info['goods_name'],0,$a); ?>
                            <!--标题处理【原创】红色字体结束-->
                            <h1 class="clearfix"><?php if($a>0):?>
                                <?php echo $c;?>
                                【<b class="red">原创</b>】
                                <?php else:?>
                                <?php echo $info['goods_name'];?>
                                <?php endif;?>
                            </h1>
                            <div class="share_collect">
                                <div class="bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1523005464780">
                                    <a class="bds_more" href="#" data-cmd="more"></a>
                                    <a class="bds_tsina" title="分享到新浪微博" href="#" data-cmd="tsina"></a>
                                    <a class="bds_tieba" title="分享到百度贴吧" href="#" data-cmd="tieba"></a>
                                    <a class="bds_qzone" title="分享到QQ空间" href="#" data-cmd="qzone"></a>
                                    <a class="bds_sqq" title="分享到QQ好友" href="#" data-cmd="sqq"></a>
                                    <a class="bds_tqq" title="分享到腾讯微博" href="#" data-cmd="tqq"></a>
                                    <a class="bds_renren" title="分享到人人网" href="#" data-cmd="renren"></a>
                                    <a class="bds_douban" title="分享到豆瓣网" href="#" data-cmd="douban"></a>
                                    <a class="bds_mshare" title="分享到一键分享" href="#" data-cmd="mshare"></a>
                                </div>
                                <script>window._bd_share_config = {
                                    "common": {
                                        "bdSnsKey": {},
                                        "bdText": "",
                                        "bdMini": "2",
                                        "bdMiniList": false,
                                        "bdPic": "",
                                        "bdStyle": "0",
                                        "bdSize": "16"
                                    }, "share": {}
                                };
                                with (document)
                                    0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];</script>

                            </div>
                            <p class="info clearfix">
                                <span class="fr">来源：<?php echo ($_SERVER["SERVER_NAME"]); ?>/moban/index.php/Home/Vip/content/id/<?php echo ($info["id"]); ?></span>
                                <a href="http://www.moban18.com/" target="_blank"><span
                                        class="red">模板易吧</span></a>
                                <span class="addtime"><?php echo date('Y-m-d H:i',$info['goods_time'])?></span><span>浏览(<span><?php echo ($info['goods_comment']); ?></span>)</span>

                                <a class="poster_likes " onclick="getCollect($(this))"
                                   href="javascript:void(0)">
                                    <i class="like_remove
                                    <?php
 if($store){ echo 'like_status'; }?>
                                "></i><em>收藏</em>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="goods_boximgages">
                        <!--模板正文-->
                        <?php echo htmlspecialchars_decode($goodsInfo['goods_content'])?>

                    </div>

                    <div class="template_feature">
                        <span class="feature">
                            分类：<a href="/moban/index.php/Home/Vip/index/filter/<?php echo ($attr['id']); ?>-0-0-0-0-0">
                <?php echo ($attr['attr_name']); ?>
                </a>
                            &gt; <a href="/moban/index.php/Home/Vip/index/filter/<?php echo ($searchs[0]['attrter_id']); ?>-0-0-0-0-0">
                    <?php if($searchs){ echo $searchs[0]['attr_name']; }?>
                </a></span>
                        <span class="feature">
                            <?php foreach($searchs as $v): if($v['attr_id']==3): ?>

                            布局：
                            <a href="/moban/index.php/Home/Vip/index/filter/0-0-<?php echo ($v['attrter_id']); ?>-0-0-0" target="_blank">
                            <?php echo $v['attr_name'];?>
                            </a>
                            <?php endif; endforeach;?>
                        </span>
                        <span class="feature">

                            颜色：
                            <?php foreach($searchs as $v): if($v['attr_id']==2): ?>
                            <a href="/moban/index.php/Home/Vip/index/filter/0-<?php echo ($v['attrter_id']); ?>-0-0-0-0" target="_blank"><?php echo $v['attr_name'];?></a>&nbsp;
                            <?php endif;endforeach;?>
                        </span>
                        <span class="feature">模板数：<a onclick="getTemplatesMap('4337');"><?php echo ($info['moban_num']); ?></a></span>
                    </div>
                    <div class="viptype">
                        下载权限：
                        <input type="hidden" name="viptype" value="<?php echo ($info['goods_vips']); ?>"/>
                        <input type="hidden" name="jbin" value="<?php echo ($info['goods_price']); ?>"/>
                        <?php foreach($vips as $v):?>
                        <span><?php echo $v['vip_name'];?></span>&nbsp;&nbsp;
                        <?php endforeach;?>
                        <p class="vip_notise">注：会员免金币下载，如已下载，系统不会重复购买</p>
                    </div>
                    <div class="buttons clearfix">
                        <span class="btnbox">
                            <a class="bigbtn demo" id="btn_demo" href="http://yanshi.sucaihuo.com/modals/43/4337/demo"
                               target="_blank" rel="nofollow">查看演示</a>
                            <span class="dlnum">
                                下载资源：
                                <strong class="orange"><?php echo ($info['download_num']); ?></strong>
                                次
                            </span>
                        </span>
                        <div class="qrcode_box" id="qrcode_box" style="display:none">
                            <p>手机扫码访问：</p>
                            <div id="qrcode"></div>
                            <!--<img src="" id="qrcode">-->
                            <!--<img src="/moban/<?php echo ($goodsInfo['code_imgs']); ?>">-->
                        </div>
                        <span class="btnbox">
                            <a class="bigbtn download notlogin" onclick="downloadZipBox()">下载资源</a>
                            <span class="dlcount">
                                购买金币：
                                <strong class="orange"><?php echo ($info['goods_price']); ?></strong>金币
                            </span>
                        </span>

                    </div>
                    <div class="goods_tags clearfix">
                        <span>标签：</span>
                        <a class="tags_a" href="###" target="_blank">摄影</a>

                    </div>
                    <div class="goods_pagess clearfix">
                        <div class="goods_pagess_pre">
                            <a href="/moban/index.php/Home/Vip/content/id/<?php echo ($pre[0]['id']); ?>" target="_blank"><?php echo ($pre[0]['goods_name']); ?></a>
                        </div>
                        <div class="goods_pagess_nex">
                            <a href="/moban/index.php/Home/Vip/content/id/<?php echo ($nex[0]['id']); ?>" target="_blank"><?php echo ($nex[0]['goods_name']); ?></a>
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
                <!--主体左边结束-->
                <!--主体右边开始-->
                <div class="goods_show_main_right">
                    <div class="goods_right_box">
                        <div class="goods_right_box_top">
                            <h1>相关模板</h1>
                            <span>/Relative</span>
                            <a href="/moban/index.php/Home/Vip/index">更多></a>
                        </div>
                        <div class="goods_right_ul clearfix">
                            <ul>
                                <?php foreach($xgGoods as $v):?>
                                <li>
                                    <a href="/moban/index.php/Home/Vip/content/id/<?php echo ($v['id']); ?>" target="_blank"><?php echo ($v['goods_name']); ?></a>
                                    <span>
                                        <?php echo date('m-d',$v['goods_time'])?>
                                    </span>
                                </li>
                                <?php endforeach;?>
                            </ul>
                        </div>

                    </div>
                    <div class="goods_right_box">
                        <div class="goods_right_box_top">
                            <h1>推荐模板</h1>
                            <span>/Recommed</span>
                            <a href="/moban/index.php/Home/Vip/index">更多></a>
                        </div>
                        <div class="goods_right_ul clearfix">
                            <ul>
                                <?php foreach($tjGoods as $v):?>
                                <li>
                                    <a href="#/moban/index.php/Home/Vip/content/id/<?php echo ($v['id']); ?>" target="_blank"><?php echo ($v['goods_name']); ?></a>
                                    <span><?php echo date('m-d',$v['goods_time'])?></span>
                                </li>
                                <?php endforeach;?>
                            </ul>
                        </div>

                    </div>
                    <div class="goods_right_box">
                        <div class="goods_right_box_top">
                            <h1>标签云</h1>
                            <span>/Tag</span>
                            <a href="/moban/index.php/Home/Vip">更多></a>
                        </div>
                        <div class="goods_right_a clearfix">
                            <?php foreach($tabs as $v): $filter=$v['id'].'-0-0-0-0-0'; ?>
                            <a target="_blank" href="<?php echo U('Vip/index',['filter'=>$filter])?>"><?php echo ($v['attr_value']); ?></a>
                            <?php endforeach;?>
                        </div>

                    </div>
                    <div class="goods_right_box">
                        <div class="goods_right_box_top">
                            <h1>最新模板</h1>
                            <span>/New</span>
                            <a href="/moban/index.php/Home/Vip/index">更多></a>
                        </div>
                        <div class="goods_right_ul clearfix">
                            <ul>
                                <?php foreach($newGoods as $v):?>
                                <li>
                                    <a href="#/moban/index.php/Home/Vip/content/id/<?php echo ($v['id']); ?>" target="_blank"><?php echo ($v['goods_name']); ?></a>
                                    <span><?php echo date('m-d',$v['goods_time'])?></span>
                                </li>
                                <?php endforeach;?>
                            </ul>
                        </div>

                    </div>
                </div>
                <!--主体右边结束-->
            </div>
            <!--模板内容主体结束-->

        </div>
    </div>
    <script>
        $('.demo ').mouseover(function () {
            var div = $('#qrcode_box');
            div.css({'display': 'block'});
            $(this).mouseout(function () {
                div.css({'display': 'none'});
            });
        });

        $(function() {
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

        });
        //点击收藏功能
        function getCollect(o){
            var i=$(o).find('.like_remove');
            var classN=i.attr('class');
            var goods_id=$('input[name=goods_id]').val();
            $.ajax({
                type:'post',
                url:'/moban/index.php/Home/GoodsStore/addStore',
                data:{
                    goods_id:goods_id,
                },
                success:function(data){
                   if(data==0){
                       i.removeClass('like_status');
                   }else{
                       i.addClass('like_status');
                   }
                }
            });
        }
        //下载资料功能
        function downloadZipBox(){
            var viptype=$('input[name=viptype]').val();
            var goods_jbin=$('input[name=jbin]').val();
            var goods_id=$('input[name=goods_id]').val();
            $.ajax({
                type:'post',
                url:'/moban/index.php/Home/Vip/getLoad',
                data:{
                    viptype:viptype,
                    goods_jbin:goods_jbin,
                    goods_id:goods_id,
                },
                success:function(data){
                    if(data==0){
                        alert('已有下载过，不需要重新下载');
                    }
                    if(data==1){
                        alert('会员下载权限');
                    }
                    if(data==4){
                        alert('金币购买下载，扣除350金币');
                    }
                    if(data==3){
                        alert('不是会员，也没有金币');
                    }
                }
            });


        }
/*生成二维码*/
    $('#qrcode').qrcode({
        render: "canvas", //也可以替换为table
        width: 180,
        height: 180,
        text: "<?php echo ($goodsInfo['code_url']); ?>"
    });

    </script>
    <?php print_r($_SESSION['liul'])?>

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