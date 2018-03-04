<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends CommonController
{
    public function index(){
        if(IS_POST){
           $data=array(
               'admin_name'=>I('admin_name'),
               'admin_password'=>I('admin_password'),
           );
            if($info=M('admin')->where(array('admin_name'=>$data['admin_name']))->find()){
                if($info['admin_password']==md5($data['admin_password'])){
                    session('a_id',$info['id']);
                    session('a_name',$info['admin_name']);
                    $this->redirect('Admin/index');
                }else{
                    $this->error('管理员帐号或密码错误');
                }
            }else{
                $this->error('没有找到指定的管理员');
            }
        }else{
            $this->display();
        }
    }


}







