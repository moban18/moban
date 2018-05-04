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
                        <form name="" method="get" action="/moban/index.php/Home/Index/search" target="_blank">
                            <!--<input name="kwtype" value="0" type="hidden">
                            <input name="typeid" value="1" type="hidden">-->
                            <div class="s1">
                                <input class="keywords" name="keywords" id="q" title="请输入关键字" value="模板18搜索..." onfocus="if(this.value=='模板18搜索...'){this.value='';}" onblur="if(this.value==''){this.value='模板18搜索...';}" maxlength="27" type="text">
                            </div>
                            <div class="s2">
                                <select name="cate_id" class="search-option" id="typeid">
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
    
    <div class="box1">
        <div class="box1_left">
            <div class="box1_left_box1">
                <h2>精美模板导航</h2>
                <div class="box1_left_mid">
                    <a href="/moban/index.php/Home/Vip/index" class="pc_phone">PC+手机版</a>
                    <a href="/moban/index.php/Home/Vip/index" class="pc">PC版</a>
                    <a href="/moban/index.php/Home/Vip/index/filter/0-0-17-0-0-0.html" class="phone">手机版</a>

                </div>
                <div class="box1_left_mid2">
                    <div class="box1_mid2_top">
                        <img src="/moban/Public/images/jz-1.png"/>
                        <h3>行业</h3>
                    </div>
                    <div class="box1_submits">
                        <a href="/moban/index.php/Home/Vip/index">全部</a>
                        <?php foreach($attrters as $k=>$v): $filter=$v['id']; if($k<11): ?>
                        <a href='/moban/index.php/Home/Vip/index/filter/<?php echo $filter;?>-0-0-0-0-0.html'><?php echo $v['attr_value'];?></a>
                        <?php endif;endforeach;?>

                    </div>

                </div>
                <div class="box1_bottom">
                    <p>全部行业</p>
                    <div class="shanjx">
                        <img src="/moban/Public/images/sjx.png"/>

                    </div>
                </div>
                    <div class="alls">
                            <a href="/moban/index.php/Home/Vip/index" >全部</a>
                            <?php foreach($attrteres as $k=>$v): $filter=$v['id']; ?>
                            <a href="/moban/index.php/Home/Vip/index/filter/<?php echo $filter;?>-0-0-0-0-0.html"><?php echo $v['attr_value'];?></a>
                            <?php endforeach;?>
                            <div class="clear"></div>
                    </div>
            </div>
        </div>

        <div class="box1_right">
            <!--轮播图片区-->
            <div class="box1_right_top">
                <div class="box1_right_imgs">
                    <?php foreach($newLuns as $v):?>
                    <a href="/moban/index.php/Home/<?php echo ($v['cate_url']); ?>/content/id/<?php echo ($v['goods_id']); ?>" class="ig" target="_blank"><img src="/moban/<?php echo ($v['links']); ?>"/></a>
                    <?php endforeach;?>
                </div>
                <ul id="tabs">
                    <?php for($i=0;$i<count($newLuns);$i++):?>
                    <li class="tab"><?php echo $i;?></li>
                    <?php endfor;?>
                </ul>
            </div>
            <!--轮播图片区结束-->
            <!--轮播区文章区开始-->
            <div class="box1_right_bottom">
                <ul id="box1_titles">
                    <?php foreach($newGoods as $v):?>
                    <li><a href="/moban/index.php/Home/<?php echo ($v['cate_url']); ?>/content/id/<?php echo ($v['id']); ?>"  target="_blank" alt="<?php echo mb_substr($v['goods_name'],0,16,'utf-8');?>"><?php echo ($v['goods_name']); ?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>
            <!--轮播区文章区结束-->
        </div>
    </div>

    <!--首页中间VIP模板展示开始-->
        <div class="box2 muban" id="index_1">
            <div class="mubantitle"> <span class="indexTitleT"><a href="/moban/index.php/Home/Vip/index">VIP整站模板</a></span> <span class="f12"></span>
                <div class="itmore">
                    <a href="/moban/index.php/Home/Vip/index">更多模板</a> </div>
            </div>

            <div class="index3">
                <!--首页中间VIP模板左边开始-->
                <div class="index3_left">
                    <div class="index3_box">
                        <div class="article_recommon">
                            <ul class="godds_recommon no_flash">
                                <?php foreach($vipGoods as $k=>$v):?>
                                    <?php if($k<6):?>
                                <li>
                                    <a href="/moban/index.php/Home/<?php echo ($v['cate_url']); ?>/content/id/<?php echo ($v['id']); ?>" title="<?php echo ($v['goods_name']); ?>" target="_blank">
                                        <img src="/moban/<?php echo ($v['godds_233_160']); ?>">
                                        <span><?php echo ($v['goods_name']); ?></span>
                                    </a>
                                </li>

                                <?php endif; endforeach;?>
                            </ul>
                        </div>
                        <div class="box1_right_bottom  ">
                            <ul id="box1_titles">
                                <?php foreach($vipGoods as $k=>$v):?>
                                    <?php if($k>6):?>
                                <li><a href="/moban/index.php/Home/<?php echo ($v['cate_url']); ?>/content/id/<?php echo ($v['id']); ?>" title="<?php echo ($v['goods_name']); ?>" target="_blank"><?php echo ($v['goods_name']); ?></a></li>
                                <?php endif; endforeach;?>

                            </ul>
                        </div>

                    </div>


                </div>
                <!--首页中间VIP模板右边开始-->
                <div class="index3_right">
                    <div class="goods_right_box">
                        <div class="goods_right_box_top">
                            <h1>推荐模板</h1>
                            <span>/Template</span>
                            <a href="###">更多&gt;</a>
                        </div>
                        <!--右边推荐模板22个-->
                        <div class="goods_right_ul clearfix ">
                            <ul>
                                <?php foreach($vipGoodss as $v):?>
                                <li>
                                    <a href="/moban/index.php/Home/<?php echo ($v['cate_url']); ?>/content/id/<?php echo ($v['id']); ?>"><?php echo ($v['goods_name']); ?>}</a>
                                    <span><?php echo date('m-d',$v['goods_time']);?></span>
                                </li>
                                <?php endforeach;?>


                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>

        </div>
    <!--首页中间VIP模板展示结束-->
    <!--首页中间终生会员模板展示开始-->
    <div class="box2 muban" id="index_1">
        <div class="mubantitle"> <span class="indexTitleT"><a href="/moban/index.php/Home/Svip/index" title="生会员模板">终生会员模板</a></span> <span class="f12"></span>
            <div class="itmore">
                <a href="/moban/index.php/Home/Svip/index">更多模板</a> </div>
        </div>
        <div class="index3">
            <!--首页中间VIP模板左边开始-->
            <div class="index3_left">
                <div class="index3_box">
                    <div class="article_recommon">
                        <ul class="godds_recommon no_flash">
                          <?php foreach($svipGoods as $k => $v):?>
                            <?php if($k<6):?>

                            <li>
                                <a href="/moban/index.php/Home/<?php echo ($v['cate_url']); ?>/content/id/<?php echo ($v['id']); ?>" title="<?php echo ($v['goods_name']); ?>">
                                    <img src="/moban/<?php echo ($v['godds_233_160']); ?>">
                                    <span><?php echo ($v['goods_name']); ?></span>
                                </a>
                            </li>
                        <?php endif; endforeach;?>

                        </ul>
                    </div>
                    <div class="box1_right_bottom  ">
                        <ul id="box1_titles">
                            <?php foreach($svipGoods as $k => $v):?>
                             <?php if($k>6):?>
                            <li><a href="/moban/index.php/Home/<?php echo ($v['cate_url']); ?>/content/id/<?php echo ($v['id']); ?>" alt="<?php echo ($v['goods_name']); ?>"><?php echo ($v['goods_name']); ?></a></li>
                            <?php endif; endforeach;?>
                        </ul>
                    </div>

                </div>


            </div>
            <!--首页中间VIP模板右边开始-->
            <div class="index3_right">
                <div class="goods_right_box">
                    <div class="goods_right_box_top">
                        <h1>推荐模板</h1>
                        <span>/Template</span>
                        <a href="/moban/index.php/Home/Svip/index">更多&gt;</a>
                    </div>
                    <!--右边推荐模板22个-->
                    <div class="goods_right_ul clearfix ">
                        <ul>
                            <?php foreach($svipGoodss as $v):?>
                            <li>
                                <a href="/moban/index.php/Home/<?php echo ($v['cate_url']); ?>/content/id/<?php echo ($v['id']); ?>" title="$v['goods_name']}"><?php echo ($v['goods_name']); ?></a>
                                <span><?php echo date('m-d',$v['goods_time']);?></span>
                            </li>
                            <?php endforeach;?>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>

    </div>
    <!--首页中间终生会员模板展示结束-->
    <!--视频图文模板展示开始-->
        <div class="box3 edu" id="index_3">
            <div class="edutitle"> <span class="indexTitleT">视频·图文教程</span> <span class="f12">不知从哪里开始，不知怎学，那就看看大伙咋弄弄得！</span>
                <div class="itmore">
                    <?php foreach($ar_cates as $k=>$v): if($k<=3): ?>
                    <a href="/moban/index.php/Home/Study/index/cate/<?php echo ($v['id']); ?>"><?php echo ($v['cate_name']); ?></a>　/　
                    <?php endif; endforeach;?>
                    <a href="/moban/index.php/Home/Study/index" target="_top">更多教程</a>
                </div>
            </div>
            <div class="edubox">

                <div class="eduboxl">
                    <div class="bankuai1">
                        <!-- 焦点图代码 开始 -->
                        <div id="fsD1" class="focus">
                            <!--图片开始-->
                            <div id="D1pic1" class="fPic">
                                <div class="fcon" style="display: none;"> <a target="_top" href="http://www.dede58.com/a/dedeaz/1583.html"><img class="lazy" data-original="http://www.dede58.com/uploads/allimg/141224/153R12114-0.jpg" src="/moban/Public/images/loading.gif" style="opacity: 1;"></a> <span class="shadow"><a target="_top" href="http://www.dede58.com/a/dedeaz/1583.html">织梦CMS整站源码通用安装教程</a></span> </div>

                                <div class="fcon" style="display: block;"> <a target="_top" href="http://www.dede58.com/plus/view.php?aid=4218"><img src="/moban/Public/images/1-1f6221j9220-l.jpg" style="opacity: 1;"></a> <span class="shadow"><a target="_top" href="http://www.dede58.com/plus/view.php?aid=4218">织梦cms的安全设置专题</a></span>
                                </div>
                                <div class="fcon" style="display: none;"> <a target="_top" href="http://www.dede58.com/a/dedeaz/4007.html"><img src="/moban/Public/images/1-1f51g640502m.png" style="opacity: 1;"></a> <span class="shadow"><a target="_top" href="http://www.dede58.com/a/dedeaz/4007.html">织梦安装入门视频教程（织梦58莹莹主讲）</a></span>
                                </div>
                            </div>
                            <!--图片结束-->

                            <div class="fbg">
                                <div class="D1fBt" id="D1fBt" style="display: none;"> <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>1</i></a><a href="javascript:void(0)" hidefocus="true" target="_self" class="current"><i>2</i></a> </div>
                            </div>
                            <span class="prev"></span> <span class="next"></span> </div>

                        <!-- 代码 结束 -->
                        <div class="tbtj">
                            <?php foreach($articles_center as $k=>$v): if($k==0): ?>
                            <div class="wenzhangtxt">
                                <h1><a href="/moban/index.php/Home/Study/content/id/<?php echo ($v['id']); ?>" title="$v['article_title']}" target="_blank"><?php echo mb_substr($v['article_title'],0,15,'utf-8')?></a></h1>
                                <p><?php echo mb_substr($v['article_dec'],0,150,'utf-8')?>... <a href="/moban/index.php/Home/Study/content/id/<?php echo ($v['id']); ?>" target="_blank">[详细]</a></p>
                            </div>
                            <?php endif; endforeach;?>
                            <div class="wenzhanglist">
                                <?php foreach($articles_center as $k=>$v): if($k>0 && $k<=7): ?>
                                <li>
                                    <span><?php echo date('m-d',$v['article_time'])?></span>
                                    [<a href="/moban/index.php/Home/Study/index/cate/<?php echo ($v['cate_id']); ?>" target="_blank"><b><?php echo ($v['cate_name']); ?></b></a>]
                                    <a href="/moban/index.php/Home/Study/content/id/<?php echo ($v['id']); ?>" title="$v['article_title']}" target="_blank"><?php echo mb_substr($v['article_title'],0,24,'utf-8')?></a>
                                </li>
                                <?php endif; endforeach;?>
                            </div>
                        </div>
                    </div>
                    <div class="bankuai2">
                            <div class="learn-list-item">
                                <div class="learn-list-title x-left">网络编程</div>
                                <ul>
                                    <?php foreach($jsArticles as $v):?>
                                    <li><a href="/moban/index.php/Home/Study/content/id/<?php echo ($v['id']); ?>" title="<?php echo ($v['article_title']); ?>" target="_blank"><?php echo mb_substr($v['article_title'],0,22,'utf-8')?></a></li>
                                    <?php endforeach;?>
                                </ul>
                            </div>

                            <div class="learn-list-item">
                            <div class="learn-list-title x-left">网页制作</div>

                                <ul>
                                    <?php foreach($phpArticles as $v):?>
                                    <li><a href="/moban/index.php/Home/Study/content/id/<?php echo ($v['id']); ?>" title="<?php echo ($v['article_title']); ?>" target="_blank"><?php echo mb_substr($v['article_title'],0,22,'utf-8')?></a></li>
                                    <?php endforeach;?>
                                </ul>
                        </div>
                            <div class="learn-list-item">
                            <div class="learn-list-title x-left">网页编程</div>
                                <ul>
                                    <?php foreach($cssArticles as $v):?>
                                    <li><a href="/moban/index.php/Home/Study/content/id/<?php echo ($v['id']); ?>" title="<?php echo ($v['article_title']); ?>" target="_blank"><?php echo mb_substr($v['article_title'],0,22,'utf-8')?></a></li>
                                    <?php endforeach;?>
                                </ul>
                        </div>
                 </div>
                </div>
                <div class="bankuai3">
                    <ul class="rank-list">
                        <?php foreach($rightArticles as $k=>$v): if($k<=2): ?>
                        <li class="rank-top"><a href="/moban/index.php/Home/Study/content/id/<?php echo ($v['id']); ?>" class="x-image-link rank-img" rel="nofollow" target="_blank"><s><b><?php echo $k+1;?></b></s><img data-original="<?php echo ($v['article_80_60']); ?>" src="/moban/<?php echo ($v['article_80_60']); ?>" class="x-image-xsmall lazy" style="display: inline;"></a>
                            <h3><a href="/moban/index.php/Home/Study/content/id/<?php echo ($v['id']); ?>"><?php echo mb_substr($v['article_title'],0,18,'utf-8')?></a></h3>
                            <p>栏目：<a href="/moban/index.php/Home/Study/index/cate/<?php echo ($v['cate_id']); ?>" class="x-hint" target="_blank"> <?php echo ($v['cate_name']); ?></a> </p>
                            <p class="x-hint">点击数：<?php echo ($v['article_comment']); ?></p>
                        </li>
                        <?php else:?>
                        <li><i><b><?php echo $k+1;?></b></i><a href="/moban/index.php/Home/Study/content/id/<?php echo ($v['id']); ?>" target="_blank"><?php echo mb_substr($v['article_title'],0,22,'utf-8')?></a></li>
                        <?php endif; endforeach;?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="index5">
            <div id="demoContent">
                <div class="slideTxtBox3">
                    <div class="hd">
                        <ul>
                            <li class="on"><a href="http://www.dede58.com/">友情链接</a></li>
                            <li>模板标签</li>
                        </ul>
                    </div>
                    <div class="bd">
                        <ul class="infoList link">
                            <li><a href="http://www.zhangguizi.com/" target="_top">掌柜子</a> </li><li><a href="http://www.dede58.com/a/dedecode/" target="_top">织梦精品源码</a> </li><li><a href="http://www.dede58.com/a/free/" target="_top">完整织梦企业模板</a> </li><li><a href="http://www.sucai58.com/" target="_top">素材58</a> </li><li><a href="http://www.aitecms.com/" target="_top">企业网站模板</a> </li><li><a href="http://www.dedecms.com/" target="_top">织梦官方网站</a> </li><li><a href="http://down.admin5.com/" target="_top">A5下载</a> </li><li><a href="http://www.xazwz.com/" target="_top">西安网站建设</a> </li><li><a href="http://www.mubanxiaowu.com/" target="_top">织梦企业模板</a> </li><li><a href="http://www.genban.org/" target="_top">织梦模板</a> </li><li><a href="http://www.xuejiqiao.com/" target="_top">学技巧</a> </li><li><a href="http://www.luidea.com/" target="_top">织梦企业模板</a> </li>
                        </ul>

                        <ul class="infoList link" style="display: none;">
                            <li><a href="http://www.dede58.com/moban/xuexiao.html" title="学校">学校</a> </li>
                            <li><a href="http://www.dede58.com/moban/fuzhuang.html" title="服装">服装</a> </li>
                            <li><a href="http://www.dede58.com/moban/boke.html" title="博客">博客</a> </li>
                            <li><a href="http://www.dede58.com/moban/sy.html" title="双语">双语</a> </li>
                            <li><a href="http://www.dede58.com/moban/yx.html" title="营销型">营销型</a> </li>
                            <li><a href="http://www.dede58.com/moban/shouji.html" title="手机">手机</a> </li>
                            <li><a href="http://www.dede58.com/moban/xys.html" title="响应式">响应式</a> </li>
                            <li><a href="http://www.dede58.com/moban/wangluojishu.html" title="网络技术">网络技术</a> </li>
                            <li><a href="http://www.dede58.com/moban/dengji_7.html" title="灯具">灯具</a> </li>
                            <li><a href="http://www.dede58.com/moban/jishuboke.html" title="技术博客">技术博客</a> </li>
                            <li><a href="http://www.dede58.com/moban/gerenboke.html" title="个人博客">个人博客</a> </li>
                            <li><a href="http://www.dede58.com/moban/qingjieshebei.html" title="清洁设备">清洁设备</a> </li>
                            <li><a href="http://www.dede58.com/moban/huiyuan_6.html" title="会员中心">会员中心</a> </li>
                            <li><a href="http://www.dede58.com/moban/peijian_6.html" title="零配件">零配件</a> </li>
                            <li><a href="http://www.dede58.com/moban/huoyun_5.html" title="货运">货运</a> </li>
                            <li><a href="http://www.dede58.com/moban/weiishang_4.html" title="微商">微商</a> </li>
                            <li><a href="http://www.dede58.com/moban/duomeiti.html" title="多媒体">多媒体</a> </li>
                            <li><a href="http://www.dede58.com/moban/zimeiti.html" title="自媒体">自媒体</a> </li>
                            <li><a href="http://www.dede58.com/moban/dalisi.html" title="大理石">大理石</a> </li>
                            <li><a href="http://www.dede58.com/moban/jiagong_3.html" title="加工">加工</a> </li>
                            <li><a href="http://www.dede58.com/moban/zhiyetouzi.html" title="投资置业">投资置业</a> </li>
                            <li><a href="http://www.dede58.com/moban/naicha_2.html" title="奶茶">奶茶</a> </li>
                            <li><a href="http://www.dede58.com/moban/xuehui_1.html" title="协会">协会</a> </li>
                            <li><a href="http://www.dede58.com/moban/shiwusuo.html" title="事务所">事务所</a> </li>
                            <li><a href="http://www.dede58.com/moban/yigui_58.html" title="衣柜">衣柜</a> </li>
                            <li><a href="http://www.dede58.com/moban/heise_58.html" title="黑色">黑色</a> </li>
                            <li><a href="http://www.dede58.com/moban/chengse_58.html" title="橙色">橙色</a> </li>
                            <li><a href="http://www.dede58.com/moban/lanse_57.html" title="蓝色">蓝色</a> </li>
                            <li><a href="http://www.dede58.com/moban/hongse_56.html" title="红色">红色</a> </li>
                            <li><a href="http://www.dede58.com/moban/lvse_53.html" title="绿色">绿色</a> </li>
                            <li><a href="http://www.dede58.com/moban/zhineng_55.html" title="智能">智能</a> </li>
                            <li><a href="http://www.dede58.com/moban/zidonghua_54.html" title="自动化">自动化</a> </li>
                            <li><a href="http://www.dede58.com/moban/youxi_53.html" title="油漆">油漆</a> </li>
                            <li><a href="http://www.dede58.com/moban/jiqiren_51.html" title="机器人">机器人</a> </li>
                            <li><a href="http://www.dede58.com/moban/zishiying.html" title="自适应">自适应</a> </li>
                            <li><a href="http://www.dede58.com/moban/yuesao_53.html" title="月嫂">月嫂</a> </li>
                            <li><a href="http://www.dede58.com/moban/zhongyingwen.html" title="中英文">中英文</a> </li>
                            <li><a href="http://www.dede58.com/moban/baojian_53.html" title="保健">保健</a> </li>
                            <li><a href="http://www.dede58.com/moban/shoubiao_52.html" title="手表">手表</a> </li>
                            <li><a href="http://www.dede58.com/moban/dianchi_51.html" title="电池">电池</a> </li>
                            <li><a href="http://www.dede58.com/moban/nengyuan_50.html" title="能源">能源</a> </li>
                            <li><a href="http://www.dede58.com/moban/jiankang_49.html" title="健康">健康</a> </li>
                            <li><a href="http://www.dede58.com/moban/shengwu_48.html" title="生物">生物</a> </li>
                            <li><a href="http://www.dede58.com/moban/jiaocheng_47.html" title="教程">教程</a> </li>
                            <li><a href="http://www.dede58.com/moban/waiyu_46.html" title="外语">外语</a> </li>
                            <li><a href="http://www.dede58.com/moban/yuanxiao_45.html" title="院校">院校</a> </li>
                            <li><a href="http://www.dede58.com/moban/leyuan_44.html" title="乐园">乐园</a> </li>
                            <li><a href="http://www.dede58.com/moban/lihe_43.html" title="礼盒">礼盒</a> </li>
                            <li><a href="http://www.dede58.com/moban/shuishang_42.html" title="水上">水上</a> </li>
                            <li><a href="http://www.dede58.com/moban/nongyao_41.html" title="农药">农药</a> </li>

                            <li><a href="http://www.dede58.com/moban/index.html" title="更多模板" class="tags_more">更多&gt;&gt;</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>




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