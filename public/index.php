<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

define('BASE_PATH', dirname(__DIR__));

dd(BASE_PATH);

use Somecode\Framework\Http\Kernel;
use Somecode\Framework\Http\Request;
use Somecode\Framework\Http\Response;

$request = Request::createFromGlobals();

$kernel = new Kernel();
$response = $kernel->handle($request);

$response->send();