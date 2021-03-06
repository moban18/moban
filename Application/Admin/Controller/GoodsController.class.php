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
        $goodss=$goods->alias('a')->field('a.id,a.goods_name,a.goods_vips,a.goods_price,a.goods_photo,a.goods_comment,a.goods_store,a.goods_recommend,a.download_num,a.goods_search,a.goods_tuijian,b.cate_name')->join('LEFT JOIN moban_cate b ON a.cate_id=b.id')->order('goods_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
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
        $cates=M('cate')->select();
        $this->assign(
            array(
                'ac'=>$ac,
                'goodss'=>$goodss,
                'page'=>$show,
                'cates'=>$cates,
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
                'godds_233_160'=>I('godds_233_160'),
                'moban_num'=>I('moban_num'),
                'goods_comment'=>I('goods_comment'),
                'goods_store'=>I('goods_store'),
                'goods_recommend'=>I('goods_recommend'),
                'download_num'=>I('download_num'),
                'goods_tuijian'=>I('goods_tuijian'),
                'goods_time'=>time(),
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
                'godds_233_160'=>I('godds_233_160'),
                'goods_comment'=>I('goods_comment'),
                'goods_store'=>I('goods_store'),
                'goods_recommend'=>I('goods_recommend'),
                'download_num'=>I('download_num'),
                'goods_content'=>I('goods_content'),
                'goods_author'=>I('goods_author'),
                'goods_tuijian'=>I('goods_tuijian'),
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
        $goods_id=$id;
        if($id){
            if($info=$goods->relation(true)->where(array('id'=>$id))->delete()){
                //删除商品search表对应的搜索属性
                $search=M('search')->where(array('goods_id'=>$goods_id))->delete();
                $this->success('删除商品成功',U('Goods/index'));
            }else{
                $this->error('删除商品失败');
            }
        }else{
            $this->error('非法操作');
        }

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
                //处理宽度为268像素的图片
                $image = new \Think\Image();
                $image->open($allPath);
                $width=$image->width();
                $rage=$width/268;
                $height=$image->height();
                $newHeight=$height*$rage;
                $image->thumb(268, $newHeight)->save($allPath);
                //裁剪233*160首页显示的商品图片
                $image->open($allPath);
                $width=$image->width();
                $small='233_';
                $smallPath=$Path.$small.$Name;
                $image->crop(233, 160)->save($smallPath);
                $total=$allPath.','.$smallPath;
                 echo $total;
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
            $goods=M('goods');
            if($search->delete($id)){
                $goods->where(array('id'=>I('goods_id')))->setDec('goods_search');
                $this->success('删除搜索成功');
            }else{
                $this->error('删除搜索失败');
            }
        }else{
            $this->error('非法操作');
        }

    }

    //商品列表 搜索；商品栏目及搜索设置搜索
    public function searchOthers(){
            /*print_r($_POST);die;*/
            //判断 如果搜索标题存在，那其它2个搜索参数，忽略；反之，就按其它3个参数搜索
            if(!empty(I('goods_name'))){
                $title=I('goods_name');
                $where['goods_name']=array('like','%'.$title.'%');
            }else{
                //一个参数为空；
                $cate_id=I('cate_id');
                $goods_search=I('goods_search');
                $goods_tuijian=I('goods_tuijian');

                if($cate_id==0){
                    if(!$goods_search){
                        if(!$goods_tuijian){
                        }else{
                            $where['goods_tuijian']=$goods_tuijian;
                        }
                    }else{
                        $where['goods_search']=0;
                        if($goods_tuijian){
                            $where['goods_tuijian']=$goods_tuijian;
                        }
                    }
                }else{
                    $where['cate_id']=$cate_id;
                }
            }
            $goods=D('goods');
            $count      = $goods->where($where)->count();
            $Page       = new \Think\Page($count,15);
            $Page->setConfig('prev','上一页');
            $Page->setConfig('next','下一页');
            $show       = $Page->show();//
            $goodss=$goods->where($where)->alias('a')->field('a.id,a.goods_name,a.goods_vips,a.goods_price,a.goods_photo,a.goods_comment,a.goods_store,a.goods_recommend,a.download_num,a.goods_search,a.goods_tuijian,b.cate_name')->join('LEFT JOIN moban_cate b ON a.cate_id=b.id')->order('goods_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
            $cates=M('cate')->select();
            $ac=$this->getAc();
            $this->assign(array(
                'ac'=>$ac,
                'cates'=>$cates,
                'goodss'=>$goodss,
                'page'=>$show,

            ));
            $this->display();
    }

}







