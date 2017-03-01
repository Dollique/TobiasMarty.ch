<?php
	require_once("frontcontroller.php");
	require_once("model/model.php");
	require_once("view/view.php");
	require_once("controller/controller.php");
	
	$fc = new FrontController(new Router, $_GET['route'], isset($_GET['action']) ? $_GET['action'] : null);
	
	//$model = $fc->getModel();
	//$controller = $fc->getController();
	//$view = $fc->getView();
	
	//if(isset($_GET['action']) && method_exists($controller, $_GET['action'])) $controller->{$_GET['action']}();
	
	echo $fc->output();
?>