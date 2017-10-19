<?php

namespace app\core;

class twig {
	private $twig, $path_to_tmp;
	
	public function __construct() {
		$this->path_to_tmp = "/public/site/themes/".TPL_DEFAULT."/";
		
		$loader = new \Twig_Loader_Filesystem(realpath(__DIR__ .DS.'..') . $this->path_to_tmp . "/templates/"); // *!* replace TPL_DEFAULT with $theme
		$this->twig = new \Twig_Environment($loader, array(
			'cache' => realpath(__DIR__ .DS.'..'.DS.'..') . "/cache/compilation/",
		));
	}
	
	public function renderTwig($arguments) {
		$this->twigFunctionUrl();
		
		return $this->twig->render('content.html.twig', $arguments);
	}
	
	private function addTwigFunction() {
		
	}
	
	private function twigFunctionUrl() {
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
		
		return $this->twig->addFunction($twf_url);
	}
}



