<?php
namespace payment\Adapters;

use payment\Interfaces as Interfaces;
use payment\PaymentTypes as PaymentTypes;

class StripeAdapter implements Interfaces\AdapterInterface {
    protected $stripe;
    public function __construct(PaymentTypes\Stripe $stripe) {
        $this->stripe = $stripe;
    }
    public function pay($total) {
        return $this->stripe->payCustomer($total);
    }
}