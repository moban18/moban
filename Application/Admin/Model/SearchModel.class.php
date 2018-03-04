<?php
namespace Admin\Model;
use Think\Model;
class SearchModel extends Model {

    protected  $_validate =array(
        /*array('admin_name','','管理员已经存在！',0,'unique',1),*/

    );

    //处理添加时，搜索值的转换
    public function changeValue($data){
        static $info=array();
        if(!empty($data['values'])){
            foreach ($data['values'] as $k=>$v) {
                $a=explode('|',$v);
                $info[$k]['goods_id']=$data['goods_id'];
                $info[$k]['attr_id']=$a[0];
                $info[$k]['attr_name']=$a[1];
            }
           return $this->getAttrID($info);
        }

    }
    //处理添加时，找出attrter里的分别id;
    public function getAttrID($info){
        $attrter=M('attrter');
        if(!empty($info)){
            foreach ($info as $k =>$v) {
                $where['attr_id']=$v['attr_id'];
                $where['attr_value']=$v['attr_name'];
                $attrters=$attrter->field('id')->where($where)->find();
                $info[$k]['attrter_id']=$attrters['id'];

            }
            return $info;
        }

    }

}

