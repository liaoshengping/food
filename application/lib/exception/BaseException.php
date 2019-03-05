<?php
namespace app\lib\exception;
use Exception;
use think\exception\Handle;

/**
 * Created by PhpStorm.
 * User: liaosp
 * Date: 2019/3/5
 * Time: 22:07
 */
class BaseException extends Exception
{
    public $code = '400';
    public $msg = '参数错误';
    public $error_code = '999';


}