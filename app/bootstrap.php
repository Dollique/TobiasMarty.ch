<?php
	use app\FrontController;
	use app\Router;
	
	require_once("../config.php");
	require_once("../../autoloader.php");
	
	$route = isset($_GET['route']) ? $_GET['route'] : null;
	$action = isset($_GET['action']) ? $_GET['action'] : null;
	
	$fc = new FrontController(new Router, $route, $action);
	
	//$model = $fc->getModel();
	//$controller = $fc->getController();
	//$view = $fc->getView();
	
	//if(isset($_GET['action']) && method_exists($controller, $_GET['action'])) $controller->{$_GET['action']}();
	
	echo $fc->output();
	
	echo "<br><br>".$route;
?>