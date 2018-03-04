<?php
namespace Admin\Model;
use Think\Model;
class AdminModel extends Model {

    protected  $_validate =array(
        array('admin_name','','管理员已经存在！',0,'unique',1),

    );







}

