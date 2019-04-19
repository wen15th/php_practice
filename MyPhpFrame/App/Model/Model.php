<?php
/**
 * Model层基类
 * Date: 2019/4/17
 * Time: 10:03 PM
 */

namespace App\Model;


class Model
{
    /**
     * @var pdo多例
     */
    protected static $_pdoInstance;

    /**
     * 私有 constructor. 无法直接 new 对象
     */
    private function __construct()
    {

    }

    /**
     * 获取pdo连接实例
     * @param $instance
     */
    protected static function getPdoInstance($instance)
    {
        if (empty(self::$_pdoInstance[$instance])) {
            $dbConf = config('Mysql');
            $_pdoInstance[$instance] = new PDO($dbConf['dsn'], $dbConf['user'], $dbConf['psw']);
        }

        return $_pdoInstance[$instance];
    }
}