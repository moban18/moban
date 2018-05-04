<?php


//台后左则，获取控制器和方法结构以达到，自动选择
    function get_action()
    {
        return $ac=CONTROLLER_NAME.'/'.ACTION_NAME;
    }



//把数字为下标的数组，重组成字符串，如："1,2,3,4"

    function ArrToStr($arr)
    {
        if(is_array($arr)){
            foreach ($arr as $k=>$v){
                $str.=','.$v;
            }
            $str=substr($str,1,strlen($str)-1);
            return $str;
        }else{
                return $arr;
        }
    }

//加密Cookies,自动登陆,$type=1时为解密
    function encry($value,$type=0){
        $key=md5('www.moban18.com');//指定加密KEY
        if($type){
            $str2=base64_decode($value);
            return $key ^ $str2;
        }else{
            $str1=base64_encode($key ^ $value);
            $str2=str_replace('=','',$str1);
            return $str2;

        }

    }

?>