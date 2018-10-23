<?php
namespace payment\Adapters;

use payment\Interfaces as Interfaces;
use payment\PaymentTypes as PaymentTypes;


class PayPalAdapter implements Interfaces\AdapterInterface {
    protected $paypal;
    public function __construct(PaymentTypes\PayPal $paypal) {
        $this->paypal = $paypal;
    }
    public function pay($total) {
        return $this->paypal->sendPayment($total);
    }
}