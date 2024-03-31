<?php

use wrong\Astra;
use wrong\Car;
use wrong\Driver;

$car = new Car;
$astra = new Astra();

$driver = new Driver($car); //correct
$driver = new Driver($astra);
 /*
  * incorrect Becausa the astra class overwrite the drive method and cannot replace drive() the same as Car class
  */


$driver->go();