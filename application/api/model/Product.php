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

    protected $hidden = ['id','name','create_time','update_time','delete_time'];
    public function imgs(){
       return $this->hasMany('ProductImage','product_id','id');
    }
    /**
     * @param $value  数据库中的URL
     * @return string 获取产品主图完整URL
     */
    public function getMainImgUrlAttr($value){
        return $this->prefixImageUrl($value);
    }

    public function getDetailImg1UrlAttr($value){
        return $this->prefixImageUrl($value);
    }

    public function getDetailImg2UrlAttr($value){
        return $this->prefixImageUrl($value);
    }

    public function getDetailImg3UrlAttr($value){
        return $this->prefixImageUrl($value);
    }

    public function getDetailImg4UrlAttr($value){
        return $this->prefixImageUrl($value);
    }

    public static function getProductDetail($id){
        $product = self::with([
            'imgs' => function($query){
                $query->with('imageUrl')->order('sort','asc');
            }
        ])->find($id);
        return $product;
    }
}