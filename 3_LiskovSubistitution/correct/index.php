<?php

use correct\Astra;
use correct\Car;
use correct\Driver;

$car = new Car;
$astra = new Astra();

$driver = new Driver($car); //correct

 /*
  * correct Becausa the astra class can use drive() method in the parent class so can replace the parent class
  */


$driver->go();