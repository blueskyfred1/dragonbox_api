<?php
/**
 * author      : firecarl
 * createTime  : 2020/6/4 10:30
 * description :
 */


namespace app\api\model;


use think\Model;

class Product extends BaseModel
{

    public function imgs(){
       return $this->hasMany('ProductImage','product_id','id');
    }
    /**
     * @param $value  数据库中的URL
     * @return string 获取产品主图完整URL
     */
    public function getMainImgUrlAttr($value){
        return $this->prefixImagUrl($value);
    }

    public function getDetailImag1UrlAttr($value){
        return $this->prefixImagUrl($value);
    }

    public function getDetailImag2UrlAttr($value){
        return $this->prefixImagUrl($value);
    }

    public function getDetailImag3UrlAttr($value){
        return $this->prefixImagUrl($value);
    }

    public function getDetailImag4UrlAttr($value){
        return $this->prefixImagUrl($value);
    }

    public static function getProductDetail($id){
        $product = self::with('imgs')->find($id);
        return $product;
    }
}