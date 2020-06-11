<?php
/**
 * author      : firecarl
 * createTime  : 2020/6/9 8:54
 * description :
 */


namespace app\api\model;


class User extends BaseModel
{
    public static function getByOpenID($openid){
      $user = self::where('openid','=',$openid)->find();
      return $user;
    }

    public function address(){
        return $this->hasOne('UserAddress','user_id','id');
    }
}