<?php
return array
    (
    'db_disable' => false,
	'db_host' => 'localhost',
	'db_name' => 'minghe',
	'db_user' => 'root',
	'db_password' => '',
    'response_charset' => 'utf-8',
    'cache_path' => APP_ROOT . '/data',
    'tpldir_path' => APP_ROOT . '/view',
    'objdir_path' => APP_ROOT . '/data/view',
    'url_mode' => 2,

    'SVC_ENABLE' => false,

    'SITE_URL' => array(
    ),

    'AUTH_SERVER' => array(
    	#'handle' => 'memcached',
    	#'host' => '127.0.0.1',
    	#'port' => 11211,
    	'cookiename' => 'mybaby_auth',
    	'cookiedomain' => '.mybaby.com',
    	'cookietimeout' => 60*60*24*14,
    	'authkey' => 'mybaby_auth_querty',
    ),

    /**
     * 默认使用的缓存服务
     */
    'runtime_cache_backend' => 'HiCache_Memcached',
    
    /* runtime_cache_policy 参数可以分别设定memcached和memcachedb的server
     * 如果没有该设定，则自动读取memcached memcachedb类硬编码的配置信息
     */
    'runtime_cache_policy' => array(
    	'HiCache_Memcached' => array(
    		'servers' => array(
    			array('host' => '127.0.0.1', 'port' => 11211),
    		),
    	),
    ),
    // {{{ 日志和错误处理

    /**
     * 指示是否允许记录日志
     */
    'log_enabled' => false,
     /**
     * 指示记录哪些优先级的日志（不符合条件的会直接过滤）
     */
    'log_priorities' => 'ERR,DEBUG',
    /**
     * 日志缓存块大小（单位KB）
     *
     * 更小的缓存块可以节约内存，但写入日志的次数更频繁，性能更低。
     */
    'log_cache_chunk_size' => 64, // 64KB

	/**
     * 保存日志文件的目录
     */
    'log_writer_dir' => APP_ROOT . '/data/log',
    /**
     * 日志文件的文件名
     */
    'log_writer_filename' => 'bazaar_access.log',
);
