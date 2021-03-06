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


namespace app\testapi\controller;

use app\testapi\exception\GetTokenException;
use app\testapi\logic\WechatUserLogic;
use app\testapi\model\WechatUser;
use app\testapi\provider\WechatApp;
class Wechat
{
    public function getToken($code){
        $obj = new WechatApp();
        $html =$obj->init()->getSessionKey($code);
        $arr = json_decode($html,true);
        if(!array_key_exists('openid',$arr)){
            throw new GetTokenException();
        }
        $openId = $arr['openid'];
        $wechat_user_logic = new WechatUserLogic();
        $user_info = $wechat_user_logic->getUserInfo($openId);


    }

}