<?php

namespace app\core;

class Router {
    private $table = array();
	
    public function __construct() {
		$this->table['pages'] = new Route('pages', 'pages', 'pages'); // model, view, controller
		//$this->table['someotherroute'] = new Route('OtherModel', 'OtherView', 'OtherController');
    }
	
    public function getRoute($route) {
		if(empty($route)) $route = DEF_ROUTE;
		
		$route_lc = strtolower($route);
		$route_table = (isset($this->table[$route_lc]) ? $this->table[$route_lc] : $this->table[DEF_ROUTE]);
		
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