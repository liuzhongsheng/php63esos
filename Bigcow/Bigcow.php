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
define('APP_PATH')          OR      define('APP_PATH', dirname($_SERVER['SCRIPT_FILENAME']).'/');    //定义应用目录路径
define('APP_DEBUG')         OR      define('APP_DEBUG', false);                                      //是否开启调试模式默认否
define('LIB_PATH')          OR      define('LIB_PATH', realpath(SYSTEM_PATH.'CoreLibrary').'/');     //系统核心类库目录
define('CORE_PATH')         OR      define('CORE_PATH', LIB_PATH.'Ezos/');                           //框架类库
define('COMMON_PATH')       OR      define('COMMON_PATH', APP_PATH.'Common/');                       //公共模块目录
define('VENDOR_PATH')       OR      define('VENDOR_PATH', LIB_PATH.'Vendor/');                       //第三方类库目录
defined('CONF_EXT')         OR define('CONF_EXT',       '.php');                                     // 配置文件后缀
defined('CONF_PARSE')       OR define('CONF_PARSE',     '');                                         // 配置文件解析方法
echo '系统目录: '.SYSTEM_PATH.'<br>';
echo '应用目录路径: '.APP_PATH.'<br>';
echo '是否开启调试模式: '.APP_DEBUG.'<br>';
echo '系统核心类库目录: '.LIB_PATH.'<br>';
echo '框架类库: '.CORE_PATH.'<br>';
echo '公共模块目录: '.COMMON_PATH.'<br>';
echo '第三方类库目录: '.VENDOR_PATH.'<br>';
echo '配置文件后缀: '.CONF_EXT.'<br>';
echo '配置文件解析方法: '.CONF_PARSE.'<br>';
//加载核心类库
require  CORE_PATH.'Ezos'.CLASS_SUFFIX;
//应用初始化
Ezos\Ezos::start();