<?php
namespace Home\Model;
use Think\Model;
class RegistModel extends Model {

    protected  $_validate =array(
        array('user_email','','Email已存在！',0,'unique',1),

    );







}

