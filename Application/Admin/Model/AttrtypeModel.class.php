<?php
namespace Admin\Model;
use Think\Model;
class AttrtypeModel extends Model {

    protected  $_validate =array(
        array('admin_name','','属性种类已经存在！',0,'unique',1),

    );







}

