<?php

// *!* This is a temporary way to turn on errors on the hosting server online.
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Define Directory Sepearator
if(!defined('DS')) define('DS', DIRECTORY_SEPARATOR);

// Define root path
if(!defined('ROOT')) define('ROOT', realpath(__DIR__ .DS.'..'.DS.'..').DS); // path: /app/public/index.php


// Use Namespaces needed for FrontController
use app\core\FrontController;
use app\core\Router;

// Include Bootstrapping File
require_once(ROOT ."app/core/bootstrap.php");

// set routes
$route = isset($_GET['route']) ? $_GET['route'] : null;
$action = isset($_GET['action']) ? $_GET['action'] : null;

// get FrontController
$fc = new FrontController(new Router, $route, $action);

//$model = $fc->getModel();
//$controller = $fc->getController();
//$view = $fc->getView();

//if(isset($_GET['action']) && method_exists($controller, $_GET['action'])) $controller->{$_GET['action']}();

echo $fc->output();