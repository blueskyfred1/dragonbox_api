<?php
/**
 * author      : firecarl
 * createTime  : 2020/6/8 15:40
 * description :
 */


namespace app\api\controller\v1;


use app\api\validate\TokenGet;

class Token
{
    public function getToken($code = ''){
        (new TokenGet())->goCheck();
    }
}