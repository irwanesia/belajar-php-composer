<?php

require_once __DIR__ . "/vendor/autoload.php";

use Programmerzamannow\Data\People;

$people = new People("Irwan");

echo $people->sayHello("Budi") . PHP_EOL;