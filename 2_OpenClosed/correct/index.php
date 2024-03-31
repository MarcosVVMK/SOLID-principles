<?php


/*
 * Open Close has now been applied by creating PaymentMethodInterface, implementing this interface in payment classes
 * and modify the PaymentManager class constructor by adding PaymentMethodInterface has a type of initialization
 */

use correct\CreditCard;
use correct\Paypal;

$paypal     = new Paypal;
$creditCard = new CreditCard;

//$paymentManager = new PaymentManager($paypal);
$paymentManager = new PaymentManager($creditCard);

$paymentManager->process();