<?php
/**
 * author      : firecarl
 * createTime  : 2020/6/3 14:43
 * description : 跟产品相关的API
 */


namespace app\api\controller\v1;

use app\api\model\Product as ProductModel;


use app\api\validate\IDMustBePositiveInt;
use app\api\validate\ProductNew;
use app\lib\exception\ProductMissException;
use app\lib\exception\SuccessMessage;
use think\Exception;

class Product
{
    /** 获取指定id的产品信息
     * @url /product/:id
     * @http GET
     * @param $id 产品id
     */
    public function getProduct($id){
        (new IDMustBePositiveInt())->goCheck();
        $product = ProductModel::getProductDetail($id);
        if (!$product){
            throw new ProductMissException();
        }
        return $product;
    }


    /**
     * 返回所有产品
     * @return ProductModel[]|false
     * @throws ProductMissException
     * @throws \think\exception\DbException
     * @url  /product/all
     * @http GET
     */
    public function getProductAll(){
        $products = ProductModel::all([]);
        if ($products->isEmpty()){
            throw new ProductMissException();
        }
        return $products;
    }

    /**
     * 发布商品
     * @url /product/create
     * @http POST
     */
    public function createProduct(){
        (new ProductNew())->goCheck();
        $product = new ProductModel($_POST);
        $product->save();
        return json(new SuccessMessage(), 201);

    }
}