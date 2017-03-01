<?php
	require_once("../frontcontroller.php");
	require_once("../model/model.php");
	require_once("../view/view.php");
	require_once("../controller/controller.php");
	
	$route = isset($_GET['route']) ? $_GET['route'] : null;
	$action = isset($_GET['action']) ? $_GET['action'] : null;
	
	$fc = new TobiasMarty\FrontController(new TobiasMarty\Router, $route, $action);
	
	//$model = $fc->getModel();
	//$controller = $fc->getController();
	//$view = $fc->getView();
	
	//if(isset($_GET['action']) && method_exists($controller, $_GET['action'])) $controller->{$_GET['action']}();
	
	echo $fc->output();
?>