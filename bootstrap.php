<?php

require_once __DIR__ . DS . 'vendor' . DS . 'authorizenet-sdk' . DS . 'AuthorizeNet.php';

Config::load('authorizenet', true);

$api_login_id    = \Config::get('authorizenet.api_login_id');
$transaction_key = \Config::get('authorizenet.transaction_key');
$sandbox         = \Config::get('authorizenet.sandbox', false);

define("AUTHORIZENET_API_LOGIN_ID", $api_login_id);
define("AUTHORIZENET_TRANSACTION_KEY", $transaction_key);
define("AUTHORIZENET_SANDBOX", $sandbox);
