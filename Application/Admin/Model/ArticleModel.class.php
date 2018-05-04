<?php
namespace Admin\Model;
use Think\Model;
class ArticleModel extends Model {

    /*protected  $_validate =array(
        array('admin_name','','管理员已经存在！',0,'unique',1),

    );*/


    //删除文章前，删除UEdite上传的图片
    public function _before_delete($options){
        $id=$options['where']['id'];
        $article=D('article');
        $info=$article->find($id);
        $text=stripslashes($info['article_content']);
        preg_match_all('/\/ueditor\/\d*\/\d*\.[jpg|jpeg|png|bmp|gif]*/i',$text,$arr);
        if($arr){
            foreach ($arr[0] as $k =>$v) {
                $str='.'.$v;
                unlink($str);
            }
        }
    }






}

