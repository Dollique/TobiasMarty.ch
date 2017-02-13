<?php
	require_once("frontcontroller.php");
	require_once("model/model.php");
	require_once("view/view.php");
	require_once("controller/controller.php");
	
	$fc = new FrontController(new Router, $_GET['route'], isset($_GET['action']) ? $_GET['action'] : null);
	
	$model = new pagesModel($fc);
	$controller = new pagesController($model);
	$view = new pagesView($model);
	
	if(isset($_GET['action'])) $controller->{$_GET['action']}();
	
	echo $view->renderPage();
?>