<?php
namespace Home\Controller;
use Think\Controller;
class BuyController extends CommonController {

    public function index(){//订单生成的页面
        if(!I('orderId')){
            $this->error('订单生失败',U('User/index'));
        }
        $this->checkLogin();
        $this->checkCookies();
        $this->getCates();
        $ac=$this->get_fun();
        $this->getUser();
        $location=$this->getLocation();
        $this->assign(array(
            'ac'=>$ac,
            'location'=>$location,
        ));
        $this->display();
    }

    //订单成功生成种类
    public function buyVip()
    {
        $this->checkLogin();
        $buy=D('buy');
        if(IS_POST){
            $data=array(
                'user_id'=>$_SESSION['userid'],
                'buy_id'=>$this->getOrderid(),//随机生成的订单号
                'vip_id'=>I('vip_id'),
                'buy_time'=>time()
            );
            $data['buy_je']=$buy->VipJy($data['vip_id']);//查出对应的会类型金额
            if($buy->create($data)){
                if($buy->add($data)){
                    $this->success('订单生成成功',U('Buy/index',['type'=>1,'orderId'=>$data['buy_id'],'price'=>$data['buy_je']['vip_price'],'vipType'=>$data['buy_je']['vip_type']]));
                }else{
                    $this->error('订单生成失败');
                }
            }else{
                $this->error($buy->getError());
            }







            /*if($buy->create($data)){
                if($buy->add($data)){
                    $time=$buy->vipTime($data['buy_time'],$data['vip_id'],$data['user_id']);//这个计算出对应会员时间长度；
                    $time['id']=$data['user_id'];
                    $user=M('user')->save($time);//修改用户会会员的时间,及到期时间；
                    $this->success('订单成功生成',U('User/index'));
                }else{
                    $this->error('订单成功生成失败,请联系网站客服',U('User/buy'));
                }
            }else{
                $this->error($buy->getError());
            }*/
        }else{
            $this->error('非法操作',U('User/buy'));
        }
    }
    public function test(){
        /*$time1=1527140757;
        $a=1524548757;
        $b=1527658542;
        $time2=strtotime('6 day',$time1);
        /*echo $time1;
        echo $time2;*/
        /*echo date('Y-m-d H:s',$time1);
        echo date('Y-m-d H:s',$a);
        echo date('Y-m-d H:s',$b);*/

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
            $data['buy_je']=$buy->jbNum($data['jbin_id']);
            if($buy->create($data)){
                if($buy->add($data)){
                    $this->success('订单生成成功',U('Buy/index',['type'=>2,'orderId'=>$data['buy_id'],'price'=>$data['buy_je']['jbin_price'],'jbNun'=>$data['buy_je']['jbin_num']]));
                }else{
                    $this->error('订单生成失败');
                }
            }else{
                $this->error($buy->getError());
            }






            /*if($buy->create($data)){
                if($buy->add($data)){
                    $this->success('订单成功生成',U('User/index'));
                }else{
                    $this->error('订单成功生成失败,请联系网站客服',U('User/buy'));
                }

            }else{
                $this->error($buy->getError());
            }*/
        }else{
            $this->error('非法操作',U('User/buy'));
        }
    }
    //  生成时间为基础的订单号
    public function getOrderid(){
        return date('Ymd').date('His');
    }


}