<?php
namespace Home\Controller;
use Think\Controller;
class BuyController extends CommonController {

    //购买会员种类
    public function buyVip()
    {
        $this->checkLogin();
        $buy=D('buy');
        if(IS_POST){
            $data=array(
                'user_id'=>$_SESSION['userid'],
                'buy_id'=>$this->getOrderid(),
                'vip_id'=>I('vip_id'),
                'buy_time'=>time()
            );
            if($buy->create($data)){
                if($buy->add($data)){
                    $this->success('购买成功',U('User/index'));
                }else{
                    $this->error('购买会员失败,请联系网站客服',U('User/buy'));
                }

            }else{
                $this->error($buy->getError());
            }
        }else{
            $this->error('非法操作',U('User/buy'));
        }
    }
//购买金币
    public function buyJbin(){
        $this->checkLogin();
        $buy=D('buy');
        if(IS_POST){
            $data=array(
                'user_id'=>$_SESSION['userid'],
                'buy_id'=>$this->getOrderid(),
                'jbin_id'=>I('jbin_id'),
                'buy_time'=>time()
            );
            if($buy->create($data)){
                if($buy->add($data)){
                    $this->success('购买成功',U('User/index'));
                }else{
                    $this->error('购买会员失败,请联系网站客服',U('User/buy'));
                }

            }else{
                $this->error($buy->getError());
            }
        }else{
            $this->error('非法操作',U('User/buy'));
        }
    }
    //  生成时间为基础的订单号
    public function getOrderid(){
        return date('Ymd').date('His');
    }



}