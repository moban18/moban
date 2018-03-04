<?php
namespace Admin\Model;
use Think\Model;
class AttrModel extends Model {

    protected  $_validate =array(
        /*array('admin_name','','管理员已经存在！',0,'unique',1),*/

    );

    //处理属性列表数组
    public function attrArr($attrs,$parent_id=0,$level=0){
        static $info=array();
        if(is_array($attrs)){
            foreach ($attrs as $k=>$v) {
                if($v['parent_id']==$parent_id){
                    $v['level']=$level;
                    $info[]=$v;
                    $this->attrArr($attrs,$v['id'],$level+1);
                }
            }
            return $info;
        }

    }

    //添加属性后，添加的搜索属性
    public function _after_insert($data,$option){
            if($data['is_attr']=="1"){
                return;
            }else{
                $attres=explode(',',$data['attr_value']);
                foreach ($attres as $k =>$v) {
                    $info['attr_value']=trim($v);
                    $info['attr_id']=$data['id'];
                    M('attrter')->add($info);
                }
            }
    }


//编辑属性，若带有子属性的，先删除原有的，再添加
    public function _before_update(&$data,$option){
            if($data['is_attr']==0){
                $attr_id=$_GET['id'];
                $arr=array();
                $attrters=M('attrter')->where(array('attr_id'=>$attr_id))->select();
                foreach ($attrters as $k=>$v) {
                    $arr[]=$v['id'];
                }
                $str=implode(',',$arr);
                M('attrter')->where(array('id'=>array('IN',$str)))->delete();
            }else{
                $arr=array();
                $data['id']=$_GET['id'];
                $attrs=$this->where(array('parent_id'=>$data['id']))->select();
                foreach ($attrs as $k=>$v) {
                    $arr[]=$v['id'];
                }
                $str=implode(',',$arr);
                $this->where(array('id'=>array('IN',$str)))->delete();// 这里删除attr表中的二级属性

                //以下是要删除 attrter表中的所有相关的属性

                $attrteres=array();
                $info=M('attrter')->where(array('attr_id'=>array('IN',$str)))->select();
                foreach ($info as $k=>$v) {
                    $attrteres[]=$v['id'];
                }
                $str1=implode(',',$attrteres);
                M('attrter')->where(array('id'=>array('IN',$str1)))->delete();
            }

    }
    //编辑属性，若带有子属性的，先删除原有的，再添加
    public function _after_update(&$data,$option){
            if($data['is_attr']=="1"){
                return;
            }else{
                $attres=explode(',',$data['attr_value']);
                foreach ($attres as $k =>$v) {
                    $info['attr_value']=trim($v);
                    $info['attr_id']=$data['id'];
                    M('attrter')->add($info);
                }
            }
    }


    //从属controller里的attrp()这个方法，得到attrtype的所有id
    public function getAttrtype_id(){
        $a=M('attrtype')->select();
        $b=array();
        foreach ($a as $k=>$v) {
            $b[]=$v['id'];
        }
        $str=implode(',',$b);
        return $str;
    }

    //删除属性，与controller del 从属，得到所有子属性
    public function get_parent_attr($arr){
        if(isset($arr)){
            foreach ($arr as $k=>$v) {
                $id[]=$v['id'];
            }
            $str_id=implode(',',$id);
            $where=array('id'=>array('IN',$str_id));
            $info=$this->where($where)->delete();
            $this->del_attrter($str_id);
        }
    }

    //删除  ，查找到有子属性ID，这里处理attrter表里的数据
    public function del_attrter($attr_id){
            $attrter=M('attrter');
            $where=array('attr_id'=>array('IN',$attr_id));
            $attrters=$attrter->where($where)->select();
            if(!empty($attrters)){
                foreach ($attrters as $k=>$v) {
                    $id[]=$v['id'];
                }
                $ids=implode(',',$id);
                $where=array('id'=>array('IN',$ids));
                $info=$attrter->where($where)->delete();
            }


    }


}

