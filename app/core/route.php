<?php

namespace app\core;

class Route {
	private $url, $route, $action;
	
	public function __construct() {
		
	}
	
	public function getUrl() {
		$get = filter_input(INPUT_GET, 'route', FILTER_SANITIZE_STRING); // better varation of $_GET[]
		$this->route = isset($get) ? $get : null;
		return $this->route;
	}
	
	
	// *!* TO DO
	private function getAction($action) {
		$get = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
		$action = isset($get) ? $get : null;
		return $action;
	}
	
	
}