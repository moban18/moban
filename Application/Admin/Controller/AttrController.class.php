<?php
namespace Admin\Controller;
use Think\Controller;
class attrController extends CommonController {

    public function index(){
        $ac=$this->getAc();
        $attr=D('attr');
        $where=array(
            'parent_id'=>0,
        );
        $attrtypes=M('attrtype')->select();
        $count      = $attr->where($where)->count();
        $Page       = new \Think\Page($count,15);
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $show       = $Page->show();
        $attrs=$attr->alias('a')->field('a.id,a.attr_name,a.attr_value,a.parent_id,b.attrtype_name')->join('LEFT JOIN moban_attrtype b ON a.attrtype_id=b.id')->where(array('a.parent_id'=>0,))->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign(
            array(
                'ac'=>$ac,
                'attrs'=>$attrs,
                'attrtypes'=>$attrtypes,
                'page'=>$show
            )
        );
        $this->display();
    }

    public function add(){
        $ac=$this->getAc();
        $attr=D('attr');
        if(IS_POST){
            if(I('parent_id')==0){
               $data=array(
                    'is_attr'=>trim(I('is_attr')),
                    'attrtype_id'=>trim(I('attrtype_id')),
                    'parent_id'=>trim(I('parent_id')),
                    'attr_name'=>trim(I('attr_name')),
                    'attr_value'=>trim(I('attr_value')),
                );
                if($attr->create($data)){
                    if($id=$attr->add()){
                        $data['attr_id']=$id;
                        $this->success('添加属性成功');
                    }else{
                        $this->error('添加属性失败');
                    }

                }else{
                   $this->error($attr->getError());
                }

            }else{
                $data=array(
                    'attr_name'=>trim(I('attr_name')),
                    'attr_value'=>trim(I('attr_value')),
                    'parent_id'=>I('parent_id'),
                    'is_attr'=>trim(I('is_attr')),
                );
                if($attr->create($data)){
                    if($id=$attr->add()){
                        $data['attr_id']=$id;
                        $this->success('添加属性成功');
                    }else{
                        $this->error('添加属性失败');
                    }
                }else{
                    $this->error($attr->getError());
                }
            }
        }else{
            $attrtypes=M('attrtype')->select();
            $this->assign(
                array(
                    'attrtypes'=>$attrtypes,
                    'ac'=>$ac,
                )
            );
            $this->display();
        }
    }

    public function edit(){
        $attr=D('attr');
        $ac=$this->getAc();
        $id=I('id');
        $attrs=$attr->find($id);
        $attres=$attr->where(array('parent_id'=>$attrs['id']))->select();
        $attrtypes=M('attrtype')->select();
        $this->assign(
            array(
                'attrs'=>$attrs,
                'attres'=>$attres,
                'attrtypes'=>$attrtypes,
                'ac'=>$ac,
            )

        );
        $this->display();

    }
    //删除属性，先查找有没有子属性，如果有，先处理字属性，再处理
    public function del($id){
        $attr=D('attr');
        $parent=$attr->where(array('parent_id'=>$id))->select();
        if(!empty($parent)){
            $attr->get_parent_attr($parent);
        }else{
            $attr->del_attrter($id);
        }
        if($attr->where(array('id'=>$id))->delete()){
            $this->success('删除属性成功',U('Attr/index'));
        }else{
            $this->error('删除属性失败',U('Attr/index'));
        }


    }
    //登陆退出，清除session;
    public function out(){
        session('a_id',null);
        session('a_name',null);
        $this->redirect('Login/index');
    }

    //添加属性，取得attr属性与AJAX交换数据
    public function getAttr(){
            $attrtype_id=I('attrtype_id');
            $attres=M('attr')->where(array('attrtype_id'=>$attrtype_id))->select();
            echo json_encode($attres);
    }
    //添加属性，取得attr子属性与AJAX交换数据
    public function getAttrs(){
        $id=I('id');
        $attres=M('attr')->select($id);
        echo json_encode($attres);
    }
    //属性列表，查询栏与Ajax交换数据
    public function attrp(){
        $attr=D('attr');
        $attrtype_id=I('attrtype_id');
        if($attrtype_id!=0){
            $attrs=$attr->alias('a')->field('a.id,a.attr_name,a.attr_value,a.parent_id,b.attrtype_name')->join('LEFT JOIN moban_attrtype b ON a.attrtype_id=b.id')->where(array('attrtype_id'=>$attrtype_id))->select();
        }else{
            $id=$attr->getAttrtype_id();
            $where=array('attrtype_id'=>array('IN',$id));
            $attrs=$attr->alias('a')->field('a.id,a.attr_name,a.attr_value,a.parent_id,b.attrtype_name')->join('LEFT JOIN moban_attrtype b ON a.attrtype_id=b.id')->where($where)->select();

        }
        echo json_encode($attrs);
    }
    //属性列表，查询栏与Ajax交换数据
    public function getAttres(){
        $id=I('id');
        $attres=M('attr')->where(array('parent_id'=>$id))->select();
        echo json_encode($attres);
    }


    //编辑属性，修改属性名称 与Ajax数据交换
    public function attrName()
    {
        $data = array(
            'id' => I('id'),
            'attr_name' => I('attr_name'),
        );
        if ($info =M('attr')->save($data)) {
            echo 1;
        } else {
            echo 0;
        }
    }
    //编辑属性，修改属性值 与Ajax数据交换(有子集编辑的)
    public function attrValue(){
        $is_attr=I('is_attr');
        if($is_attr==1){
            $data = array(
                'id' => I('id'),
                'attr_value' => I('new_attr_value'),
            );
            static $b=array();
            $attr_name=I('attr_value');
            $arr=explode(',',$attr_name);
            $arr2=explode(',',$data['attr_value']);
            $attr=D('attr');
            foreach ($arr as $k=>$v) {
                $info=$attr->where(array('attr_name'=>$v))->find();
                $data1[]=$info['id'];
            }
            $newarr=array_combine($data1,$arr2);
            foreach ($newarr as $k =>$v) {
                $b[$k]['id']=$k;
                $b[$k]['attr_name']=$v;
            }
            foreach ($b as $k=>$v) {
                $attr->where(array('id'=>$v['id']))->save($v);
            }
            if ($info =$attr->save($data)) {

                echo 1;
            } else {
                echo 0;
            }
        }else{
            $data=array(
                'id'=>I('id'),
                'attr_value'=>I('new_attr_value'),
            );
            $attr=M('attr');
            $attrter=M('attrter');
            $attrters=$attrter->where(array('attr_id'=>$data['id']))->select();
            if(!empty($attrters)){
                foreach ($attrters as $k=>$v) {
                    $id[]=$v['id'];
                }
                $str=implode(',',$id);
                $attrter->where(array('id'=>array('IN',$str)))->delete();//删除所有旧的属性
            }
            $new=explode(',',$data['attr_value']);
            foreach ($new as $k =>$v) {
                $info['attr_id']=$data['id'];
                $info['attr_value']=$v;
                $attrter->add($info);
            }
            $a=$attr->where(array('id'=>$data['id']))->save($data);//这里保存新的值
            if($a){
                echo 1;
            }else{
                echo 0;
            }
        }

    }

//编辑子属性，先删除attrter里的数据，再添加新数据 与Ajax数据交换(有子集编辑的)

        public function changeAttrter(){
            $attr_id=I('attr_id');
            $new_attr_value=I('attr_value');
            $attrter=M('attrter');
            $attr=M('attr');
            $old_attr_value=$attr->where(array('id'=>$attr_id))->find();
            if($old_attr_value['attr_value']!=$new_attr_value){
                    $new=array(
                        'id'=>$attr_id,
                        'attr_value'=>$new_attr_value,
                    );
                $info=$attrter->where(array('attr_id'=>$attr_id))->select();//开始查到所有的需要删除的数据
                if(!empty($info)){
                    foreach ($info as $k=>$v) {
                        $id[]=$v['id'];
                    }
                    $str=implode(',',$id);

                    $attrter->where(array('id'=>array('IN',$str)))->delete(); //删除的数据指定的
                }
                $attr_value=explode(',',$new_attr_value); //删除后，再添加新的子属性
                foreach ($attr_value as $k =>$v) {
                    $data['attr_id']=$attr_id;
                    $data['attr_value']=$v;
                    $attrter->add($data);

                 }
              $a=$attr->where(array('id'=>$attr_id))->save($new);//这里保存新的值*/
                if($a){
                    echo 1;
                }else{
                    echo 0;
                }
            }



        }





}







