<?php

use app\Router;

require_once __DIR__  . "/../vendor/autoload.php";

$router = Router::getInstance();

$router->get('/api/', "app\controller\HomeController@index");
$router->get('/api/services', "app\controller\ServicesController@index");

$router->resolve();