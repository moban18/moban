<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends CommonController {

    public function index(){
        $ac=$this->getAc();
        $article=D('article');
        $count      = $article->count();
        $Page       = new \Think\Page($count,15);
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $show       = $Page->show();//
        $articles=$article->field('a.id,a.article_title,a.article_comment,a.article_anthor,a.article_time,b.cate_name')->alias('a')->join('LEFT JOIN moban_cate b ON a.cate_id=b.id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign(
            array(
                'ac'=>$ac,
                'articles'=>$articles,
                'page'=>$show,
            )
        );
        $this->display();
    }

    public function add(){
        $ac=$this->getAc();
        $article=D('article');
        if(IS_POST){
            $data=array(
                'article_title'=>I('article_title'),
                'cate_id'=>I('cate_id'),
                'article_comment'=>I('article_comment'),
                'article_anthor'=>I('article_anthor'),
                'article_content'=>I('article_content'),
                'article_time'=>time(),
            );
            if($article->create($data)){
                if($article->add()){
                    $this->configValue($data['article_anthor']);//记录新的作者。并写到Admin CONfig;
                    $this->success('添加文章成功',U('Article/index'));
                }else{
                    $this->error('添加文章失败');
                }
            }else{
                $this->error($article->getError());
            }
        }else{
            $anthors=C('ANTHOR');
            if(!empty($anthors)){
                $anthores=explode(',',$anthors);
            }
            $cates=M('cate')->where(array('attrtype_id'=>2))->select();
            $this->assign(
                array(
                    'ac'=>$ac,
                    'cates'=>$cates,
                    'anthores'=>$anthores,
                )
            );
            $this->display();
        }
    }

    public function edit(){
        $article=D('article');
        $ac=$this->getAc();
        if(IS_POST){
            $data=array(
                'id'=>I('id'),
                'atricle_title'=>I('atricle_title'),
                'cate_id'=>I('cate_id'),
                'article_comment'=>I('article_comment'),
                'article_anthor'=>I('article_anthor'),
                'article_content'=>I('article_content'),
            );
            if($article->create($data)){
                if($article->save()){
                    $this->success('修改文章成功');
                }else{
                    $this->error('修改文章失败');
                }
            }else{
                $this->error($article->getError());
            }
        }else{
            $id=I('id');
            $articles=$article->find($id);
            $cates=M('cate')->where(array('attrtype_id'=>2))->select();
            $this->assign(array(
                'articles'=>$articles,
                'cates'=>$cates,
                'ac'=>$ac,
            ));
            $this->display();
        }
    }



    public function del($id){
        $article=D('article');
        if($article->delete($id)){
            $this->success('删除文章成功',U('Article/index'));
        }else{
            $this->error('删除文章失败');
        }
    }


    //添加文章，修改作者，与配置文件Amdin/Conf/config.php数据交互
    public function configValue($a){
        $b=C('ANTHOR');
        $file='./Application/Admin/Conf/config.php';
        if(!empty($b)){
            $anthores=explode(',',$b);
            if(!in_array($a,$anthores)){
                $anthores[]=$a;
            }
            $str=implode(',',$anthores);
            $text=file_get_contents($file);
            $newAnthor=str_replace($b,$str,$text,$count);
            file_put_contents($file,$newAnthor);
        }else{
            $maid='\'ANTHOR\' =>';
            $old='\'ANTHOR\' =>\'\',';
            $str=$maid.'\''.$a.'\',';
            $text=file_get_contents($file);
            $newAnthor=str_replace($old,$str,$text,$count);
            file_put_contents($file,$newAnthor);
        }
    }

    public function test(){
        $file='./Application/Admin/Conf/config.php';
        $maid='\'ANTHOR\' =>';
        $a='qq';
        $old='\'ANTHOR\' =>\'\',';
        $str=$maid.'\''.$a.'\',';
        $text=file_get_contents($file);
        $newAnthor=str_replace($old,$str,$text,$count);
        echo $count;
        file_put_contents($file,$newAnthor);

    }

    //添加文章，清空所有作者，与配置文件Amdin/Conf/config.php数据交互
    public function delAnthor(){
        $b=C('ANTHOR');
        $file='./Application/Admin/Conf/config.php';
        $text=file_get_contents($file);
        $newAnthor=str_replace($b,'',$text,$count);
        file_put_contents($file,$newAnthor);
        echo 1;
    }


    public function out(){
        session('a_id',null);
        session('a_name',null);
        $this->redirect('Login/index');
    }


}







