<?php
/**
 * Created by PhpStorm.
 * User: liaosp
 * Date: 2019/3/4
 * Time: 22:02
 */

namespace app\api\controller\v1;



use app\api\validate\IDMustIntValidate;
use app\lib\exception\BannerMissException;
use \app\api\model\Banner as BannerModel;

class Banner
{
    /**
     * @param $id
     * @url /banner/:id
     * @http GET
     */
    public function getBanner($id){
        (new IDMustIntValidate())->goCheck();

        $banner_info =BannerModel::getBanerById();
            1/0;
        if(!$banner_info){
            throw new BannerMissException();
        }

    }
}