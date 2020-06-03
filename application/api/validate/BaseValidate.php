<?php
/**
 * author      : firecarl
 * createTime  : 2020/6/3 16:26
 * description : 校验器基类
 */


namespace app\api\validate;


use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck(){
        $request = Request::instance();
        $params = $request->param();
        $result = $this->check($params);
        if (!$result){
            $error = $this->error;
            throw new Exception($error);
        }
    }
}