<?php
/**
 * author      : firecarl
 * createTime  : 2020/6/3 14:43
 * description : 跟产品相关的API
 */


namespace app\api\controller\v1;


use app\api\validate\IDMustBePositiveInt;

class Product
{
    /** 获取指定id的产品信息
     * @url /product/:id
     * @http GET
     * @param $id 产品id
     */
    public function getProduct($id){
        (new IDMustBePositiveInt())->goCheck();
    }
}