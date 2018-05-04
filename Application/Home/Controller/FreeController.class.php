<?php
namespace Home\Controller;
use Think\Controller;
class FreeController extends CommonController {
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
        $where['cate_id']=5;//vip栏目
        $filter=I('filter');
        if($filter){
            if($filter=='0-0-0-0-0-0'){
                $goods=M('goods');
                $goodres=$goods->where($where)->limit(0,$page_nums)->select();
                $count      = $goods->where($where)->count();//数据的总数；
                $pages=ceil($count/$page_nums);//计算一共有多少页数据；
            }else{
                $filters=explode('-',$filter);
                list($feilei,$color,$buju,$yuyan,$tuij,$yem)=$filters;
                $feileis=$this->getGoods_id($feilei);
                $colors=$this->getGoods_id($color);
                $bujus=$this->getGoods_id($buju);
                $yuyans=$this->getGoods_id($yuyan);
                if($tuij){
                    $ziDun=M('goods_sort')->where(array('id'=>$tuij))->find();
                    $order=$ziDun['sort_zidun'].' Desc';
                }
                /*$tuijs=$this->getGoods_id($tuij);*/

                //判断一个数据为空的 开始
                if(empty($feileis)){
                    $map=array_intersect($colors,$bujus,$yuyans);
                }
                if(empty($colors)){
                    //判断是不是模板分类中的一员，判断是不是分类中的大类开始；
                    $attr=M('attr')->where(array('id'=>$feilei))->where(array('parent_id'=>1))->find();
                    $searches=M('search')->where(array('attrter_id'=>$feilei))->select();
                    if($attr){//如果系大类，那么这个大类下的所有小分类的产品全部列出来；
                        $parent_attrs=M('attr')->where(array('parent_id'=>1))->select();
                        $attrters=M('attrter')->where(array('attr_id'=>$attr['id']))->select();
                        if($parent_attrs){
                            foreach ($parent_attrs as $k=>$v) {
                                $parent_ids[]=$v['id'];
                            }
                        }
                        if($attrters){
                            foreach ($attrters as $k =>$v) {
                                $attrterss[$k]['attr_id']=$attr['id'];
                                $attrterss[$k]['attrter_id']=$v['id'];
                                $newArr[$k]=$this->getGoods_id($v['id']);
                            }
                        }
                        foreach ($newArr as $k =>$v) {
                            foreach ($v as $k1 =>$v1) {
                                $feileis[]=$v1;
                            }
                        }
                        $bujus=$this->getGoods_id($buju);
                        $yuyans=$this->getGoods_id($yuyan);
                        $map=array_intersect($feileis,$bujus,$yuyans);
                    }else{//如果不是大类，那么就只显示该小类的产品 列表出来；
                        $map=array_intersect($feileis,$bujus,$yuyans);
                    }
                    //判断是不是模板分类中的一员，判断是不是分类中的大类结束；

                }
                if(empty($bujus)){
                    //判断是不是模板分类中的一员，判断是不是分类中的大类开始；
                    $attr=M('attr')->where(array('id'=>$feilei))->where(array('parent_id'=>1))->find();
                    $searches=M('search')->where(array('attrter_id'=>$feilei))->select();
                    if($attr){//如果系大类，那么这个大类下的所有小分类的产品全部列出来；
                        $parent_attrs=M('attr')->where(array('parent_id'=>1))->select();
                        $attrters=M('attrter')->where(array('attr_id'=>$attr['id']))->select();
                        if($parent_attrs){
                            foreach ($parent_attrs as $k=>$v) {
                                $parent_ids[]=$v['id'];
                            }
                        }
                        if($attrters){
                            foreach ($attrters as $k =>$v) {
                                $attrterss[$k]['attr_id']=$attr['id'];
                                $attrterss[$k]['attrter_id']=$v['id'];
                                $newArr[$k]=$this->getGoods_id($v['id']);
                            }
                        }
                        foreach ($newArr as $k =>$v) {
                            foreach ($v as $k1 =>$v1) {
                                $feileis[]=$v1;
                            }
                        }
                        $colors=$this->getGoods_id($color);
                        $yuyans=$this->getGoods_id($yuyan);
                        $map=array_intersect($feileis,$bujus,$yuyans);
                    }else{//如果不是大类，那么就只显示该小类的产品 列表出来；
                        $map=array_intersect($colors,$feileis,$yuyans);
                    }
                    //判断是不是模板分类中的一员，判断是不是分类中的大类结束；

                }
                if(empty($yuyans)){
                    //判断是不是模板分类中的一员，判断是不是分类中的大类开始；
                    $attr=M('attr')->where(array('id'=>$feilei))->where(array('parent_id'=>1))->find();
                    $searches=M('search')->where(array('attrter_id'=>$feilei))->select();
                    if($attr){//如果系大类，那么这个大类下的所有小分类的产品全部列出来；
                        $parent_attrs=M('attr')->where(array('parent_id'=>1))->select();
                        $attrters=M('attrter')->where(array('attr_id'=>$attr['id']))->select();
                        if($parent_attrs){
                            foreach ($parent_attrs as $k=>$v) {
                                $parent_ids[]=$v['id'];
                            }
                        }
                        if($attrters){
                            foreach ($attrters as $k =>$v) {
                                $attrterss[$k]['attr_id']=$attr['id'];
                                $attrterss[$k]['attrter_id']=$v['id'];
                                $newArr[$k]=$this->getGoods_id($v['id']);
                            }
                        }
                        foreach ($newArr as $k =>$v) {
                            foreach ($v as $k1 =>$v1) {
                                $feileis[]=$v1;
                            }
                        }
                        $colors=$this->getGoods_id($color);
                        $bujus=$this->getGoods_id($buju);
                        $map=array_intersect($feileis,$bujus,$yuyans);
                    }else{//如果不是大类，那么就只显示该小类的产品 列表出来；
                        $map=array_intersect($colors,$bujus,$feileis);
                    }
                    //判断是不是模板分类中的一员，判断是不是分类中的大类结束；

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
                    //判断是不是模板分类中的一员，判断是不是分类中的大类开始；
                    $attr=M('attr')->where(array('id'=>$feilei))->where(array('parent_id'=>1))->find();
                    $searches=M('search')->where(array('attrter_id'=>$feilei))->select();
                    if($attr){//如果系大类，那么这个大类下的所有小分类的产品全部列出来；
                        $parent_attrs=M('attr')->where(array('parent_id'=>1))->select();
                        $attrters=M('attrter')->where(array('attr_id'=>$attr['id']))->select();
                        if($parent_attrs){
                            foreach ($parent_attrs as $k=>$v) {
                                $parent_ids[]=$v['id'];
                            }
                        }
                        if($attrters){
                            foreach ($attrters as $k =>$v) {
                                $attrterss[$k]['attr_id']=$attr['id'];
                                $attrterss[$k]['attrter_id']=$v['id'];
                                $newArr[$k]=$this->getGoods_id($v['id']);
                            }
                        }
                        foreach ($newArr as $k =>$v) {
                            foreach ($v as $k1 =>$v1) {
                                $feileis[]=$v1;
                            }
                        }
                        $yuyans=$this->getGoods_id($yuyan);
                        $map=array_intersect($feileis,$yuyans);
                    }else{//如果不是大类，那么就只显示该小类的产品 列表出来；
                        $map=array_intersect($feileis,$yuyans);
                    }
                    //判断是不是模板分类中的一员，判断是不是分类中的大类结束；

                }
                if(empty($colors) && empty($yuyans)){
                    //判断是不是模板分类中的一员，判断是不是分类中的大类开始；
                    $attr=M('attr')->where(array('id'=>$feilei))->where(array('parent_id'=>1))->find();
                    $searches=M('search')->where(array('attrter_id'=>$feilei))->select();
                    if($attr){//如果系大类，那么这个大类下的所有小分类的产品全部列出来；
                        $parent_attrs=M('attr')->where(array('parent_id'=>1))->select();
                        $attrters=M('attrter')->where(array('attr_id'=>$attr['id']))->select();
                        if($parent_attrs){
                            foreach ($parent_attrs as $k=>$v) {
                                $parent_ids[]=$v['id'];
                            }
                        }
                        if($attrters){
                            foreach ($attrters as $k =>$v) {
                                $attrterss[$k]['attr_id']=$attr['id'];
                                $attrterss[$k]['attrter_id']=$v['id'];
                                $newArr[$k]=$this->getGoods_id($v['id']);
                            }
                        }
                        foreach ($newArr as $k =>$v) {
                            foreach ($v as $k1 =>$v1) {
                                $feileis[]=$v1;
                            }
                        }
                        $bujus=$this->getGoods_id($buju);
                        $map=array_intersect($feileis,$yuyans);
                    }else{//如果不是大类，那么就只显示该小类的产品 列表出来；
                        $map=array_intersect($feileis,$bujus);
                    }
                    //判断是不是模板分类中的一员，判断是不是分类中的大类结束；

                }
                if(empty($bujus) && empty($yuyans)){
                    //判断是不是模板分类中的一员，判断是不是分类中的大类开始；
                    $attr=M('attr')->where(array('id'=>$feilei))->where(array('parent_id'=>1))->find();
                    $searches=M('search')->where(array('attrter_id'=>$feilei))->select();
                    if($attr){//如果系大类，那么这个大类下的所有小分类的产品全部列出来；
                        $parent_attrs=M('attr')->where(array('parent_id'=>1))->select();
                        $attrters=M('attrter')->where(array('attr_id'=>$attr['id']))->select();
                        if($parent_attrs){
                            foreach ($parent_attrs as $k=>$v) {
                                $parent_ids[]=$v['id'];
                            }
                        }
                        if($attrters){
                            foreach ($attrters as $k =>$v) {
                                $attrterss[$k]['attr_id']=$attr['id'];
                                $attrterss[$k]['attrter_id']=$v['id'];
                                $newArr[$k]=$this->getGoods_id($v['id']);
                            }
                        }
                        foreach ($newArr as $k =>$v) {
                            foreach ($v as $k1 =>$v1) {
                                $feileis[]=$v1;
                            }
                        }
                        $colors=$this->getGoods_id($color);
                        $map=array_intersect($feileis,$colors);
                    }else{//如果不是大类，那么就只显示该小类的产品 列表出来；
                        $map=array_intersect($feileis,$colors);
                    }
                    //判断是不是模板分类中的一员，判断是不是分类中的大类结束；

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
                if($colors==0 && $buju==0  && $yuyan==0){
                    //判断是不是模板分类中的一员，判断是不是分类中的大类开始；
                    $attr=M('attr')->where(array('id'=>$feilei))->where(array('parent_id'=>1))->find();
                    $searches=M('search')->where(array('attrter_id'=>$feilei))->select();
                    if($attr){//如果系大类，那么这个大类下的所有小分类的产品全部列出来；
                        $parent_attrs=M('attr')->where(array('parent_id'=>1))->select();
                        $attrters=M('attrter')->where(array('attr_id'=>$attr['id']))->select();
                        if($parent_attrs){
                            foreach ($parent_attrs as $k=>$v) {
                                $parent_ids[]=$v['id'];
                            }
                        }
                        if($attrters){
                            foreach ($attrters as $k =>$v) {
                                $attrterss[$k]['attr_id']=$attr['id'];
                                $attrterss[$k]['attrter_id']=$v['id'];
                                $newArr[$k]=$this->getGoods_id($v['id']);
                            }
                        }
                        /*print_r($attrterss);die;*/
                        foreach ($newArr as $k =>$v) {
                            foreach ($v as $k1 =>$v1) {
                                $map[]=$v1;
                            }
                        }
                    }else{//如果不是大类，那么就只显示该小类的产品 列表出来；
                        $map=$feileis;
                    }
                    //判断是不是模板分类中的一员，判断是不是分类中的大类结束；
                }
                /*判断三个数组为空结束*/
                /*判断没有空开始*/
                if($feileis && $colors  && $bujus  && $yuyans){
                    //判断是不是模板分类中的一员，判断是不是分类中的大类开始；
                    $attr=M('attr')->where(array('id'=>$feilei))->where(array('parent_id'=>1))->find();
                    $searches=M('search')->where(array('attrter_id'=>$feilei))->select();
                    if($attr){//如果系大类，那么这个大类下的所有小分类的产品全部列出来；
                        $parent_attrs=M('attr')->where(array('parent_id'=>1))->select();
                        $attrters=M('attrter')->where(array('attr_id'=>$attr['id']))->select();
                        if($parent_attrs){
                            foreach ($parent_attrs as $k=>$v) {
                                $parent_ids[]=$v['id'];
                            }
                        }
                        if($attrters){
                            foreach ($attrters as $k =>$v) {
                                $attrterss[$k]['attr_id']=$attr['id'];
                                $attrterss[$k]['attrter_id']=$v['id'];
                                $newArr[$k]=$this->getGoods_id($v['id']);
                            }
                        }
                        foreach ($newArr as $k =>$v) {
                            foreach ($v as $k1 =>$v1) {
                                $feileis[]=$v1;
                            }
                        }
                        $colors=$this->getGoods_id($color);
                        $bujus=$this->getGoods_id($buju);
                        $yuyans=$this->getGoods_id($yuyan);
                        $map=array_intersect($feileis,$colors,$bujus,$yuyans);
                    }else{//如果不是大类，那么就只显示该小类的产品 列表出来；
                        $map=array_intersect($feileis,$colors,$bujus,$yuyans);
                    }
                    //判断是不是模板分类中的一员，判断是不是分类中的大类结束；

                }
                /*判断没有空结束*/
                /*判断4个都为空开始*/
                if(empty($feileis) && empty($colors) && empty($bujus)  && empty($yuyans)){
                    //这里判断filter各参数不为0，但可能会出现没有相关商品开始；
                    if($feilei!=0 || $color!=0 || $buju!=0 || $yuyan!=0){
                        $count=0;
                    }else{
                        $goods=M('goods');
                        $count      = $goods->where($where)->count();//数据的总数；
                        $pages=ceil($count/$page_nums);//计算一共有多少页数据；
                        if($yem>=$pages){//判断如果传过来的页码大于最多页码，就直接等最大页码 ；
                            $yem=$pages;
                        }
                        $goodres=$goods->where($where)->order($order)->limit($page_nums*($yem-1),$page_nums)->select();
                    }
                }else{//判断除了前四个参数为空的其它情况的数组分页；;
                    $newMap=implode(',',$map);
                    $goodss=M('goods')->where($where)->where(array('id'=>array('IN',$newMap)))->order($order)->select();
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
            $count      = $goods->where($where)->count();//数据的总数；
            $goodres=$goods->where($where)->order($order)->limit(0,$page_nums)->select();
            $pages=ceil($count/$page_nums);//计算一共有多少页数据；
        }
        $this->assign(array(
            'ac'=>$ac,
            'num'=>$num,
            'attrs'=>$attrs,
            'sorts'=>$sorts,
            'parent_ids'=>$parent_ids,
            'searches'=>$searches,
            'attrterss'=>$attrterss,


            'goodres'=>$goodres,

            'count'=>$count,
            'pages'=>$pages,
        ));
        $this->display();

    }

    //显示VIP栏目商品内容页
    public function content($id){
        $goods=D('goods');
        if($id ){
            $info=$goods->where(array('id'=>$id))->find();

            $goodsInfo=M('GoodsInfo')->where(array('goods_id'=>$info['id']))->find();
            $attrtype=M('attrtype')->where(array('id'=>$info['attrtype_id']))->find();
            //商品内容模板里的正文头部的导航内容开始
            $cateInfo=M('cate')->where(array('id'=>$info['cate_id']))->find();
            $searchs=M('search')->where(array('goods_id'=>$info['id']))->select();
            $store=M('GoodsStore')->where(array('user_id'=>$_SESSION['userid']))->find();
            if($searchs){
                $attr_id=  $searchs[0]['attr_id'];
                $attr=M('attr')->where(array('id'=>$attr_id))->find();
            }
            //商品内空模板里正文头部下面导航内容
            //下载权限，会员种类
            if($info['goods_vips']){
                $vips=M('vip')->where(array('id'=>array('IN',$info['goods_vips'])))->select();
            }
            /*print_r($vips);die;*/
            if($info){
                $this->getCates();
                $cates=M('cate')->select();
                $this->assign(array(
                    'cates'=>$cates,
                    'info'=>$info,
                    'goodsInfo'=>$goodsInfo,
                    'attrtype'=>$attrtype,
                    'cateInfo'=>$cateInfo,
                    'searchs'=>$searchs,
                    'attr'=>$attr,
                    'store'=>$store,
                    'vips'=>$vips,
                ));
                $this->display();
            }else{
                $this->error('非常操作');
            }
        }else{
            return false;
        }
    }

    //处理商品内容页，下载资源 权限 与Ajax  downloadZipBox交互数据
    /*验证会员有没有资格下载资源*/
    public function getLoad(){
        if(IS_AJAX){
            $this->checkLogin();
            $this->checkCookies();
            $viptype=I('viptype');
            $goods_jbin=I('goods_jbin');
            $goods_id=I('goods_id');
            $userid=$_SESSION['userid'];
            $users=M('user');
            $goods=M('goods');
            $downloads=M('GoodsDownload');
            $goods_download=$downloads->where(array(array('user_id'=>$userid),array('goods_id'=>$goods_id)))->find();//首先取得这个产品是否有下载过记录；
            $user=$users->where(array('id'=>$userid))->find();
            if(!$goods_download){//没有下载过记录
                if($user['user_viptype']){
                    $goods_viptype=explode(',',$viptype);
                    if(in_array($user['user_viptype'],$goods_viptype)){
                        echo 1;//有权限下载
                        $goods->where(array('id'=>$goods_id))->setInc('download_num');//增加商品下载量+1
                        //新下载项，添加到下载表里；
                        $download=array(
                            'goods_id'=>$goods_id,
                            'user_id'=>$userid,
                            'download_time'=>time(),
                        );
                        $downloads->add($download);//把新下载记录添加到下载表；
                        return;
                    }
                }
                if($user['user_jbin']>=$goods_jbin){
                    echo 4;//够金币，可以下载 ；
                    $user['user_jbin']-=$goods_jbin;
                    $users->where(array('id'=>$userid))->save($user);//减去商品相应的金币；
                    $goods->where(array('id'=>$goods_id))->setInc('download_num');//增加商品下载量+1
                    //新下载项，添加到下载表里；
                    $download=array(
                        'goods_id'=>$goods_id,
                        'user_id'=>$userid,
                        'download_time'=>time(),
                    );
                    $downloads->add($download);//把新下载记录添加到下载表；
                }else{
                    echo 3;//金币不够；而且没有会员；
                }
            }else{//有下载过记录
                echo 0;//下载过，不需要再下载 ；
            }




        }

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