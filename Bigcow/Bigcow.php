<?php
/**
 * 入口文件
 * User: 普修米洛斯 www.php63.cc
 * Date: 16/4/5
 * Time: 08:39
 */
//版本检测
if(version_compare(PHP_VERSION,'5.5.0','<')){
    die('php版本不能低于5.5');
}

//定义类的后缀
const CLASS_SUFFIX          = '.class.php';
define('SYSTEM_PATH')       OR      define('SYSTEM_PATH', __DIR__.'/');                              //定义系统目录
define('APP_PATH')          OR      define('APP_PATH', dirname($_SERVER['SCRIPT_FILENAME']).'/');   //定义应用目录路径
define('APP_DEBUG')         OR      define('APP_DEBUG', false);                                     //是否开启调试模式默认否
defined('APP_DEBUG')    or define('APP_DEBUG',      false); // 是否调试模式
//defind('LIB_PATH')  = '
//Core library'
