<?php
/**
 * author      : firecarl
 * createTime  : 2020/6/3 16:26
 * description : 校验器基类
 */


namespace app\api\validate;


use app\lib\exception\ParameterException;
use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck(){
        $request = Request::instance();
        $params = $request->param();
        $result = $this->batch()->check($params);
        if (!$result){
            $e = new ParameterException([
                'msg' => $this->error,

            ]);
            throw $e;
        }else{
            return true;
        }
    }
}