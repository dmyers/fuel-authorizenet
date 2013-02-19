<?php

require_once __DIR__ . DS . 'vendor' . DS . 'authorizenet-sdk' . DS . 'AuthorizeNet.php';

Autoloader::add_core_namespace('AuthorizeNet');

Autoloader::add_classes(array(
	'AuthorizeNet\\AuthorizeNet'          => __DIR__.'/classes/authorizenet.php',
	'AuthorizeNet\\AuthorizeNetException' => __DIR__.'/classes/authorizenet.php',
));

Config::load('authorizenet', true);

$api_login_id    = \Config::get('authorizenet.api_login_id');
$transaction_key = \Config::get('authorizenet.transaction_key');
$sandbox         = \Config::get('authorizenet.sandbox', false);

define("AUTHORIZENET_API_LOGIN_ID", $api_login_id);
define("AUTHORIZENET_TRANSACTION_KEY", $transaction_key);
define("AUTHORIZENET_SANDBOX", $sandbox);
