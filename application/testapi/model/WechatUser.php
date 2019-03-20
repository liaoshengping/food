<?php

// +----------------------------------------------------------------------
// | ZKMALL
// +----------------------------------------------------------------------
// | Copyright (c) http://www.zhengkainet.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: ZKLIAOSHENGPING
// +----------------------------------------------------------------------
// +----------------------------------------------------------------------
// | DESCRIBE:
// +----------------------------------------------------------------------


namespace app\testapi\model;


use think\Model;

class WechatUser extends Model
{
    /**
     * 获取用户信息
     * @param array $_where
     */
    public function getUser($_where=[]){
        if(empty($_where)){
            $_where=[
                'is_delete'=>0
            ];
        }
        return $this->where($_where)->find();
    }

    /**
     * 插入
     * @param $data
     * @return int|string
     */
    public function insertUser($data){
        return $this->isUpdate(false)->allowField(true)->insertGetId($data);
    }

}