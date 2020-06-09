<?php
/**
 * author      : firecarl
 * createTime  : 2020/6/9 16:07
 * description :
 */


namespace app\api\model;


class ProductImage extends BaseModel
{

    public function imageUrl(){
        return $this->belongsTo('Image','img_id','id');
    }
}