<?php

require_once '../config_paths.php';

$routes = require_once '../routes.php';

$request_uri = $_SERVER['REQUEST_URI'];

// Clean the GET parameters from URI if exist
$request_uri = strtok($request_uri, '?');

if (array_key_exists($request_uri, $routes)) {
    include $routes[$request_uri];
} else {
    include '../view/no-route.php';
}
