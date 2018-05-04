<?php
namespace Admin\Model;
use Think\Model;
class LunModel extends Model {

    /*protected  $_validate =array(
        array('user_email','','会员已经存在！',0,'unique',1),

    );*/
/*处理多个图片链接，并用逗号连接成字符串*/
    public function handleLun($data){
            if(is_array($data)){
                $info= implode(',',$data);
                return $info;
            }
    }







}

