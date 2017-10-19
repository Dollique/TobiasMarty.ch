<?php

namespace app\core;

class FrontController {
	private $route, $model, $controller, $view, $twig, $path_to_tmp;
	
	public function __construct(Router $router, $routeName, $action = null) {
		//Fetch a route based on a name, e.g. "search" or "list" or "edit"
		$this->route = $router->getRoute($routeName);
		
		//Fetch the names of each component from the router
		$modelName = "\app\model\\".$this->route->model;
		$controllerName = "\app\controller\\".$this->route->controller;
		$viewName = "\app\\view\\".$this->route->view;
		
		//Instantiate each component
		//$this->model = new $modelName();
		//$this->controller = new $controllerName($this->model);
		//$this->view = new $viewName($this->model);
		
		DIC::mapClass($viewName, $this->route->view);
		DIC::mapClassAsSingleton($modelName, $this->route->model);
		
		/* 
		 * START TWIG
		 * Loading Twig + Adding TWIG Functions!
		 */
		
		$this->path_to_tmp = "/public/site/themes/".TPL_DEFAULT."/";
		
		// load TWIG
		$loader = new \Twig_Loader_Filesystem(realpath(__DIR__ .DS.'..') . $this->path_to_tmp . "/templates/"); // *!* replace TPL_DEFAULT with $theme
		$this->twig = new \Twig_Environment($loader, array(
			'cache' => realpath(__DIR__ .DS.'..'.DS.'..') . "/cache/compilation/",
		));
		
		// add TWIG Function: url();
		$twf_url = new \Twig_Function('url', function($url, $method = "url") {
			if(!is_string($url) && $url === true) return "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			else {
				$url = str_replace('theme://', dirname($_SERVER['REQUEST_URI']) . '/app'. $this->path_to_tmp, $url); // *!* bad practise!
			}
			
			switch($method) {
				case "url":
				default:
					$return = $url;
				break;
				case "css":
					$return = "<link rel='stylesheet' href='$url' />";
				break;
				case "js":
					if($url = 'jquery') $url = "https://code.jquery.com/jquery-3.2.1.min.js"; // *!* hardcoded
					$return = "<script type='text/javascript' src='$url'></script>";
				break;
			}

			return $return;
		}, array('is_safe' => array('html'))); // don't escape html 
		$this->twig->addFunction($twf_url);
		
		/*
		 * END TWIG 
		 */
	}
	
	public function getRoute() {
		return $this->route;
	}
	
}