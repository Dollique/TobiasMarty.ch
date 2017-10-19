<?php

namespace app\core;

class Router {
    private static $route, $table = array();
	
    public static function getRoute() {
		self::$table['pages'] = new Route('pagesModel', 'pagesView', 'pagesController'); // model, view, controller
		//self::$table['someotherroute'] = new Route('OtherModel', 'OtherView', 'OtherController');
		
		if(empty(self::$route)) self::$route = DEF_ROUTE;
		
		$route_lc = strtolower(self::$route);
		$route_table = (isset(self::$table[$route_lc]) ? self::$table[$route_lc] : self::$table[DEF_ROUTE]);
		
        return $route_table;
    }
	
	public static function getRouteName($mode) {
		return self::getRoute()->$mode;
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