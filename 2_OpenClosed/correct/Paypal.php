<?php
namespace correct;

use correct\PaymentMethodInterface;

class Paypal implements PaymentMethodInterface
{

    public function processPayment()
    {
        //process payment
    }
}