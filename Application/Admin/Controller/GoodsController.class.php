<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends CommonController {

    public function index(){
        $ac=$this->getAc();
        $goods=D('goods');
        $count      = $goods->count();
        $Page       = new \Think\Page($count,15);
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $show       = $Page->show();//
        $goodss=$goods->alias('a')->field('a.id,a.goods_name,a.goods_vips,a.goods_price,a.goods_photo,a.goods_comment,a.goods_store,a.goods_recommend,a.download_num,b.cate_name')->join('LEFT JOIN moban_cate b ON a.cate_id=b.id')->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach ($goodss as $k =>$v) {
            if($v['goods_vips']){
                $a=array();
                $info=M('vip')->field('vip_name')->where(array('id'=>array('IN',$v['goods_vips'])))->select();
                foreach ($info as $k1 =>$v1) {
                    $a[]=$v1['vip_name'];
                }
                $b=implode(',',$a);
                $goodss[$k]['goods_vips']= $b;
            }
        }
        $this->assign(
            array(
                'ac'=>$ac,
                'goodss'=>$goodss,
                'page'=>$show,
            )
        );
        $this->display();
    }

    public function add(){
        $ac=$this->getAc();
        $goods=D('goods');
        if(IS_POST){
            $data=array(
                'goods_name'=>I('goods_name'),
                'cate_id'=>I('cate_id'),
                'attrtype_id'=>I('attrtype_id'),
                'goods_vips'=>I('goods_vips'),
                'goods_price'=>I('goods_price'),
                'goods_photo'=>I('goods_photo'),
                'goods_comment'=>I('goods_comment'),
                'goods_store'=>I('goods_store'),
                'goods_recommend'=>I('goods_recommend'),
                'download_num'=>I('download_num'),
                'goods_tuijian'=>I('goods_tuijian'),
            );
            if(is_array($data['goods_vips'])){
                $data['goods_vips']=implode(',',$data['goods_vips']);
            }

            if($goods->create($data)){
                if($info=$goods->add()){
                    $this->success('添加成功',U('Goods/index'));
                }else{
                    $this->error('添加属性种类失败');
                }
            }else{
                $this->error($goods->getError());
            }
        }else{
            $cates=M('cate')->select();
            $attrtypes=M('attrtype')->select();
            $this->assign(
                array(
                    'ac'=>$ac,
                    'cates'=>$cates,
                    'attrtypes'=>$attrtypes,
                )
            );
            $this->display();
        }
    }



    public function edit(){
        $goods=D('goods');
        $ac=$this->getAc();
        if(IS_POST){
            $data=array(
                'id'=>I('id'),
                'goods_name'=>I('goods_name'),
                'cate_id'=>I('cate_id'),
                'attrtype_id'=>I('attrtype_id'),
                'goods_vips'=>I('goods_vips'),
                'goods_price'=>I('goods_price'),
                'goods_photo'=>I('goods_photo'),
                'goods_comment'=>I('goods_comment'),
                'goods_store'=>I('goods_store'),
                'goods_recommend'=>I('goods_recommend'),
                'download_num'=>I('download_num'),
                'goods_content'=>I('goods_content'),
                'goods_author'=>I('goods_author'),
                'goods_view'=>I('goods_view'),
                'code_url'=>I('code_url'),
                'download_url'=>I('download_url'),
            );
            if(is_array($data['goods_vips'])){
                $data['goods_vips']=implode(',',$data['goods_vips']);
            }
            if($goods->create($data)){
                if($goods->relation(true)->where(array('id'=>$data['id']))->save()){
                    $this->success('修改商品成功');
                }else{
                    $this->error('修改商品失败');
                }
            }else{
                $this->error($goods->getError());
            }
        }else{
            $id=I('id');
            $goodss=$goods->relation(true)->find($id);
            $cates=M('cate')->select();
            $vips=M('vip')->select();
            $attrtypes=M('attrtype')->select();
            $searchs=M('search')->where(array('goods_id'=>$id))->select();
            if(!empty($searchs)){
                $searches=$goods->getAttrName($searchs);
            }

            $this->assign(
                array(
                    'goodss'=>$goodss,
                    'cates'=>$cates,
                    'attrtypes'=>$attrtypes,
                    'searches'=>$searches,
                    'vips'=>$vips,
                    'ac'=>$ac,
                )

            );
            $this->display();
        }
    }
    //删除商品
    public function del($id){
        $goods=D('goods');
        if($id){
            if($info=$goods->relation(true)->where(array('id'=>$id))->delete()){
                $this->success('删除商品成功',U('Goods/index'));
            }else{
                $this->error('删除商品失败');
            }
        }else{
            $this->error('非法操作');
        }

    }


    public function test(){
        $str='&lt;p&gt;afds&lt;img src=&quot;/moban/ueditor/20180209/1518142633418957.jpg&quot; title=&quot;1518142633418957.jpg&quot; alt=&quot;1-1G22Q20A10-L.jpg&quot;/&gt;&lt;img src=&quot;/moban/ueditor/20180209/1518142638140756.jpg&quot; title=&quot;1518142638140756.jpg&quot; alt=&quot;1111111.jpg&quot;/&gt;&lt;img src=&quot;/moban/ueditor/20180209/1518142642294165.jpg&quot; title=&quot;1518142642294165.jpg&quot; alt=&quot;1-1G22Q20A10-L.jpg&quot;/&gt;&lt;/p&gt;';
        $text=stripslashes($str);
        //<p>afds<img src="/moban/ueditor/20180209/1518142633418957.jpg" title="1518142633418957.jpg" alt="1-1G22Q20A10-L.jpg"/><img src="/moban/ueditor/20180209/1518142638140756.jpg" title="1518142638140756.jpg" alt="1111111.jpg"/><img src="/moban/ueditor/20180209/1518142642294165.jpg" title="1518142642294165.jpg" alt="1-1G22Q20A10-L.jpg"/></p>
        /*echo $text;die;*/
        /*preg_match('/src=\"?(.+\.(jpg|gif|bmp|bnp|png))\"?.+/',$text,$arr);*/
        preg_match_all('/\/ueditor\/\d*\/\d*\.[jpg|jpeg|png|bmp|gif]*/i',$text,$arr);
        print_r($arr);
        /*$str='.'.substr($arr[1],12);
        unlink($str);*/
    }




    public function out(){
        session('a_id',null);
        session('a_name',null);
        $this->redirect('Login/index');
    }


    //添加商品，选择栏目，弹出不同需求 与ajax数据交互
    public function getVip(){
        $vips=M('vip')->select();
        echo json_encode($vips);
    }



    //图片上传，与AJAX数据交互
    public function uploadImg(){
            if($_FILES['upload_file']['tmp_name']){
            $upload = new \Think\Upload();
            $upload->rootPath='./';
            $upload->savePath  =      './Uploads/';
            $info   =   $upload->upload();
            $Path=$info['upload_file']['savepath'];
            $Name=$info['upload_file']['savename'];
            $allPath=$Path.$Name;
            echo $allPath;
        }

    }
    //图片上传，上传不正确图片，再上传，删除之前的图片，与Ajax数据交换
    public function delPhoto(){
        $src=I('src');
        if(unlink($src)){
            echo 1;
        }else{
            echo 0;
        }
    }

    //删除商品中搜索规则
    public function delSearch($id){
        if($id){
            $search=D('search');
            if($search->delete($id)){
                $this->success('删除搜索成功');
            }else{
                $this->error('删除搜索失败');
            }
        }else{
            $this->error('非法操作');
        }

    }


}







