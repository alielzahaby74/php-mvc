<?php

use src\Http\Request;
use src\Http\Response;
use src\Http\Route;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../routes/web.php';

$route = new Route(new Request(), new Response());

$route->resolve();