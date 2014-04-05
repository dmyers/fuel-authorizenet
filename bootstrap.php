<?php

require_once VENDORPATH . 'authorizenet' . DS . 'authorizenet' . DS . 'AuthorizeNet.php';

Config::load('authorizenet', true);

$api_login_id    = \Config::get('authorizenet.api_login_id');
$transaction_key = \Config::get('authorizenet.transaction_key');
$sandbox         = \Config::get('authorizenet.sandbox', false);

if (!empty($api_login_id)) {
	define('AUTHORIZENET_API_LOGIN_ID', $api_login_id);
}

if (!empty($transaction_key)) {
	define('AUTHORIZENET_TRANSACTION_KEY', $transaction_key);
}

if (!empty($sandbox)) {
	define('AUTHORIZENET_SANDBOX', $sandbox);
}
