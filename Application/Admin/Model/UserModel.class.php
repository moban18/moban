<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model {

    protected  $_validate =array(
        array('user_email','','会员已经存在！',0,'unique',1),

    );







}

