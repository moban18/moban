<?php
namespace Admin\Model;
use Think\Model\RelationModel;
class GoodsModel extends RelationModel {

    protected  $_validate =array(
        array('admin_name','','属性种类已经存在！',0,'unique',1),

    );

    protected $_link=array(
        'goods_info'=>array(
            'mapping_type'=>self::HAS_ONE,
            'class_name'=>'goods_info',
            'foreign_key'=>'goods_id',
            'as_fields'=>'goods_content,goods_author,goods_view,code_url,download_url,goods_time'
        ),
    );


    public function _after_insert($data,$option){
            $info=array(
                'goods_id'=>$data['id'],
                'goods_content'=>I('goods_content'),
                'goods_author'=>I('goods_author'),
                'goods_view'=>I('goods_view'),
                'code_url'=>I('code_url'),
                'download_url'=>I('download_url'),
                'goods_time'=>time(),
            );
            $goods_info=M('goodsInfo')->add($info);

    }

    //处理商品中的搜索规则数据
    public function getAttrName($searchs){
        $attr=M('attr');
        foreach ($searchs as $k =>$v) {
            $attres=$attr->find($v['attr_id']);
            $searchs[$k]['attr2_name']=$attres['attr_name'];
            if($attres['parent_id']){
                $a=$attr->find($attres['parent_id']);
                $searchs[$k]['attr1_name']=$a['attr_name'];
            }
        }
        return $searchs;
    }


    //删除商品后，删除UEdite上传的图片
    public function _before_delete($options){
        $id=$options['where']['id'];
        $goods_info=M('goodsInfo');
        $info=$goods_info->where(array('goods_id'=>$id))->find();
        $goods=M('goods')->where(array('id'=>$id))->find();
        $text=stripslashes($info['goods_content']);
        preg_match_all('/\/ueditor\/\d*\/\d*\.[jpg|jpeg|png|bmp|gif]*/i',$text,$arr);
        if($arr){
            foreach ($arr[0] as $k =>$v) {
                $str='.'.$v;
                unlink($str);
            }
        }
        unlink($goods['goods_photo']);
    }


}

