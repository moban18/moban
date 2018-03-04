<?php
namespace Home\Controller;
use Think\Controller;
class RegistController extends CommonController{

    public function index(){

        $this->getCates();
        $this->display();
    }

    //注册并写数据到数据库
    public function regist()
    {
        $user=D('user');
        if (IS_AJAX) {
            $data = array(
                'user_email' => htmlspecialchars(I('email')),
                'user_nick' => htmlspecialchars(I('username')),
                'user_password' => md5(I('password')),
                'verify' => I('verify'),
                'reg_time' => time(),
                'log_time' => time(),
                'log_num' => 1,
                'user_ip' => ip2long(get_client_ip()),
            );
            if ($this->check_verify($data['verify'])) {
                if (!$info=$user->where(array('user_email'=>$data['user_email']))->find()) {
                    if ($user->add($data)) {
                        $info=array(
                            'num'=>1,
                            'url'=>U('Member/index'),
                            'suc'=>'注册成功',
                        );
                        echo json_encode($info);// 1、表示注册成功；
                    } else {
                        $info=array(
                            'num'=>2,
                            'error'=>'注册失败',
                        );
                        echo json_encode($info); //2、表示添加失败,Email或者已经存在；
                    }
                } else {
                    $info=array(
                        'num'=>3,
                        'error'=>'帐号已经存在',
                    );
                    echo json_encode($info);//3、表示非常操作；
                }
            } else {
                $info=array(
                    'num'=>4,
                    'error'=>'验证码错误',
                );
                echo json_encode($info);//4，表示验证码错误;
            }

        }
    }

//登陆页验证码
    public function veifiy_img(){
        $config  =    array(
            'fontSize'    =>    15,    // 验证码字体大小
            'length'      =>    4,     // 验证码位数
            'imageH'    =>    30, // 关闭验证码杂点
            'imageW'    =>    110, // 关闭验证码杂点
            'useCurve'  =>  false,            // 是否画混淆曲线
            'useNoise'  =>  false,            // 是否添加杂点
            'reset'     =>  true,           // 验证成功后是否重置
            'bg'        =>  array(87, 194, 242),  // 背景颜色
        );

        $Verify = new \Think\Verify($config );
        $Verify->entry();
    }

//验证 验证证是否正确。
    function check_verify($code, $id = '')
    {
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }



}