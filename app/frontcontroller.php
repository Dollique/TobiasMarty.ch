<?php

namespace app;

class FrontController {
    public $pdo;
	private $route, $model, $controller, $view;
	
	public function __construct(Router $router, $routeName, $action = null) {
		$this->pdo = new \PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
		
		//Fetch a route based on a name, e.g. "search" or "list" or "edit"
		$this->route = $router->getRoute($routeName);
		
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
		
		return $header . $this->view->output() . $footer;
	}
}

class Router {
    private $table = array();
	
    public function __construct() {
		$this->table['pages'] = new Route('pages', 'pages', 'pages'); // model, view, controller
		//$this->table['someotherroute'] = new Route('OtherModel', 'OtherView', 'OtherController');
    }
	
    public function getRoute($route) {
        $defroute = "pages"; // Set Default Route here!
		if(empty($route)) $route = $defroute;
		
		$route_lc = strtolower($route);
		
		$route_table = (isset($this->table[$route_lc]) ? $this->table[$route_lc] : $this->table[$defroute]);
		
        return $route_table;
    }
}

class Route {
    public $model;
    public $view;
    public $controller;
    
    public function __construct($model, $view, $controller) {
        $this->model = $model;
        $this->view = $view;
        $this->controller = $controller;
    }
}

?>