<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends CommonController {
    public function index($id){
        $goods=D('goods');
        if($id ){
            $info=$goods->where(array('id'=>$id))->find();
            $goodsInfo=M('GoodsInfo')->where(array('goods_id'=>$info['id']))->find();
            $attrtype=M('attrtype')->where(array('id'=>$info['attrtype_id']))->find();
            //商品内容模板里的正文头部的导航内容开始
            $cateInfo=M('cate')->where(array('id'=>$info['cate_id']))->find();
            $searchs=M('search')->where(array('goods_id'=>$info['id']))->select();
            if($searchs){
                $attr_id=  $searchs[0]['attr_id'];
                $attr=M('attr')->where(array('id'=>$attr_id))->find();
            }
            if($info){
                $this->getCates();
                $cates=M('cate')->select();
                $this->assign(array(
                    'cates'=>$cates,
                    'info'=>$info,
                    'goodsInfo'=>$goodsInfo,
                    'attrtype'=>$attrtype,
                    'cateInfo'=>$cateInfo,
                    'searchs'=>$searchs,
                    'attr'=>$attr,
                ));
                $this->display();
            }else{
                $this->error('非常操作');
            }
        }else{
            return false;
        }


    }




}