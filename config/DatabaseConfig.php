<?php 

/**
* 
* Database settings
* This file will be renamed to SettingsConfig.php in subsequent versions
* 
*/
$app = new \Slim\App([
	'settings' => [
		'displayErrorDetails' => true,
	//Database definition for Laraval
	'db' => [
		'driver' => 'mysql',
		'host'=> 'localhost',
		'database' => 'erecrutement',
		'username' => 'root',
		'password' => 'root',
		'charset' => 'utf8',
		'collation' => 'utf8_unicode_ci',
		'prefix' => '',
	],
	// for cakePHP
	'cakeDB' => [
		'className' => 'Cake\Database\Connection',
		'driver' => 'Cake\Database\Driver\Mysql',
		'database' => 'erecrutement',
		'username' => 'root',
		'password' => 'root',
		'cacheMetadata' => false // If set to `true` you need to install the optional "cakephp/cache" package.

	]
  ]
]);


