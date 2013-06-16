<?php

define('KALTURA_ROOT_PATH',			realpath(__DIR__ . '/../'));
define('KALTURA_INFRA_DIR',			KALTURA_ROOT_PATH . '/infra');
define('KALTURA_SERVER_INFRA_DIR',	KALTURA_ROOT_PATH . '/server_infra');
define('KALTURA_PLUGINS_DIR',		KALTURA_ROOT_PATH . '/plugins');
define('KALTURA_VENDOR_DIR',		KALTURA_ROOT_PATH . '/vendor');

define('SF_APP',					'kaltura');
define('SF_ROOT_DIR',				KALTURA_ROOT_PATH . '/alpha');
define('MODULES', 					SF_ROOT_DIR . '/apps/kaltura/modules/');


$sf_symfony_lib_dir = KALTURA_ROOT_PATH . '/symfony';
$sf_symfony_data_dir = KALTURA_ROOT_PATH . '/symfony-data';

$include_path = realpath(KALTURA_VENDOR_DIR . '/ZendFramework/library') . PATH_SEPARATOR . get_include_path();
set_include_path($include_path);

// symfony bootstraping
require_once("$sf_symfony_lib_dir/util/sfCore.class.php");
sfCore::bootstrap($sf_symfony_lib_dir, $sf_symfony_data_dir);

// Logger
kLoggerCache::InitLogger(KALTURA_LOG, 'PS2');

sfLogger::getInstance()->registerLogger(KalturaLog::getInstance());
sfLogger::getInstance()->setLogLevel(7);
sfConfig::set('sf_logging_enabled', true);

DbManager::setConfig(kConf::getDB());
DbManager::initialize();

ActKeyUtils::checkCurrent();
sfContext::getInstance()->getController()->dispatch();
