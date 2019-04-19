<?php
/**
 * Date: 2019/4/17
 * Time: 10:39 PM
 */

namespace App\Component\Promotion;


use App\Controller\Controller;

class Promotion extends Controller
{

    public function getPromotionInfo($id)
    {
        $promotionM = $this->loadM('Mysql\Promotion');
        return $promotionM->getPromotionInfo($id);
    }
}