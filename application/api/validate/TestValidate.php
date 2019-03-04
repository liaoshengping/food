<?php
/**
 * Created by PhpStorm.
 * User: liaosp
 * Date: 2019/3/4
 * Time: 22:38
 */

namespace app\api\validate;




class TestValidate extends BaseValidate
{
    protected $rule =[
        'id'=>'require|number'
    ];
}