<?php

use correct\Parrot;
use correct\Penguin;

$bird       = new Parrot();

/*
 * Penguin cannot implement BirdInterface because the penguin cannot fly and the Interface Segregation Principles say
 * that a class should not be forced to implement a method that it does not use, such as fly(). To resolve this
 * you must separete the interface better, as I did by creating BirdThatSwimsInterface.
 */

$penguin    = new Penguin();


$bird->fly();