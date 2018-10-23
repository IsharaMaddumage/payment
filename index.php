<?php
namespace payment;

require_once 'constants.php'; 
require_once 'Interfaces/AdapterInterface.php';
require_once 'Adapters/PayPalAdapter.php';
require_once 'Adapters/StripeAdapter.php';
require_once 'PaymentTypes/Paypal.php';
require_once 'PaymentTypes/Stripe.php';

$paypal = new Adapters\PayPalAdapter(new PaymentTypes\PayPal());
echo $paypal->pay('1000.00');
echo NEWLINE;

$stripe = new Adapters\StripeAdapter(new PaymentTypes\Stripe());
echo $stripe->pay('50000');  
echo NEWLINE;
