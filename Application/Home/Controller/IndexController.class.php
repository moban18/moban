<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        $this->getCates();
        $this->checkCookies();
        $cates=M('cate')->select();
        $this->assign(array(
            'cates'=>$cates,
        ));
        $this->display();
    }




}