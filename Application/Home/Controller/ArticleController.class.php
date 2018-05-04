<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends CommonController {
    public function index(){
        $this->getCates();
        $cates=M('cate')->select();
        $this->assign(array(
            'cates'=>$cates,
        ));
        $this->display();
    }




}