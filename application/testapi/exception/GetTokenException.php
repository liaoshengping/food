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


namespace app\testapi\exception;


use app\lib\exception\BaseException;

class GetTokenException extends BaseException
{
    public $code = '403';
    public $msg =  '验证失败';
    public $error_code = '41001';

}