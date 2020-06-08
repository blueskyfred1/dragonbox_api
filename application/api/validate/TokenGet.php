<?php
/**
 * author      : firecarl
 * createTime  : 2020/6/8 15:41
 * description :
 */


namespace app\api\validate;


class TokenGet extends BaseValidate
{
    protected $rule = [
        'code' => 'require|isNotEmpty'
    ];

    protected $message = [
        'code' => 'code为空'
    ];
}