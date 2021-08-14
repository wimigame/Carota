<?php

define('DS', DIRECTORY_SEPARATOR);
define('DIR_ROOT', realpath(__DIR__.DS.'..'.DS).DS);
define('DIR_APP', DIR_ROOT . 'app/');
define('DIR_SYSTEM', DIR_ROOT . 'system/');
define('DIR_EXTENSION', DIR_ROOT . 'extension/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_ROOT . 'storage/cache');

//加载配置文件类
if (is_file(DIR_ROOT.'/config.php')) {
    require_once(DIR_ROOT.'config.php');
}

//引入系统入口文件
require_once(DIR_SYSTEM.'bootstrap.php');