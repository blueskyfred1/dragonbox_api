<?php
/**
 * author      : firecarl
 * createTime  : 2020/6/3 16:00
 * description : id 正整数验证器
 */


namespace app\api\validate;


use think\Validate;

class IDMustBePositiveInt extends BaseValidate
{
    protected $rule = [

        'id' => 'require|isPositiveInteger'
    ];
}