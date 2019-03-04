<?php
/**
 * Created by PhpStorm.
 * User: liaosp
 * Date: 2019/3/4
 * Time: 22:54
 */

namespace app\api\validate;


class IDMustIntValidate extends BaseValidate
{
    protected $rule = [
        'id'=>'require|checkId|number'
    ];
    protected function checkId($value='',$rule='',$data =[],$field =''){
        if(is_int($value) && is_numeric($value)  && ($value + 0) > 0){
            return true;
        }else{
            return $field.'必须为正整数';
        }
    }
}