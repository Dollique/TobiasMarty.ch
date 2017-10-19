<?php

namespace app\core;

class Router {
    private static $route, $routeName, $table = array(), $model, $controller, $view;
	
	public static function createRoute() {
		self::$route = new Route();
		self::$routeName = self::$route->getUrl();
		
		return self::getRoute();
	}
	
    public static function getRoute() {
		self::$table['pages'] = array('pagesModel', 'pagesView', 'pagesController'); // model, view, controller
		//self::$table['someotherroute'] = new Route('OtherModel', 'OtherView', 'OtherController');
		
		if(empty(self::$routeName)) self::$routeName = DEF_ROUTE;
		
		$route_lc = strtolower(self::$routeName);
		$route_table = (isset(self::$table[$route_lc]) ? self::$table[$route_lc] : self::$table[DEF_ROUTE]);
		
        return (new self)->createObject($route_table); // call the non-static function createObject()
    }
	
	private function createObject($array) {
		$obj = new \stdClass(); // new empty object
		$obj->model = $array[0];
		$obj->view = $array[1];
		$obj->controller = $array[2];
		
		return $obj;
	}
	
	public static function getRouteName($mode) {
		return self::getRoute()->$mode;
	}
}