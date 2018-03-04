<?php
namespace Home\Controller;
use Think\Controller;
class MemberController extends CommonController {




    public function index(){
        $this->getNavs();
       $this->display();
    }





}