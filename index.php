<?php

use Core\Starter;

require __DIR__ . "/config.php";
require __DIR__ . "/vendor/autoload.php";

$cms = new Starter();

require __DIR__ . "/App/Routes/Route.php";
