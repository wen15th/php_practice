<?php
/**
 * 自动加载类
 * Date: 2019/4/16
 * Time: 10:07 PM
 */

class AutoLoad
{

    /**
     * 加载类
     */
    public static function loadClass($class)
    {
        $classSplit = explode('\\', $class);

        $ext = '.php';
        $filePath = APP_ROOT . '/';
        foreach ($classSplit as $item) {
            $filePath = $filePath . $item . '/';
        }
        $filePath = rtrim($filePath, '/') . $ext;
        if (file_exists($filePath)) {
            require $filePath;
            return $filePath;
        }

        return false;
    }

}