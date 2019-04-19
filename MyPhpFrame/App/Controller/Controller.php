<?php
/**
 * 控制器基类
 * Date: 2019/4/16
 * Time: 10:14 PM
 */

namespace App\Controller;


class Controller
{

    /**
     * @var 请求参数
     */
    protected $params;

    /**
     * @var 组件实例
     */
    protected static $_compInstance;

    /**
     * @var 模型实例
     */
    protected static $_modelInstance;


    public function __construct()
    {
        $this->params = $_REQUEST;
    }

    /**
     * @param $name 获取Component实例
     */
    protected function loadC($name)
    {
        if (empty(self::$_compInstance[$name]) || !(self::$_compInstance[$name] instanceof Controller)) {
            $component = 'App\Component\\' . $name;
            self::$_compInstance[$name] = new $component();
        }

        return self::$_compInstance[$name];
    }

    /**
     * @param $name 获取Model实例
     */
    protected function loadM($name)
    {
        if (empty(self::$_modelInstance[$name]) || !(self::$_modelInstance[$name] instanceof Model)) {
            $model = 'App\Model\\' . $name;
            self::$_modelInstance[$name] = new $model();
        }

        return self::$_modelInstance[$name];
    }

}