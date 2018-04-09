<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        $this->getCates();
        $this->checkCookies();
        $attrter=M('attrter');
        $cates=M('cate')->select();
        $attrters=$attrter->where(array('attr_id'=>5))->select();
        $attrteres=$attrter->where(array('attr_id'=>array('IN','5,6,7,8,9')))->select();
        //首页轮播图片处理
        $luns=M('lun')->where(array('lun_lock'=>1))->find();
        $luns_photos=explode(',',$luns['lun_photos']);
        //首页轮播区文章
        $newGoods=M('goods')->limit(12)->select();
        $this->assign(array(
            'cates'=>$cates,
            'attrters'=>$attrters,
            'attrteres'=>$attrteres,
            'luns_photos'=>$luns_photos,
            'newGoods'=>$newGoods,
        ));
        $this->display();
    }




}