<?php

use Router\Router;

require "../vendor/autoload.php";

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);
define('DB_NAME', 'blogPhp');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', 'root');

$router = new Router($_GET['url']);

$router->get('/', 'App\Controllers\BlogController@home');
$router->get('/posts', 'App\Controllers\BlogController@index');
$router->get('/post/:id', 'App\Controllers\BlogController@show');

$router->run();