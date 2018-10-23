<?php
namespace payment\PaymentTypes;

class Paypal
{
    public function sendPayment($total) {
        return $total;
    }
}