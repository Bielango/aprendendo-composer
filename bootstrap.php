<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);
require __DIR__ . "/vendor/autoload.php";

use Biel\ComposerAulas\Hello;
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('app.log', Level::Warning));

// add records to the log
$log->warning((new Hello)->dizer("Erik"));