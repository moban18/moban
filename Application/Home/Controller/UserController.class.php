<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends CommonController {
    public function index(){
        $this->checkLogin();
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

    public function logout(){
        session('userid',null);
        session('username',null);
        $this->redirect('Login/index');
    }

    public function myorder(){
        $this->getCates();
        $ac=$this->get_fun();
        $this->getUser();
        $this->assign(array(
            'ac'=>$ac,
        ));
        $this->display();
    }
    public function ziliao(){
        $this->checkLogin();
        $user=D('user');
        $users=$user->where(array('id'=>$_SESSION['userid']))->find();
        $oldPassword=$users['user_password'];
        if(IS_POST){
            $verifly=I('verifly');
            if($this->check_verify($verifly)){
                $password1=I('password1');
                $password2=I('password2');
                if($password1==$password2){
                    $password=md5(I('password'));
                    if($password){
                        if($password==$oldPassword){
                            $data=array(
                                'id'=>$_SESSION['userid'],
                                'user_nick'=>I('nick_name'),
                                'user_password'=>md5(I('password1')),
                            );
                            if($user->save($data)){
                                $this->success('修改资料成功',U('User/ziliao'));
                            }else{
                                $this->error($user->getError());
                            }
                        }else{
                            $this->error('原密码不正确',U('User/ziliao'));
                        }
                    }else{
                        $this->error('原密码不能为空',U('User/ziliao'));
                    }

                }else{
                    $this->error('新密码与确认密码不一至',U('User/ziliao'));
                }

            }else{
                $this->error('验证码错误',U('User/ziliao'));
            }

        }else{
            $this->getCates();
            $ac=$this->get_fun();
            $this->getUser();
            $this->assign(array(
                'ac'=>$ac,
            ));
            $this->display();
        }

    }
    public function tx(){
        $this->checkLogin();
        $user=D('user');
        $users=$user->where(array('id'=>$_SESSION['userid']))->find();
        $oldTx=$users['user_photo'];
        if(IS_POST){
            if($_FILES['file']['tmp_name']){
                $upload = new \Think\Upload();
                $upload->maxSize   =     3145728 ;//
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');
                $upload->rootPath  =      './';
                $upload->savePath  =      './Public/Uploads/';
                $info   =   $upload->upload();
                $newTx=$info['file']['savepath'].$info['file']['savename'];
                $data['user_photo']=$newTx;
                if($user->where(array('id'=>$_SESSION['userid']))->save($data)){
                    unlink($oldTx);
                    $this->success('修改头像成功',U('User/tx'));
                }else{
                    $this->error('上传失败');
                }
            }
        }else{
            $this->getCates();
            $ac=$this->get_fun();
            $this->getUser();
            $this->assign(array(
                'ac'=>$ac,
            ));
            $this->display();
        }


    }
    public function buy(){
        $this->checkLogin();
        $this->getCates();
        $this->getUser();
        $ac=$this->get_fun();
        $vips=M('vip')->select();
        $jbins=M('jbin')->select();
        $this->assign(array(
            'ac'=>$ac,
            'vips'=>$vips,
            'jbins'=>$jbins,
        ));
        $this->display();
    }



    public function operation(){
        $this->checkLogin();
        $this->getCates();
        $this->getUser();
        $ac=$this->get_fun();
        $buy=M('buy');
        $count      = $buy->where($where)->count();
        $Page       = new \Think\Page($count,3);
        $Page -> setConfig('theme','共%TOTAL_PAGE%页/ %HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $show       = $Page->show();
        $buys=$buy->alias('a')->field('a.id,a.buy_id,a.user_id,a.buy_time,a.buy_success,a.vip_id,a.jbin_id,b.vip_name,c.jbin_type')->join('LEFT JOIN moban_vip b ON a.vip_id=b.id')->join('LEFT JOIN moban_jbin c ON a.jbin_id=c.id')->where(array('a.user_id'=>$_SESSION['userid']))->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign(array(
            'ac'=>$ac,
            'buys'=>$buys,
            'page'=>$show
        ));
        $this->display();
    }



//个人中心，修改资料验证码
    public function verifly_img(){
        $config  =    array(
            'fontSize'    =>    14,    // 验证码字体大小
            'length'      =>    4,     // 验证码位数
            'imageH'    =>    28, // 关闭验证码杂点
            'imageW'    =>    90, // 关闭验证码杂点
            'useCurve'  =>  false,            // 是否画混淆曲线
            'useNoise'  =>  false,            // 是否添加杂点
            'reset'     =>  false,           // 验证成功后是否重置
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