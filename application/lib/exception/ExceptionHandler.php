<?php
/**
 * Created by PhpStorm.
 * User: liaosp
 * Date: 2019/3/5
 * Time: 22:11
 */

namespace app\lib\exception;


use think\exception\Handle;

class ExceptionHandler extends Handle
{
    private $code;
    private $msg;
    private $error_code;
    public function render(\Exception $e)
    {
        if($e instanceof BaseException){
            //如果自定义异常（已知的异常）
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->error_code = $e->error_code;
        }else{
            //服务器异常，自己写的烂代码，写入日志
            $this->code ='500';
            $this->msg = '服务器错误';
            $this->error_code = '999';
        }
        $result = [
            'msg'=>$this->msg,
            'error_code'=>$this->error_code
        ];
        return json($result,$this->code);
    }
}