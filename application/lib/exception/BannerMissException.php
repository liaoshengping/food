<?php
/**
 * Created by PhpStorm.
 * User: liaosp
 * Date: 2019/3/5
 * Time: 22:28
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code = '400';
    public $msg =  'get banner information is fail';
    public $error_code = '4001';
}