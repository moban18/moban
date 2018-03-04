<?php
namespace Home\Controller;
use Think\Controller;
class VipController extends CommonController {
    public function index(){
        $this->getCates();
        $ac=$this->getAc();
        $attrs=M('attr')->select();
        $this->assign(array(
            'ac'=>$ac,
            'attrs'=>$attrs,
        ));
        $this->display();
    }




}