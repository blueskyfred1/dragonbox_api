<?php
/**
 * author      : firecarl
 * createTime  : 2020/6/4 11:11
 * description :
 */


namespace app\lib\exception;


class ProductMissException extends BaseException
{
    public $code = 404;
    public $msg = '请求的Product不存在';
    public $errorCode = 20000;
}