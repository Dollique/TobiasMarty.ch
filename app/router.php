<?php

namespace app;

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