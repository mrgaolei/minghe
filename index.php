<?php

	/* the minghe entrance */

	//error_reporting(0);
	set_magic_quotes_runtime(0);
	$mtime = explode(' ', microtime());
	$starttime = $mtime[1] + $mtime[0];
	define('IN_APP', TRUE);
	define('APP_ROOT', dirname(__FILE__));

	//define('INDEX_ROOT', dirname(__FILE__).'/..');
	require_once "../HiCore/Hi.php";

	Hi::import(APP_ROOT . '/inc');
	//Hi::import(APP_ROOT . '/passport');
	$app_config = array(
	    'APP_ID' => 'minghe',
	    'APP_ROOT' => APP_ROOT,
	    'CONTROLLER_ROOT' => APP_ROOT . '/c',
	    'MODEL_ROOT' => APP_ROOT . '/m',
	    'DAO_ROOT' => APP_ROOT . '/d',
	    'VIEW_ROOT' => APP_ROOT . '/v',
	    'CONFIG_DIR' => APP_ROOT . '/cfg',
	    'RUN_MODE' => 'devel',
	);

	$hicms = new HiApp($app_config);
	$hicms->run();
