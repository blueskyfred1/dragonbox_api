<?php
/**
 * author      : firecarl
 * createTime  : 2020/6/3 16:26
 * description : 校验器基类
 */


namespace app\api\validate;


use app\lib\exception\ParameterException;
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

    /**
     * @param $value
     * @param string $rule
     * @param string $data
     * @param string $field
     * @return bool|string 判断参数是否是正整数
     */
    protected function isPositiveInteger($value, $rule = '', $data = '', $field = ''){
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0){
            return true;
        }else{
            return false;
        }
    }

    /**
     * @param $value
     * @param string $rule
     * @param string $data
     * @param string $field
     * @return bool|string 判断参数是否为空
     */
    protected function isNotEmpty($value, $rule='', $data='', $field=''){
        if (empty($value)){
            return false;
        }else {
            return true;
        }
    }
}