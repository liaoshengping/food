<?php
/**
 * Created by PhpStorm.
 * User: liaosp
 * Date: 2019/3/4
 * Time: 22:02
 */

namespace app\api\controller\v1;



use app\api\validate\IDMustIntValidate;
use app\api\validate\TestValidate;

class Banner
{
    /**
     * @param $id
     * @url /banner/:id
     * @http GET
     */
    public function getBanner($id){
        (new IDMustIntValidate())->goCheck();

    }
}