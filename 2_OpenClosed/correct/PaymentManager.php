<?php

use correct\PaymentMethodInterface;

class PaymentManager
{
    protected $payment;

    public function __contruct( PaymentMethodInterface $payment )
    {
        $this->payment = $payment;
    }

    public function process()
    {
        $this->payment->processPayment();
    }
}