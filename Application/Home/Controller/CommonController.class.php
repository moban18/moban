<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {

    public function getCates(){
        $cate=M('cate');
        $cates=$cate->where(array('parent_id'=>0))->select();
        $this->assign('cates',$cates);
    }
    //检查是否为登陆
    public function checkLogin()
    {
        if(!$_SESSION['userid']){
            $url=U('Home/Login/index');
            header('location:'.$url);
        }
    }
    //检查是否存在COOKIES
    public function checkCookies(){
        $cookiess=cookie('moban18');
        if($cookiess){
            $newCookiess=encry($cookiess,1);
            $arr=explode('|',$newCookiess);
            $userid=$arr[0];
            $username=$arr[1];
            if($userid && $username){
                $users=M('user')->where(array('id'=>$userid))->find();
                if($users){
                    if($users['user_email'] == $username){
                        session('userid',$users['id']);
                        session('username',$users['user_email']);
                        $cok=$users['id'].'|'.$users['user_email'];
                        $cookiess=encry($cok);
                        cookie('moban18',$cookiess,3600*24*15);
                        return true;
                    }else{
                        return false;
                    }
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }else{
            return false;
        }

    }
    //前台会员中心左则，获取方法结构以达到，自动选择
    public function get_fun()
    {
        return $ac=ACTION_NAME;
    }
    //前台会员中心左则，获取方法结构以达到，自动选择
    public function getAc(){
        return CONTROLLER_NAME;
    }


    //前台会员中心，取得用户数据
    public function getUser()
    {
        $user=D('user');
        $users=$user->where(array('a.id'=>$_SESSION['userid']))->alias('a')->field('a.id,a.user_email,a.user_openid,a.user_nick,a.user_points,a.user_jbin,a.user_photo,a.log_time,a.vipover_time,b.vip_name')->join('LEFT JOIN moban_vip b ON a.user_viptype=b.id')->find();
        $this->assign(array(
            'users'=>$users,
        ));
    }
    //取得客户IP地区
    public function getLocation()
    {
        $ipContent  = file_get_contents("http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js");
        $jsonData = explode("=",$ipContent);
        $jsonAddress = substr($jsonData[1], 0, -1);
        $ip_info=json_decode($jsonAddress);
        return $ip_info;
    }


}