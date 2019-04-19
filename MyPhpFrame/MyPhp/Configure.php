<?php
/**
 * Created by PhpStorm.
 * User: wen15th
 * Date: 2019/4/17
 * Time: 11:19 PM
 */

namespace MyPhp;


class Configure
{

    public static $_instance;

    /**
     * 私有化构造方法
     */
    private function __construct()
    {

    }

    /**
     * 获取实例
     */
    public static function getInstance()
    {
        if (empty($_instance) || !($_instance instanceof self)) {
            $_instance = new self;
        }

        return $_instance;
    }

    /**
     * 获取配置
     */
    public function getConfig($name)
    {

    }
}