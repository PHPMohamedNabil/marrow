<?php

define('CoreStart',microtime());

use Core\Request;
use Core\Response;
use Core\http\Kernal;

require('autoload.php');

$app= require_once __DIR__.'/../bootstrap'.DS.'bootstrap.php';

$kernal = new Kernal;

$kernal->lightOn();

$kernal->handle(new Request,$app);

$kernal->lightOff();







 


