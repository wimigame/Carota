<?php
    //设置错误报告等级
    error_reporting(E_ALL);

    //检查php版本
    if (version_compare(phpversion(), '7.1.0', '<') == true) {
        exit('Php 版本必须大于或等于 7.1.0');
    }

    //设置时区
    if (!ini_get('date.timezone')) {
        date_default_timezone_set('UTC');
    }

    // Vendor Autoloader
    if (is_file(DIR_ROOT . 'vendor/autoload.php')) {
        require_once(DIR_ROOT . 'vendor/autoload.php');
    } else {
        echo '请在命令行运行 composer install。或者通过这个链接🔗下载虚拟机版本！';
        exit;
    }

    //系统文件自动加载
    require_once(DIR_SYSTEM . 'engine/autoloader.php');

    require_once(DIR_SYSTEM . 'framework.php');
    