<?php
namespace Home\Model;
use Think\Model;
class BuyModel extends Model {

    //处理购买会员，计算到期时间
    public function vipTime($buyTime,$vip_id,$user_id){
        //判断会员时间是否已经到期;
        $user=M('user')->field('vipover_time')->where(array('id'=>$user_id))->find();
        $oldTime=$user['vipover_time']-time();
        if($oldTime>0){//判断会员还有上一会员时长，所以要从这个时间起再加上会员时长
            $buyTime=$user['vipover_time'];
        }
        //查到出对应的会员种类的时间长度
        $vipTime=M('vip')->field('vip_time')->where(array('id'=>$vip_id))->find();
        $vipLong=$vipTime['vip_time'].' day';
        $lastTime=strtotime($vipLong,$buyTime);//计算出到期时间
        $time['vipbuy_time']=$buyTime;
        $time['vipover_time']=$lastTime;
        return $time;
    }
    //处理会员升级会员类型转金额
    public function VipJy($VipJy){
        if(isset($VipJy)){
            $vip_price=M('vip')->where(array('id'=>$VipJy))->find();
            if($vip_price){
                return $vip_price;
            }else{
                return false;
            }
        }
    }

    //处理会员购买金币类型转数量
    public function jbNum($user_jbin){
        if(isset($user_jbin)){
            $jbin=M('jbin')->where(array('id'=>$user_jbin))->find();
            if($jbin){
                return $jbin;
            }else{
                return false;
            }
        }
    }




}

