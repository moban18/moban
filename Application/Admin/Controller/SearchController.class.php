<?php
namespace Admin\Controller;
use Think\Controller;
class SearchController extends CommonController {

    public function index(){
        $ac=$this->getAc();
        $search=D('search');
        $count      = $search->count();
        $Page       = new \Think\Page($count,15);
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $show       = $Page->show();//
        $searchs=$search->field('a.id,a.goods_id,a.attr_name,a.attrter_id,b.goods_name')->alias('a')->join('LEFT JOIN moban_goods b ON a.goods_id=b.id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign(
            array(
                'ac'=>$ac,
                'searchs'=>$searchs,
                'page'=>$show,
            )
        );
        $this->display();
    }

    public function add(){

        $ac=$this->getAc();
        $search=D('search');
        if(IS_POST){
            $info=array(
                'goods_id'=>I('goods_id'),
                'values'=>I('search_value')
            );
            if(is_array($info)){
               $data= $search->changeValue($info);//MODEL层处理数据后，直接返回可用数据；
            }
            if(!empty($data)){
                foreach ($data as $k =>$v) {
                    $searchs=$search->add($v);
                }
                if($searchs){
                    $serarchss['goods_search']=count($data);
                    $goods=M('goods')->where(array('id'=>I('goods_id')))->save($serarchss);
                    $this->success('添加搜索属性成功');
                }else{
                    $this->error('添加搜索属性失败');
                }
           }

        }else{
            $goods=M('goods')->order('goods_time desc')->select();
            $cates=M('cate')->select();
            $attr=M('attr');
            $attrtypes=M('attrtype')->select();
            $parent=$attr->where(array('attrtype_id'=>1))->select();
            foreach ($parent as $k=>$v) {
                if($v['is_attr']==1){
                    $childs=$attr->where(array('parent_id'=>$v['id']))->select();

                }
            }
            $this->assign(
                array(
                    'ac'=>$ac,
                    'goods'=>$goods,
                    'cates'=>$cates,
                    'attrtypes'=>$attrtypes,
                    'parent'=>$parent,
                    'childs'=>$childs,
                )
            );
            $this->display();
        }
    }

   public function del($id){
       if($id){
            $search=D('search');
           if($search->delete($id)){
                $this->success('删除搜索成功',U('Search/index'));
           }else{
               $this->error('删除搜索失败');
           }
       }else{
           $this->error('非法操作',U('Search/index'));
       }

   }

    //增加搜索，选择不同产品，展现不同的栏目 ，与ajax数据交互
    public function getCates(){
        $goods_id=I('goods_id');
        $cate=M('cate');
        $goods=M('goods')->field('cate_id,attrtype_id')->find($goods_id);
        $cates=$cate->find($goods['cate_id']);
        $cates['attrtype_id']=$goods['attrtype_id'];
        echo json_encode($cates);

    }
    //增加搜索，选择不同种类，展现不同的attrtype,与AJAX数据交互
    public function getAttrs(){
        $attrtype_id=I('attrtype_id');
        $attr=M('attr');
        $attres=$attr->where(array('attrtype_id'=>$attrtype_id))->select();
        foreach ($attres as $k=>$v) {
            if ($v['is_attr'] == 1) {
                $childs = $attr->where(array('parent_id' => $v['id']))->select();
                $attres[$k]['childs']=$childs;
            }
        }
        echo json_encode($attres);
    }

//商品搜索属性列表，搜索标题处理
    public function searchOthers(){
        $title=I('goods_name');
        $where['goods_name']=array('like','%'.$title.'%');
        $ac=$this->getAc();
        $search=D('search');
        $searchs=$search->where($where)->field('a.id,a.goods_id,a.attr_name,a.attrter_id,b.goods_name')->alias('a')->join('LEFT JOIN moban_goods b ON a.goods_id=b.id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign(array(
            'ac'=>$ac,
            'searchs'=>$searchs,
        ));
        $this->display();


    }



}







