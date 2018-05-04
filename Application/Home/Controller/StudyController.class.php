<?php
namespace Home\Controller;
use Think\Controller;
class StudyController extends CommonController {

    public function index($p=0){
        $this->getCates();
        $ac=$this->getAc();
        $article=M('article');

        if(I('cate')){
            $where['cate_id']=I('cate');
            $showCate=M('cate')->field('cate_url,cate_name')->where(array('id'=>I('cate')))->find();
        }else{
            $showCate=M('cate')->field('cate_url,cate_name')->where(array('id'=>6))->find();
        }
        $count=count($article->where($where)->select());
        if($p){
            $yem=$p;
            if($yem>$count){
                $yem=$p;
            }
        }else{
            $yem=1;
        }
        $page_num=5;//每页显示的文章条数；
        $articles=$article->where($where)->field('a.id,a.article_title,a.article_dec,a.article_comment,a.article_anthor,a.article_time,b.cate_name,b.cate_url')->alias('a')->join('LEFT JOIN moban_cate b ON a.cate_id=b.id')->order('article_time Desc')->limit($page_num*($yem-1),$page_num)->select();
        $pages=ceil($count/$page_num);
        //列表页sidbar 开始
        $cates=M('cate')->field('id,cate_name,cate_url,parent_id')->where(array('attrtype_id'=>2))->select();
        $newCates=$this->handleCates($cates);
        $newArticles=$this->getArticles($newCates);
        //列表页sidbar 结束
        $this->assign(array(
            'ac'=>$ac,
            'showCate'=>$showCate,
            'articles'=>$articles,
            'pages'=>$pages,
            'count'=>$count,
            'newArticles'=>$newArticles,
        ));
        $this->display();
    }
    public function content($id){
        if($id){
            $this->getCates();
            $ac=$this->getAc();
            $goodss=M('goods')->order('goods_time Desc')->limit(6)->select();
            //文章内容开始
            $articles=M('article');
            $article=$articles->where(array('id'=>$id))->find();
            if(!$article){
                $this->error('非法操作');
            }
            //正文中上一条数据，下一条数据开始
            $preSql='select * from moban_article where id=(select id from moban_article where id< '.$id.' limit 1)';
            $pre=$articles->query($preSql);
            $nexSql='select * from moban_article where id=(select id from moban_article where id> '.$id.' limit 1)';
            $nex=$articles->query($nexSql);
            //正文中上一条数据，下一条数据结束

            //文章内容结束
            //列表页sidbar 开始
            /*相关文章*/
           $articless=M('article')->field('a.id,a.article_title,a.article_time,b.cate_name,b.cate_url')->alias('a')->join('LEFT JOIN moban_cate b ON a.cate_id=b.id')->order('article_time Desc')->limit(20)->select();
            /*标签云*/
            $tabs=M('attrter')->where(array('attr_id'=>array('IN','5,6,7,8')))->select();
            //列表页sidbar 结束
            $this->assign(array(
                'ac'=>$ac,
                'goodss'=>$goodss,
                'article'=>$article,
                'pre'=>$pre,
                'nex'=>$nex,
                'articless'=>$articless,
                'tabs'=>$tabs,
            ));
            $this->display();
        }else{
            $this->error('非常操作');
        }
    }

    //文章搜索

    public function articleSearch($p=0){
        $s=strtolower(I('s'));
        $this->getCates();
        $ac=$this->getAc();
        if(I('cate')){
            $where['cate_id']=I('cate');
        }
        if($s){
            $where['article_title']=array('like','%'.$s.'%');
        }
        $article=M('article');
        $count=count($article->where($where)->select());
        if($p){
            $yem=$p;
            if($yem>$count){
                $yem=$p;
            }
        }else{
            $yem=1;
        }
        $page_num=5;//每页显示的文章条数；
        $articles=M('article')->where($where)->field('a.id,a.article_title,a.article_dec,a.article_comment,a.article_anthor,a.article_time,b.cate_name,b.cate_url')->alias('a')->join('LEFT JOIN moban_cate b ON a.cate_id=b.id')->order('article_time Desc')->limit($page_num*($yem-1),$page_num)->select();
        $pages=ceil($count/$page_num);
        //列表页sidbar 开始
        $cates=M('cate')->field('id,cate_name,cate_url,parent_id')->where(array('attrtype_id'=>2))->select();
        $newCates=$this->handleCates($cates);
        $newArticles=$this->getArticles($newCates);
        //列表页sidbar 结束
        $this->assign(array(
            'ac'=>$ac,
            'articles'=>$articles,
            'pages'=>$pages,
            'count'=>$count,
            'newArticles'=>$newArticles,
            's'=>$s,
        ));
        $this->display();

    }


    //处理cate的子栏目数组
    public function handleCates($cates,$parent_id=0,$level=0)
    {
        static $newCates = array();
        if (!empty($cates)) {
            foreach ($cates as $k => $v) {
                if ($v['parent_id'] == $parent_id) {
                    $v['level'] = $level;
                    $newCates[] = $v;
                    $this->handleCates($cates, $v['id'], $level + 1);
                }
            }
            return $newCates;
        }
    }
    //处理文章列表页，取不同栏目里的文章 ，限制
    public function getArticles($newCates){
        if($newCates){
            $article=M('article');
            $newArticles=array();
            foreach($newCates as $k =>$v){
                $newArticles[$k]=$v;
                $newArticles[$k]['articles']=$article->where(array('cate_id'=>$v['id']))->order('article_time Desc')->limit(11)->select();
            }
        }
       return $newArticles;
    }


}