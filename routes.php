<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1); 
// error_reporting(E_ALL);

require_once 'vendor/autoload.php';

use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;
use Symfony\Component\ErrorHandler\Debug;

use Controllers\Users\Gets;

Debug::enable();

// Create a new RouteCollector
$router = new RouteCollector();

$router->get('/', ['Controllers\Users\Gets', 'home']);
$router->get('/home', ['Controllers\Users\Gets', 'home']);
$router->get('/our_aids', ['Controllers\Users\Gets', 'aids']);
$router->get('/contact', ['Controllers\Users\Gets', 'contact']);
$router->get('/admin', ['Controllers\Users\Gets', 'admin']);
$router->get('/newAid', ['Controllers\Users\Gets', 'newAid']);
$router->get('/login', ['Controllers\Users\Gets', 'login']);



$dispatcher = new Dispatcher($router->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url(str_replace('aidapp/', '', $_SERVER['REQUEST_URI']), PHP_URL_PATH));

echo $response;