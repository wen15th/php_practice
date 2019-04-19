<?php
/**
 * 促销
 * Date: 2019/4/17
 * Time: 10:02 PM
 */

namespace App\Model\Mysql;


use App\Model\Model;


class Promotion extends Model
{

    /**
     * @var
     */
    protected $db;

    protected $table;

    /**
     * Promotion constructor.
     */
    public function __construct()
    {
        $this->db = self::getPdoInstance('promotion');
        $this->table = 'xes_promotions';
    }

    /**
     * 获取促销信息
     */
    public function getPromotionInfo($id)
    {
        $testData = [
            'id' => $id,
            'name' => 'promotion test',
            'type' => 2,
            'start_time' => '2019-04-15 10:00:00',
            'end_time' => '2019-04-20 23:59:59',
            'promotion_price' => 900,
            'status' => 1
        ];

        return $testData;
    }

}