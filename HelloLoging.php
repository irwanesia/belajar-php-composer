<?php 

require_once __DIR__ . "/vendor/autoload.php";


use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger("Programmexamannow");
$log->pushHandler(new StreamHandler("aplication log", Logger::INFO));

$log->info("Hello World");
$log->info("Selamat Belajar Composer");
