<?php
namespace Admin\Controller;
use Think\Controller;
class attrtypeController extends CommonController {

    public function index(){
        $ac=$this->getAc();
        $attrtype=D('attrtype');
        $attrtypes=$attrtype->select();
        $this->assign(
            array(
                'ac'=>$ac,
                'attrtypes'=>$attrtypes,
            )
        );
        $this->display();
    }

    public function add(){
        $ac=$this->getAc();
        $attrtype=D('attrtype');
        if(IS_POST){
            $data=array(
                'attrtype_name'=>I('attrtype_name'),
            );
            if($attrtype->create($data)){
                if($attrtype->add()){
                    $this->success('添加成功');
                }else{
                    $this->error('添加属性种类失败');
                }
            }else{
                $this->error($attrtype->getError());
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
        $attrtype=D('attrtype');
        $ac=$this->getAc();
        if(IS_POST){
            $data=array(
                'id'=>$_GET['id'],
                'attrtype_name'=>I('attrtype_name'),
            );
            if($attrtype->create($data)){
                if($attrtype->save()){
                    $this->success('修改成功');
                }else{
                    $this->error('修改属性种类失败');
                }
            }else{
                $this->error($attrtype->getError());
            }
        }else{
            $id=I('id');
            $attrtypes=$attrtype->find($id);
            $this->assign(
                array(
                    'attrtypes'=>$attrtypes,
                    'ac'=>$ac,
                )

            );
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


    //排序，与AJAX交换数据

    public function getSort(){
        $attrtype=D('attrtype');
        $data=array(
            'id'=>I('id'),
            'attrtype_sort'=>I('sort'),
        );
        if($attrtype->save($data)){
            echo 1;
        }else{
            echo 0;
        }

    }

}







