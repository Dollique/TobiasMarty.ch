<?php

use app\core\FrontController;
use app\core\Router;

// include configuration, database and autoloader
require_once(realpath(__DIR__ .DS.'..') . "/config/config.php");
require_once(realpath(__DIR__ .DS.'..') . "/config/db.php");
require_once(realpath(__DIR__ .DS.'..'.DS.'..') . "/vendor/autoloader.php"); // autoload for the core MVC Framework

// load composer autoloader
require_once(realpath(__DIR__ .DS.'..'.DS.'..') . "/vendor/autoload.php");

// load twig templates
/*$loader = new Twig_Loader_Filesystem(realpath(__DIR__ .DS.'..'.DS.'..') . "/site/themes/tobiasmarty/templates/"); // *!* replace tobiasmarty with $theme
$twig = new Twig_Environment($loader, array(
    'cache' => realpath(__DIR__ .DS.'..'.DS.'..') . "/cache/compilation/",
));*/

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