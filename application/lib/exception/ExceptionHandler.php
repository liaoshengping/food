<?php
/**
 * Created by PhpStorm.
 * User: liaosp
 * Date: 2019/3/5
 * Time: 22:11
 */

namespace app\lib\exception;


use think\exception\Handle;
use \think\facade\Log;

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
            //在调试阶段，可以把tp自带的调试模式打开，调用父类的
            $switch =config('app_debug');
            if($switch == true){
                return parent::render($e);
            }
            $this->recordEerrorLog($e);
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

    /**
     * 记录系统未知错误，开发人员查看。
     * @param $e
     */
    public function recordEerrorLog($e){
        Log::init([
            'type'=>'File',
            'path'=>env('app_path').'errorlog',
            'level'=>['error'],
        ]);
        Log::record($e->getMessage(),'error');
    }
}