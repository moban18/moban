<?php
namespace Home\Controller;
use Think\Controller;
class VipController extends CommonController {
    public function index(){
        $this->getCates();
        $ac=$this->getAc();
        $atts=M('attr')->where(array('attrtype_id'=>1))->select();
        $sorts=M('goodsSort')->select();

        /*print_r($sort);die;*/
        $num=count($atts);
        $attrss=M('attr')->select();
        $attrs=$this->test($attrss);

        $this->assign(array(
            'ac'=>$ac,
            'num'=>$num,
            'attrs'=>$attrs,
            'sorts'=>$sorts,
        ));
        $this->display();

    }

    /*attr表中数据处理，处理成四维数组开始*/
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
                        $newAttrss[$k]['child'][$k2]['value'][$k3]['id']=$v2['id'];
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
    /*attr表中数据处理，处理成四维数组结束*/


    /*处理搜索设置数据，*/
    public function handleSearch($search){
            if(!empty($search)){
                $attrs=explode(',',$search['attr_value']);
                foreach ($attrs as $k =>$v) {
                   $id= $this->turnId($v,$search['id']);
                    $search['value'][$k]['v1']=$v;
                    $search['value'][$k]['vid']=$id;
                }
            }
            return $search;
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