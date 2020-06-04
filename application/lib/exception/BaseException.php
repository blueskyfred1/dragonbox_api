<?php
/**
 * author      : firecarl
 * createTime  : 2020/6/4 11:01
 * description :
 */


namespace app\lib\exception;


use think\Exception;

class BaseException extends Exception
{
    public $code = 400;          //HTTP 状态码 404，200
    public $msg = '参数错误';    //错误具体信息
    public $errorCode = 10000;   //自定义的错误码
}