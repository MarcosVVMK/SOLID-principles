<?php

use correct\Database;
use correct\Logger;
use correct\User;


$logger = new Logger();
$database = new Database();

/*
 * Single Responsability define that each class has only one responsability and the User class are creating user and
 * logging responses in file, so i created 2 other classes to separate the logic ( Logger and Database )
 */


$user = new User( $logger, $database);


