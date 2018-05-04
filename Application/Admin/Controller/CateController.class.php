<?php
namespace Admin\Controller;
use Think\Controller;
class CateController extends CommonController {

    public function index(){
        $ac=$this->getAc();
        $cate=D('cate');
        $cates=$cate->field('a.id,a.cate_name,a.cate_url,a.cate_sort,a.cate_title,a.cate_keywords,a.cate_description,b.attrtype_name')->alias('a')->join('LEFT JOIN moban_attrtype b ON a.attrtype_id=b.id')->order('id asc')->select();
        $this->assign(
            array(
                'ac'=>$ac,
                'cates'=>$cates,
            )
        );
        $this->display();
    }

    public function add(){
        $ac=$this->getAc();
        $cate=D('cate');
        if(IS_POST){
            $data=array(
                'cate_name'=>I('cate_name'),
                'cate_sort'=>I('cate_sort'),
                'attrtype_id'=>I('attrtype_id'),
                'cate_title'=>I('cate_title'),
                'cate_url'=>I('cate_url'),
                'cate_keywords'=>I('cate_keywords'),
                'cate_description'=>I('cate_description'),
            );
            if($cate->create($data)){
                if($cate->add()){
                    $this->success('添加成功');
                }else{
                    $this->error('添加栏目失败');
                }
            }else{
                $this->error($cate->getError());
            }
        }else{
            $attrtypes=M('attrtype')->select();
            $this->assign(
                array(
                    'attrtypes'=>$attrtypes,
                    'ac'=>$ac,
                )
            );
            $this->display();
        }
    }


    public function edit(){
        $cate=D('cate');
        $ac=$this->getAc();
        if(IS_POST){
            $data=array(
                'id'=>I('id'),
                'cate_name'=>I('cate_name'),
                'cate_sort'=>I('cate_sort'),
                'attrtype_id'=>I('attrtype_id'),
                'cate_title'=>I('cate_title'),
                'cate_url'=>I('cate_url'),
                'cate_keywords'=>I('cate_keywords'),
                'cate_description'=>I('cate_description'),
            );
            if($cate->create($data)){
                if($cate->save()){
                    $this->success('修改成功');
                }else{
                    $this->error('修改栏目失败');
                }
            }else{
                $this->error($cate->getError());
            }
        }else{
            $id=I('id');
            $cates=$cate->find($id);
            $attrtypes=M('attrtype')->select();
            $this->assign(
                array(
                    'cates'=>$cates,
                    'attrtypes'=>$attrtypes,
                    'ac'=>$ac,
                )
            );
            $this->display();
        }

    }

    public function del($id){
        if(isset($id)){
            if(M('cate')->delete($id)){
                $this->success('删除栏目成功',U('Cate/index'));
            }else{
                $this->error('删除栏目失败');
            }
        }

    }


    public function out(){
        session('a_id',null);
        session('a_name',null);
        $this->redirect('Login/index');
    }


    //排序，与AJAX交换数据

    public function getSort(){
        $cate=D('cate');
        $data=array(
            'id'=>I('id'),
            'cate_sort'=>I('sort'),
        );
        if($cate->save($data)){
            echo 1;
        }else{
            echo 0;
        }

    }

}







