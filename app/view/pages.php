<?php

namespace app\view;

class pages {
    private $model;
	
    public function __construct(\app\model\pages $model) {
        $this->model = $model;
    }
	
    private function renderPage($alias) {
		$page = $this->model->loadPage($alias);
		return "<h1>".$page["title"]."</h1>" . $page["content"];
    }
	
	public function getTemplate($section = "header", $tpl = TPL_DEFAULT) {
		$getTPL = new template($tpl);
		$renderTPL = $getTPL->render($section);
		
		return $renderTPL;
	}
	
	public function output($routeName) {
		if(!empty($routeName)) {
			$routeA = explode("/", $routeName);
		}
		
		$alias = $routeA[0];
		
		return $this->renderPage($alias);
	}
}