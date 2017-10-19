<?php

namespace app\core;

class FrontController {
	private $route, $model, $controller, $view;
	
	public function __construct($router) {
		//Fetch a route based on a name, e.g. "search" or "list" or "edit"
		$this->route = $router;
		
		//Fetch the names of each component from the router
		$modelName = "\app\model\\".$this->route->model;
		$controllerName = "\app\controller\\".$this->route->controller;
		$viewName = "\app\\view\\".$this->route->view;
		
		//Instantiate each component
		DIC::mapClass($viewName, $this->route->view);
		DIC::mapClassAsSingleton($modelName, $this->route->model);
		DIC::mapClassAsSingleton('\app\core\twig', "twig");
	}
	
	public function show() {
		$page = DIC::getInstanceOf("\app\controller\\".$this->route->controller);
		return $page->output();
	}
}