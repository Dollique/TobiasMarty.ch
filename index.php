<?php
	require_once("model/model.php");
	require_once("view/view.php");
	require_once("controller/controller.php");
	
	
	//initiate the triad
	$model = new Model();
	
	//It is important that the controller and the view share the model
	$controller = new Controller($model);
	$view = new View($model);
	
	if(isset($_GET['action'])) $controller->{$_GET['action']}();
	
	echo $view->output();
?>