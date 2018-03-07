<?php
namespace Home\Controller;
use Think\Controller;
class VipController extends CommonController {
    public function index(){
        $this->getCates();
        $ac=$this->getAc();
        $atts=M('attr')->where(array('attrtype_id'=>1))->select();
        $num=count($atts);
        $attrss=M('attr')->select();
        $attrs=$this->test($attrss);
        /*print_r($attrs);die;*/
        $this->assign(array(
            'ac'=>$ac,
            'num'=>$num,
            'attrs'=>$attrs,
        ));
        $this->display();
    }

    public function test($attrss,$parent_id=0){
        static $newAttrss=array();
        foreach ($attrss as $k =>$v) {
            if($v['parent_id']==$parent_id){
                $newAttrss[]=$v;
            }
        }
        return  $this->test2($attrss,$newAttrss);
    }
    public function test2($attrss,$newAttrss){
        foreach ($newAttrss as $k =>$v) {
            foreach ($attrss as $k1 =>$v1) {
                if($v['id']==$v1['parent_id']){
                    $newAttrss[$k]['child'][]=$v1;
                }
            }
        }
       return $this->test3($newAttrss);
    }
    public function test3($newAttrss){
        foreach ($newAttrss as $k => $v) {
            if($v['child']){
                foreach ($v['child'] as $k2 =>$v2) {
                    $attres=explode(',',$v2['attr_value']);
                    foreach ($attres as $k3 => $v3) {
                        $newAttrss[$k]['child'][$k2]['value'][$k3]['v1']=$v3;
                        $attrter_id=$this->turnId($v3,$v2['id']);
                        $newAttrss[$k]['child'][$k2]['value'][$k3]['vid']=$attrter_id;
                    }
                }
            }else{
                $attres=explode(',',$v['attr_value']);
                foreach ($attres as $k1 => $v1) {
                    $newAttrss[$k]['value'][$k1]['v1']=$v1;
                    $attrter_id=$this->turnId($v1,$v['id']);
                    $newAttrss[$k]['value'][$k1]['id']=$attrter_id;
                }
            }
        }
        return $newAttrss;
    }


    public function handleAttr($attrs){
        if(is_array($attrs)){
            $attr=M('attr');
           // $attr_0=array();
            foreach ($attrs as $k =>$v) {
                $attres=explode(',',$v['attr_value']);
                if($v['is_attr']==1){
                    $childs[]=$attr->where(array('parent_id'=>$v['id']))->select();
                }else{
                    $attr_0[$k]=$v;
                    foreach ($attres as $k1 => $v1) {
                        $attrs[$k]['value'][$k1]['v1']=$v1;
                        $attrter_id=$this->turnId($v1,$v['id']);
                        $attrs[$k]['value'][$k1]['id']=$attrter_id;
                    }
                }
            }
            $childss=$this->handleChilds($childs);
            $tatle= array_merge($childss,$attrs);
            return $tatle;
        }
    }
    //处理is_attr=1的三维数组 改成二维数组
    public function handleChilds($arr){
        $childs=array();
        if(isset($arr)){
            foreach ($arr as $k => $v) {
                foreach ($v as $k1 =>$v1) {
                    $childs[]=$v1;
                }
            }
            return $this->childs($childs);

        }
    }
    //处理带有二级数据，并查找attrter表中的数据，并返回还ID的三维数据
    public function childs($arr){
        if(isset($arr)){
            foreach ($arr as $k =>$v) {
                $attres=explode(',',$v['attr_value']);
                foreach ($attres as $k1 => $v1) {
                    $arr[$k]['value'][$k1]['v1']=$v1;
                    $attrter_id=$this->turnId($v1,$v['id']);
                    $arr[$k]['value'][$k1]['id']=$attrter_id;
                }
            }
            return $arr;
        }
    }
    //处理属性值，返回attrter的ID；
    public function turnId($attr_value,$attr_id){
        $attrter=M('attrter');
        if(isset($attr_value) && isset($attr_id)){
            $where['attr_id']=$attr_id;
            $where['attr_value']=$attr_value;
            $attrters=$attrter->where($where)->find();
            return $attrters['id'];
        }

    }

}