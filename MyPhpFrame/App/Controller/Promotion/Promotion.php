<?php
/**
 * 促销类
 * User: wen15th
 * Date: 2019/4/16
 * Time: 10:13 PM
 */
namespace App\Controller\Promotion;


use App\Controller\Controller;

class Promotion extends Controller
{

    public function getPromotionInfo()
    {
        $id = $this->params['id'];

        $promotionC = $this->loadC('Promotion\Promotion');
        return $promotionC->getPromotionInfo($id);
    }
}