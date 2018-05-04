<?php
namespace Admin\Controller;
use Think\Controller;
class LunController extends CommonController {

    public function index()
    {
        $lun=D('lun');
        $luns=$lun->select();
        $ac=$this->getAc();
        $this->assign(
            array(
                'ac'=>$ac,
                'luns'=>$luns,
            )
        );
        $this->display();
    }

    public function add(){
        $lun=D('lun');
        if(IS_POST){
            $data=array(
                'lun_name'=>I('lun_name'),
                'lun_notise'=>I('lun_notise'),
                'lun_lock'=>I('lun_lock'),
                'lun_photos'=>I('lun_photos'),
                'goods_links'=>I('goods_links'),
                'lun_time'=>time(),
            );
            $data['lun_photos']= $lun->handleLun($data['lun_photos']);
            $data['goods_links']= $lun->handleLun($data['goods_links']);
            if($lun->create($data)){
                if($lun->add()){
                    $this->success('添加成功',U('Lun/index'));
                }else{
                    $this->erro('添加失败');
                }
            }else{
                $this->error($lun->getError());
            }
        }else{
            $goodss=M('goods')->field('id,goods_name')->select();
            $ac=$this->getAc();
            $this->assign(array(
                'ac'=>$ac,
                'goodss'=>$goodss,
            ));
           $this->display();
        }
    }

    public function edit(){
        $lun=D('lun');
        $id=I('id');
        if(IS_POST){
            $data=array(
                'id'=>I('id'),
                'lun_name'=>I('lun_name'),
                'lun_notise'=>I('lun_notise'),
                'goods_links'=>I('goods_links'),
                'lun_lock'=>I('lun_lock'),
                'lun_photos'=>I('lun_photos'),
            );
            $data['lun_photos']= $lun->handleLun($data['lun_photos']);
            $data['goods_links']= $lun->handleLun($data['goods_links']);
            if($lun->create($data)){
                if($lun->save()){
                    $this->success('修改成功',U('Lun/index'));
                }else{
                    $this->error('修改失败');
                }
            }else{
                $this->error($lun->getError());
            }
        }else{
            $luns=$lun->where(array('id'=>$id))->find();
            $goodss=M('goods')->field('id,goods_name')->select();
            $ac=$this->getAc();
            $this->assign(
                array(
                    'ac'=>$ac,
                    'goodss'=>$goodss,
                    'luns'=>$luns,
                )
            );
            $this->display();
        }
    }

    public function del(){
        $id=I('id');
        $lun=D('lun');
        $info=$lun->where(array('id'=>$id))->find();
        if($info){
            if($lun->where(array('id'=>$id))->delete()){
                if($info['lun_photos']){
                    $imgs=explode(',',$info['lun_photos']);
                    foreach ($imgs as $k=>$v) {
                        unlink($v);
                    }
                    $this->success('删除成功',U('Lun/index'));
                }
            }else{
                $this->error('删除失败');
            }
        }else{
            $this->error('非常操作');
        }
    }
    public function uploadify(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
        $upload->rootPath ='./';
        $info   =   $upload->upload();
        $yphoto=$info['Filedata']['savepath'].$info['Filedata']['savename'];
        echo $yphoto;
    }

    public function delLocatePhotos(){
        $path=I('path');
        if(isset($path)){
            if(unlink($path)){
                echo 1;
            }else{
                echo 0;
            }
        }

    }

}







