<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends CommonController{

    public function index(){
        if($this->checkCookies()){
            $this->redirect('User/index');
        }else {
            $this->getCates();
            $this->display();
        }
    }
    //注册并写数据到数据库
    public function login(){
        $user=M('user');
        if(IS_AJAX){
            $data=array(
                'user_email'=>I('email'),
                'user_password'=>md5(I('password')),
                'verify'=>I('verify'),
                'user_ip'=>ip2long(get_client_ip()),
                'log_time'=>time(),
            );
            if($this->check_verify_login($data['verify'])){
                if($users=$user->where(array('user_email'=>$data['user_email']))->find()){
                    if($users['user_password']==$data['user_password']){
                        $where['id']=$users['id'];
                        $user->where($where)->save($data);
                        $user->where($where)->setInc("log_num");
                        session('userid',$users['id']);
                        session('username',$users['user_email']);
                        $cok=$users['id'].'|'.$users['user_email'];
                        $cookiess=encry($cok);
                        cookie('moban18',$cookiess,3600*24*15);
                        $info=array(
                            'num'=>1,
                            'url'=>U('User/index'),
                            'suc'=>'登陆成功',
                        );
                        echo json_encode($info);
                    }else{
                        $info=array(
                            'num'=>2,
                            'error'=>'用户名或密码错误',
                        );
                        echo json_encode($info);
                    }
                }else{
                    $info=array(
                        'num'=>3,
                        'error'=>'没有找到指定用户',
                    );
                    echo json_encode($info);
                }

            }else{
                $info=array(
                    'num'=>4,
                    'error'=>'验证码错误',
                );
                echo json_encode($info);
            }
        }else{
            $info=array(
                'num'=>5,
                'error'=>'非法操作',//不是AJAX提交数据
            );
            echo json_encode($info);
        }
    }


    public function test(){

           $this->checkCookies();
    }

//登陆页验证码
    public function veifiy_img_login(){
        $config  =    array(
            'fontSize'    =>    15,    // 验证码字体大小
            'length'      =>    4,     // 验证码位数
            'imageH'    =>    30, // 关闭验证码杂点
            'imageW'    =>    110, // 关闭验证码杂点
            'useCurve'  =>  false,            // 是否画混淆曲线
            'useNoise'  =>  false,            // 是否添加杂点
            'reset'     =>  false,           // 验证成功后是否重置
            'bg'        =>  array(87, 194, 242),  // 背景颜色
        );
        $Verify = new \Think\Verify($config );
        $Verify->entry();
    }

//验证 验证证是否正确。
    function check_verify_login($code, $id = '')
    {
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }


}