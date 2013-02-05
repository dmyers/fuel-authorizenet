<?php

namespace AuthorizeNet;

class AuthorizeNet
{
	public static function _init()
	{
		\Config::load('authorizenet', true);
	}
	
	public static function cim()
	{
		$api_login_id    = \Config::get('authorizenet.api_login_id');
		$transaction_key = \Config::get('authorizenet.transaction_key');
		$sandbox         = \Config::get('authorizenet.sandbox', false);
		
		$cim = new \AuthorizeNetCIM($api_login_id, $transaction_key);
		$cim->setSandbox($sandbox);
		
		return $cim;
	}
	
	public static function customer()
	{
		return new \AuthorizeNetCustomer();
	}
	
	public static function payment_profile()
	{
		return new \AuthorizeNetPaymentProfile();
	}
}
