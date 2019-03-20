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


namespace app\testapi\logic;


use app\testapi\model\WechatUser;
use app\testapi\provider\WechatApp;

class WechatUserLogic
{
    public function getUserInfo($openid){
        $wechat_user_model = new WechatUser();
        $user_info = $wechat_user_model->getUser();
        //新增用户
        if(empty($user_info)){
            $user_obj = new WechatApp();
            $data =$user_obj->init()->getUser()->getUserInfo($openid);

            //根据access token 获取用户信息
            $insert_data =[
                'openid'=>$openid
            ];
            $wechat_user_model->insertUser($insert_data);
        }
    }

}