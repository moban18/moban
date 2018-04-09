<?php
namespace Home\Controller;
use Think\Controller;
class VipController extends CommonController {
    public function index(){
        $this->getCates();
        $ac=$this->getAc();
        $atts=M('attr')->where(array('attrtype_id'=>1))->select();
        $sorts=M('goodsSort')->select();//模板中推荐部分
        $num=count($atts);
        $attrss=M('attr')->select();
        $attrs=$this->test($attrss);//模板中属性部分
        //模板中商品部分
        $page_nums=5;//每页显示的数量 ；
        $filter=I('filter');
        if($filter){
            if($filter=='0-0-0-0-0-0'){
                echo 11111;
                $goods=M('goods');
                $goodres=$goods->limit(0,$page_nums)->select();
                $count      = $goods->count();//数据的总数；
                $pages=ceil($count/$page_nums);//计算一共有多少页数据；
            }else{
                $filters=explode('-',$filter);
                list($feilei,$color,$buju,$yuyan,$tuij,$yem)=$filters;
                $feileis=$this->getGoods_id($feilei);
                $colors=$this->getGoods_id($color);
                $bujus=$this->getGoods_id($buju);
                $yuyans=$this->getGoods_id($yuyan);
                /*$tuijs=$this->getGoods_id($tuij);*/

                //判断一个数据为空的 开始
                if(empty($feileis)){
                    $map=array_intersect($colors,$bujus,$yuyans);
                }
                if(empty($colors)){
                    $map=array_intersect($feileis,$bujus,$yuyans);
                }
                if(empty($bujus)){
                    $map=array_intersect($colors,$feileis,$yuyans);
                }
                if(empty($yuyans)){
                    $map=array_intersect($colors,$bujus,$feileis);
                }
                /*判断一个数据为空的 结束*/
                /*判断二个数组为空开始*/
                if(empty($feileis) & empty($colors)){
                    $map=array_intersect($bujus,$yuyans);
                }
                if(empty($feileis) && empty($bujus)){
                    $map=array_intersect($colors,$yuyans);
                }
                if(empty($feileis) && empty($yuyans)){
                    $map=array_intersect($colors,$bujus);
                }
                if(empty($colors) && empty($bujus)){
                    $map=array_intersect($feileis,$yuyans);
                }
                if(empty($colors) && empty($yuyans)){
                    $map=array_intersect($feileis,$bujus);
                }
                if(empty($bujus) && empty($yuyans)){
                    $map=array_intersect($feileis,$colors);
                }
                /*判断二个数组为空结束*/
                /*判断三个数组为空开始*/
                if(empty($feileis) && empty($colors)  && empty($bujus)){
                    $map=$yuyans;
                }
                if(empty($feileis) && empty($colors)  && empty($yuyans)){
                    $map=$bujus;
                }
                if(empty($feileis) && empty($bujus)  && empty($yuyans)){
                    $map=$colors;
                }
                if(empty($colors) && empty($bujus)  && empty($yuyans)){
                    $map=$feileis;
                    
                }
                /*判断三个数组为空结束*/
                /*判断没有空开始*/
                if($feileis && $colors  && $bujus  && $yuyans){
                    $map=array_intersect($feileis,$colors,$bujus,$yuyans);
                }


                /*判断没有空结束*/
                /*判断4个都为空开始*/
                if(empty($feileis) && empty($colors) && empty($bujus)  && empty($yuyans)){
                    //这里判断filter各参数不为0，但可能会出现没有相关商品开始；
                    if($feilei!=0 || $color!=0 || $buju!=0 || $yuyan!=0){
                        $count=0;
                    }else{
                        $goods=M('goods');
                        $count      = $goods->count();//数据的总数；
                        $pages=ceil($count/$page_nums);//计算一共有多少页数据；
                        if($yem>=$pages){//判断如果传过来的页码大于最多页码，就直接等最大页码 ；
                            $yem=$pages;
                        }
                        $goodres=$goods->limit($page_nums*($yem-1),$page_nums)->select();
                    }

                }else{//判断除了前四个参数为空的其它情况的数组分页；
                    $newMap=implode(',',$map);
                    $goodss=M('goods')->where(array('id'=>array('IN',$newMap)))->select();
                    $count=count($goodss);
                    $goodres=$goodss;
                    /*判断页码是否存在开始*/
                    if($yem==0){
                        if($page_nums>= $count){
                            $pages=1;
                        }else{
                            $goods_page=ceil($count/$page_nums);
                            if($yem>=$goods_page){
                                $pages=$goods_page;
                            }else{
                                $pages=$goods_page;
                            }
                            $goodres=array_slice($goodss,$page_nums*($yem-1),$page_nums);
                        }
                    }else{//判断页码不为0时的显示页
                        $goods_page=ceil($count/$page_nums);
                        if($yem<=$goods_page){
                            $pages=$goods_page;
                            $goodres=array_slice($goodss,$page_nums*($yem-1),$page_nums);
                        }
                    }

                }
            }
        }else{
            $goods=M('goods');
            $count      = $goods->count();//数据的总数；
            $goodres=$goods->limit(0,$page_nums)->select();
            $pages=ceil($count/$page_nums);//计算一共有多少页数据；
        }
        $this->assign(array(
            'ac'=>$ac,
            'num'=>$num,
            'attrs'=>$attrs,
            'sorts'=>$sorts,
            'goodres'=>$goodres,

            'count'=>$count,
            'pages'=>$pages,
        ));
        $this->display();

    }


    //处理search表中查出相应的商品ID；
    public function getGoods_id($attrter_id){
        $searchs=M('search')->where(array('attrter_id'=>$attrter_id))->select();
        if($searchs){
            foreach ($searchs as $k =>$v) {
                $goods_ids[$k]=$v['goods_id'];
            }
            return $goods_ids;
        }else{
            return false;
        }
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