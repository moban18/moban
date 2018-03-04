<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends CommonController {

    public function index(){
        $ac=$this->getAc();
        $user=D('user');
        $count      = $user->count();
        $Page       = new \Think\Page($count,15);
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $show       = $Page->show();
        $users=$user->alias('a')->field('a.id,a.user_email,a.user_nick,a.user_ip,a.reg_time,a.log_time,a.log_num,a.user_lock,b.vip_name')->join('LEFT JOIN moban_vip b ON a.user_viptype=b.id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign(
            array(
                'ac'=>$ac,
                'users'=>$users,
                'page'=>$show
            )
        );
        $this->display();
    }

    public function add(){
        $ac=$this->getAc();
        $user=D('user');
        if(IS_POST){
            $data=array(
                'user_email'=>I('user_email'),
                'user_nick'=>I('user_nick'),
                'user_password'=>md5(I('user_password')),
                'user_viptype'=>I('user_viptype'),
                'user_ip' => ip2long(get_client_ip()),
                'reg_time' => time(),
                'log_time' => time(),
            );
            if($user->create($data)){
                if($user->add()){
                    $this->success('修改成功');
                }else{
                    $this->error('修改会员失败');
                }
            }else{
                $this->error($user->getError());
            }
        }else{
            $vips=M('vip')->select();
            $this->assign(
                array(
                    'ac'=>$ac,
                    'vips'=>$vips,
                )
            );
            $this->display();
        }
    }


    public function edit(){
        $user=D('user');
        $ac=$this->getAc();
        if(IS_POST){

            $users['user_password']=I('user_password');
            if($users['user_password']){
                $data=array(
                    'id'=>I('id'),
                    'user_nick'=>I('user_nick'),
                    'user_password'=>md5(I('user_password')),
                    'user_viptype'=>I('user_viptype'),
                    'user_lock'=>I('user_lock'),
                );
            }else{
                $data=array(
                    'id'=>I('id'),
                    'user_nick'=>I('user_nick'),
                    'user_viptype'=>I('user_viptype'),
                    'user_lock'=>I('user_lock'),
                );
            }
            if($user->create($data)){
                if($user->save()){
                    $this->success('修改成功');
                }else{
                    $this->error('修改会员失败');
                }
            }else{
                $this->error($user->getError());
            }

        }else{
            $id=I('id');
            $users=$user->find($id);
            $vips=M('vip')->select();
            $this->assign(array(
                'users'=>$users,
                'vips'=>$vips,
                'ac'=>$ac,
            ));
            $this->display();
        }
    }



    public function del($id){
        $user=D('user');
        if(isset($id)){
            if($user->delete($id)){
                $this->success('删除会员成功',U('User/index'));
            }else{
                $this->error('删除会员失败');
            }
        }else{
           $user->error($user->getError());
        }

    }


    public function out(){
        session('a_id',null);
        session('a_name',null);
        $this->redirect('Login/index');
    }


}







