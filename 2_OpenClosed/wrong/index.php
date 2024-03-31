<?php

/*
 * Open Close principle because if payment type changes you will need change the PaymentManager to accept another
 * payment method like credit card.
 */

$paypal = new Paypal;

$paymentManager = new PaymentManager($paypal);

$paymentManager->process();