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


namespace app\testapi\provider;


use JiaweiXS\WeApp\WeApp;

class WechatApp
{
    public function init(){
        $obj = new WeApp(yaconf('wechat.appid'),yaconf('wechat.secret'),'../runtime/cache');
        return $obj;
    }
}