<?php
/**
 * author      : firecarl
 * createTime  : 2020/6/8 15:40
 * description : 跟token相关api
 */


namespace app\api\controller\v1;


use app\api\service\UserToken;
use app\api\validate\TokenGet;

class Token
{
    /**
     * 获取token令牌
     * @url /token/user
     * @http POST
     * @param string $code 微信小程序返回的code
     * @return array
     * @throws \app\lib\exception\ParameterException
     * @throws \think\Exception
     */
    public function getToken($code = ''){
        (new TokenGet())->goCheck();
        $ut = new UserToken($code);
        $token = $ut->get();
        return [
            'token' => $token
        ];
    }
}