<?php
/**
 * Created by PhpStorm.
 * User: liaosp
 * Date: 2019/3/5
 * Time: 22:58
 */

namespace app\lib\exception;


class ParamFailException extends BaseException
{
    public $code = '400';
    public $msg =  'Parameter error';
    public $error_code = '1001';

}