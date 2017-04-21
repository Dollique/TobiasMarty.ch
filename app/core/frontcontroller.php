<?php

namespace app\core;

class FrontController {
    public $pdo;
	private $route, $routeName, $model, $controller, $view;
	
	public function __construct(Router $router, $routeName, $action = null) {
		$this->pdo = new \PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
		
		//Fetch a route based on a name, e.g. "search" or "list" or "edit"
		$this->route = $router->getRoute($routeName);
		$this->routeName = $routeName;
		
		//Fetch the names of each component from the router
		$modelName = "\app\model\\".$this->route->model;
		$controllerName = "\app\controller\\".$this->route->controller;
		$viewName = "\app\\view\\".$this->route->view;

		//Instantiate each component
		$this->model = new $modelName($this->pdo);
		$this->controller = new $controllerName($this->model);
		$this->view = new $viewName($this->model);
		
		//Run the controller action
		if(!empty($action) && method_exists($this->controller, $action)) $this->controller->{$action}();
	}
	
	public function getRouteName() {
		return $this->routeName;
	}
	
	public function getModel() {
		return $this->model;
	}
	public function getController() {
		return $this->controller;
	}
	public function getView() {
		return $this->view;
	}
	
	
	public function output() {
		$header = $this->view->getTemplate();
		$footer = $this->view->getTemplate("footer");
		
		return $header . $this->view->output($this->routeName) . $footer;
	}
}