<?php
require_once('./vendor/autoload.php');

$stripe_credentials = array(
		"secret_key"      => "sk_test_B9JLIeCxqz76RirjG7sfLH9S",
		"publishable_key" => "pk_test_Dd0qUk1smYE7XHGxEcxkK6mD"
);

\Stripe\Stripe::setApiKey($stripe_credentials['secret_key']);
