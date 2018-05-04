<?php
namespace Home\Controller;
use Think\Controller;
class GoodsStoreController extends CommonController {

    //处理商品内容页点击收藏功能与AjaX数据交互开始
    public function addStore (){
        $this->checkLogin();
        $this->checkCookies();
        $user_id=$_SESSION['userid'];
        $store=D('GoodsStore');
        if(IS_AJAX){
            $data=array(
                'user_id'=>$user_id,
                'goods_id'=>I('goods_id')
            );
            $info=$store->where(array('user_id'=>$user_id))->find();
             if($info){
                 $store->delete($info['id']);
                 echo 0;//去收藏
             }else{
                 $store->add($data);
                 echo 1;//加收藏
             }
        }
    }
    public function delStore(){

    }

}