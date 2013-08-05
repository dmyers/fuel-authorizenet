# Fuel AuthorizeNet Package

A super simple AuthorizeNet package for AuthorizeNet's PHP SDK for Fuel.

## About
* Version: 1.0.0
* License: MIT License
* Author: Derek Myers

## Installation

### Git Submodule

If you are installing this as a submodule (recommended) in your git repo root, run this command:

	$ git submodule add git://github.com/dmyers/fuel-authorizenet.git fuel/packages/authorizenet

Then you you need to initialize and update the submodule:

	$ git submodule update --init --recursive fuel/packages/authorizenet/

### Download

Alternatively you can download it and extract it into `fuel/packages/authorizenet/`.

## Usage

```php
$cim = new AuthorizeNetCIM();
$customer = new AuthorizeNetCustomer();
$payment_profile = AuthorizeNetPaymentProfile ();
```

For more examples, check out the [AuthorizeNet PHP SDK](http://developer.authorize.net/downloads/) and  [AuthorizeNet PHP Sample Code](http://developer.authorize.net/downloads/samplecode/).

## Configuration

Configuration is easy. Copy the `config/authorizenet.php` from the package up into your `app/config/` directory. Open it up and enter your API login ID and transaction key.

## Updates

In order to keep the package up to date simply run:

	$ git submodule update --recursive fuel/packages/authorizenet/
