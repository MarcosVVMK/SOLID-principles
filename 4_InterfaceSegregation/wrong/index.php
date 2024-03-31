<?php

use wrong\Parrot;
use wrong\Penguin;

$bird       = new Parrot();

/*
 * Penguin cannot implement BirdInterface because the penguin cannot fly and the Interface Segregation Principles say
 * that a class should not be forced to implement a method that it does not use, such as fly()
 */

$penguin    = new Penguin();


$bird->fly();