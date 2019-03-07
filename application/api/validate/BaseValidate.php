<?php
namespace app\api\validate;
use app\lib\exception\ParamFailException;
use think\Exception;
use think\Validate;

/**
 * Created by PhpStorm.
 * User: liaosp
 * Date: 2019/3/4s
 * Time: 22:22
 */
class BaseValidate extends Validate
{
    public function goCheck(){
        $params = \think\facade\Request::param();
        $res =$this->check($params);
        if(!$res){
            $error = $this->error;
            $e = new ParamFailException($error);
            $e->msg = $error;
            throw $e;
        }else{
            return true;
        }
    }

}