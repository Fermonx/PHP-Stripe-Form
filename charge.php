<?php

require_once('vendor/autoload.php');
require_once('./stripeConf.php');
require('./index.php');

\Stripe\Stripe::setApiKey($stripe_credentials['secret_key']);



$discount = $_POST['discount'];
$email = $_POST['email'];
$amount = $_POST['amount'];
$token = $_POST['stripeToken'];

header("Location: http://localhost:5020/");

if($discount === 'lower') $amount = ($amount/100)*50;

try {
	$customer = \Stripe\Customer::create([
			'card' => $token,
			'email' => $email,
			'description' => 'Customer'
	]);


	$charge = \Stripe\Charge::create(
			array(
					'customer' => $customer['id'],
					'amount' => $amount,
					'currency' => 'eur',
					'description' => 'Test Payment'
			)
	);
} catch(\Stripe\Error\Card $e){
	$err = 'Error, it seems the card was declined. Please check with your bank for any issues.';
} catch(\Stripe\Error\ApiConnection $e){
	$err = 'Error while connecting to the Stripe API.';
} catch(\Stripe\Error\Authentication $e){
	$err = 'Error: Failure authenticating API Key.';
}
