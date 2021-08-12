<?php
    // 自动加载引擎
    $autoloader = new \Carota\System\Engine\Autoloader();
    // 注册App目录
    $autoloader->register('Carota\App', DIR_APP);
    // 注册系统文件
    $autoloader->register('Carota\System', DIR_SYSTEM);

    // 注册者模式
    $registry = new \Carota\System\Engine\Registry();
    $registry->set('autoloader', $autoloader);

    // 配置设置
    $config = new \Carota\System\Engine\Config();
    $config->addPath(DIR_CONFIG);
    $config->load('default');

    // Loader
    $loader = new \Carota\System\Engine\Loader($registry);
    $registry->set('load', $loader);

    // 请求
    $request = new \Carota\System\Libs\Request();
    $registry->set('request', $request);

    // 返回
    $response = new \Carota\System\Libs\Response();

    foreach ($config->get('response_header') as $header)
    {
        $response->addHeader($header);
    }

    $response->setCompression($config->get('response_compression'));
    $registry->set('response',$response);

    // 数据库连接
    $db = new \Carota\System\Libs\Db('pdo', '127.0.0.1', 'test123', 'admin', 'test123');
	$registry->set('db', $db);
    $db->query("SET time_zone = '" . $db->escape(date('P')) . "'");

    // 模板
    $template = new \Carota\System\Libs\Template('twig');
    $template->addPath(DIR_ROOT.'app/');
    $registry->set('template', $template);

    // 路由动作
    $action = new \Carota\System\Engine\Action($request->server['PATH_INFO']);
    //执行这个动作
    $action->execute($registry);
    
    $response->output();