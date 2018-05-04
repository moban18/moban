<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        $this->getCates();
        $ac=$this->getAc();
        $this->checkCookies();
        $goods=M('goods');
        $attrter=M('attrter');
        $attrters=$attrter->where(array('attr_id'=>5))->select();
        $attrteres=$attrter->where(array('attr_id'=>array('IN','5,6,7,8,9')))->select();
        //首页轮播图片处理
        $luns=M('lun')->where(array('lun_lock'=>1))->find();
        $luns['lun_photos']=explode(',',$luns['lun_photos']);
        $goods_links=explode(',',$luns['goods_links']);
        foreach ($luns['lun_photos'] as $k=>$v) {
            $lun_arr[$k]['links']=$v;
            $lun_arr[$k]['goods_id']=$goods_links[$k];
        }
        $newLuns=$this->lun_get_cateid($lun_arr);

        //首页轮播区文章
        $newGoods=$goods->field('a.id,a.goods_name,b.cate_url')->alias('a')->join('LEFT JOIN moban_cate b ON a.cate_id=b.id')->limit(12)->order('goods_time Desc')->select();
        //首页VIP专区的内容显示
            //1\图片展示区
        $vipGoods=$goods->where(array('cate_id'=>1))->field('a.id,a.goods_name,a.godds_233_160,b.cate_url')->alias('a')->join('LEFT JOIN moban_cate b ON a.cate_id=b.id')->limit(18)->order('goods_time Desc')->select();
        $vipGoodss=$goods->where(array(array('cate_id'=>1),array('goods_tuijian'=>1)))->field('a.id,a.goods_name,a.goods_time,b.cate_url')->alias('a')->join('LEFT JOIN moban_cate b ON a.cate_id=b.id')->limit(22)->order('goods_time Desc')->select();
        //首页终生会员区的内容显示；
        $svipGoods=$goods->where(array('cate_id'=>2))->field('a.id,a.goods_name,a.godds_233_160,b.cate_url')->alias('a')->join('LEFT JOIN moban_cate b ON a.cate_id=b.id')->limit(18)->order('goods_time Desc')->select();
        $svipGoodss=$goods->where(array(array('cate_id'=>2),array('goods_tuijian'=>1)))->field('a.id,a.goods_name,a.goods_time,b.cate_url')->alias('a')->join('LEFT JOIN moban_cate b ON a.cate_id=b.id')->limit(22)->order('goods_time Desc')->select();
        //首页视频图文区内容开始
        $ar_cates=M('cate')->field('id,cate_name,cate_url')->where(array('parent_id'=>9))->select();
        $article_view=M('articleView');
        $articles_center=$article_view->order('article_time Desc')->select();
         //栏目php编程文章列表
        $jsArticles=$article_view->where(array('cate_id'=>10))->limit(5)->order('article_time Desc')->select();
        $phpArticles=$article_view->where(array('cate_id'=>11))->limit(5)->order('article_time Desc')->select();
        $cssArticles=$article_view->where(array('cate_id'=>14))->limit(5)->order('article_time Desc')->select();
        //首页视频图文区右边文章列表开始
        $rightArticles=$article_view->order('article_comment Desc')->limit(10)->select();
        /*print_r($rightArticles);die;*/
        //首页视频图文区右边文章列表结束
        /*print_r($articles);die;*/
        //首页视频图文区内容结束
        $this->assign(array(
            'ac'=>$ac,
            'attrters'=>$attrters,
            'attrteres'=>$attrteres,
            'newLuns'=>$newLuns,
            'newGoods'=>$newGoods,
            'vipGoods'=>$vipGoods,
            'vipGoodss'=>$vipGoodss,
            'svipGoods'=>$svipGoods,
            'svipGoodss'=>$svipGoodss,
            'ar_cates'=>$ar_cates,
            'articles_center'=>$articles_center,
            'jsArticles'=>$jsArticles,
            'phpArticles'=>$phpArticles,
            'cssArticles'=>$cssArticles,
            'rightArticles'=>$rightArticles,



        ));
        $this->display();
    }

    //首页搜索功能
    public function search(){
        $cate_id=I('cate_id');
        $keywords=I('keywords');
        if($cate_id!=0){
            $where['cate_id']=$cate_id;
        }
        if($keywords){
            $where['goods_name']=array('like','%'.$keywords.'%');
        }
        $page_nums=5;//每页显示的数量 ；
        $goodsView1=M('goodsView1');
        $count      = $goodsView1->where($where)->count();//数据的总数；
        if($p){
            $yem=$p;
            if($yem>$count){
                $yem=$p;
            }
        }else{
            $yem=1;
        }
        $goodres=$goodsView1->where($where)->limit($page_num*($yem-1),$page_num)->select();
        /*print_r($goodres);die;*/

        $pages=ceil($count/$page_nums);//计算一共有多少页数据；




        $this->getCates();
        $ac=$this->getAc();
        $this->assign(array(
            'ac'=>$ac,
            'goodres'=>$goodres,
            'count'=>$count,
            'pages'=>$pages,
        ));
        $this->display();

    }

//轮播图片，处理关联的商品id，并取出应该的cate_id中的URL，
    public function lun_get_cateid($lun_arr){
            if($lun_arr){
                $goods=M('goods');
                $cate=M('cate');
                foreach ($lun_arr as $k =>$v) {
                    $good=$goods->field('cate_id')->where(array('id'=>$v['goods_id']))->find();
                    $cate_url=$cate->field('cate_url')->where(array('id'=>$good['cate_id']))->find();
                    $lun_arr[$k]['cate_url']=$cate_url['cate_url'];
                }
                return $lun_arr;
            }
    }


}