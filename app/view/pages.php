<?php

namespace app\view;

class pages {
    private $model;
	
    public function __construct(\app\model\pages $model) {
        $this->model = $model;
    }
	
    private function renderPage($alias) {
		$page = $this->model->loadPage($alias);
		return $page;
    }
	
	private function renderNav($alias) {
		$nav = $this->model->loadPage($alias);
		$navRet = $this->createNav($nav);
		
		return $navRet;
	}
	
	private function createNav($data) {
		// *!* Create Nav
		$getNavP = array();
		
		var_dump($data); // *!* test
		
		foreach($data as $d) {
			$getNavP[] = $this->model->loadPage($d, "fk_page");
		}
		
		return $getNavP;
	}
	
	private function getAlias($routeName) {
		if(!empty($routeName)) {
			$routeA = explode("/", $routeName);
		}
		
		return $routeA[0];
	}
	
	public function getTemplate($section = "header", $tpl = TPL_DEFAULT) {
		$getTPL = new template($tpl);
		$renderTPL = $getTPL->render($section);
		
		return $renderTPL;
	}
	
	public function output($routeName, $table = "pages") {
		$alias = $this->getAlias($routeName);
		
		switch ($table) {
			case "pages": return $this->renderPage($alias);
			case "nav":return $this->renderNav($alias);
		}
	}
}