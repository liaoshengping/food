<?php
namespace app\api\validate;
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
            throw new Exception($error);
        }else{
            return true;
        }
    }

}