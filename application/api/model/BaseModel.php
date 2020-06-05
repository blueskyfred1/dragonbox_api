<?php
/**
 * author      : firecarl
 * createTime  : 2020/6/5 11:24
 * description :
 */


namespace app\api\model;


use think\Model;

class BaseModel extends Model
{
    protected function prefixImagUrl ($value){
        return config('setting.img_prefix').$value;
    }
}