<?php

namespace wrong;

class PaymentManager
{
    protected $paypal;

    public function __contruct( Paypal $paypal )
    {
        $this->paypal = $paypal;
    }

    public function process()
    {
        $this->paypal->processPayment();
    }
}