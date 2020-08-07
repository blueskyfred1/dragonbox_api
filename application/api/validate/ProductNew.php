<?php


namespace app\api\validate;


class ProductNew extends BaseValidate
{
    protected $rule = [
        'name' => 'require|isNotEmpty',
        'price' => 'require|isNotEmpty',
        'main_img_url' => 'require|isNotEmpty',
        'detail_img1_url' => 'require|isNotEmpty',
        'detail_img2_url' => 'require|isNotEmpty',
        'detail_img3_url' => 'require|isNotEmpty',
        'detail_img4_url' => 'require|isNotEmpty',
        'summary' => 'require|isNotEmpty',
        'date' => 'require|isNotEmpty',
        'type' => 'require|number'
    ];
}