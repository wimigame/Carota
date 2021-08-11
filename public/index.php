<?php

define('DS', DIRECTORY_SEPARATOR);
define('DIR_ROOT', realpath(__DIR__.DS.'..'.DS).DS);
define('DIR_APP', DIR_ROOT . 'app/');
define('DIR_SYSTEM', DIR_ROOT . 'system/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_ROOT . 'storage/cache');

//引入系统入口文件
require_once(DIR_SYSTEM.'bootstrap.php');