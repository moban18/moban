<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends CommonController {

    public function index(){
        $ac=$this->getAc();
        $admin=D('admin');
        $admins=$admin->select();
        $this->assign(
            array(
                'ac'=>$ac,
                'admins'=>$admins,
            )
        );
        $this->display();
    }

    public function add(){
        $ac=$this->getAc();
        $admin=D('admin');
        if(IS_POST){
            $data=array(
                'admin_name'=>I('admin_name'),
                'admin_password'=>md5(I('admin_password')),
            );
            if($admin->create($data)){
                if($admin->add()){
                    $this->success('添加成功');
                }else{
                    $this->error('添加管理员失败');
                }
            }else{
                $this->error($admin->getError());
            }
        }else{
            $this->assign(
                array(
                    'ac'=>$ac,
                )
            );
            $this->display();
        }
    }


    public function edit(){
        $admin=D('admin');
        $ac=$this->getAc();
        if(IS_POST){
            $password=I('admin_password');
            if(!$password){
                $data=array(
                    'id'=>I('id'),
                    'admin_name'=>I('admin_name'),
                );
            }else{
                $data=array(
                    'id'=>I('id'),
                    'admin_name'=>I('admin_name'),
                    'admin_password'=>md5(I('admin_password')),
                );
            }
            if($admin->create($data)){
                if($admin->save()){
                    $this->success('修改成功');
                }else{
                    $this->error('修改管理员失败');
                }
            }else{
                $this->error($admin->getError());
            }
        }else{
            $id=I('id');
            $admins=$admin->find($id);
            $this->assign(array(
                'admins'=>$admins,
                'ac'=>$ac,
            ));
            $this->display();
        }
    }



    public function del(){

    }


    public function out(){
        session('a_id',null);
        session('a_name',null);
        $this->redirect('Login/index');
    }


}







