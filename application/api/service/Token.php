<?php
/**
 * author      : firecarl
 * createTime  : 2020/6/9 11:29
 * description :
 */


namespace app\api\service;


class Token
{
    public static function generateToken(){
        $randChars = getRandChar(32);
        //用三组字符串，进行md5加密
        $timestamp = $_SERVER['REQUEST_TIME'];
        $salt = config('secure.token_salt');
        return md5($randChars.$timestamp.$salt);
    }
}