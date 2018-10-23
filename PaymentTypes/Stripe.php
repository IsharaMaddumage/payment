<?php
namespace payment\PaymentTypes;

class Stripe
{
    public function payCustomer($total) {
        return $total;
    }
}