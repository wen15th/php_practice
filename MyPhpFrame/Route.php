<?php
/**
 * 路由类
 * User: wen15th
 * Date: 2019/4/16
 * Time: 10:23 PM
 */

class Route
{
    /**
     * @var
     */
    public $uri;

    /**
     * @var 方法
     */
    public $method;

    /**
     * @var 类名
     */
    public $className;

    public function __construct()
    {
        $this->uri = $_REQUEST['url'];
    }

    /**
     * @return string|类名
     */
    public function getClassName()
    {
        $className = '\App\Controller\\';
        $uriArr = explode('/', $this->uri);
        array_pop($uriArr);
        foreach ($uriArr as $item) {
            $className = $className . $item . '\\';
        }
        $this->className = rtrim($className, '\\');

        return $this->className;
    }

    /**
     * @return 方法
     */
    public function getMethod()
    {
        $uriArr = explode('/', $this->uri);
        $this->method = end($uriArr);
        return $this->method;
    }

}