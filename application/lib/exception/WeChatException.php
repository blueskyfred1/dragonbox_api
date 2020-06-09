<?php
/**
 * author      : firecarl
 * createTime  : 2020/6/9 10:06
 * description :
 */


namespace app\lib\exception;


class WeChatException extends BaseException
{
    public $code = 400;
    public $msg = '微信服务器接口调用失败';
    public $errorCode = 999;
}