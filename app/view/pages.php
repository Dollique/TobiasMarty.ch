<?php

namespace app\view;

class pages {
    private $model;
    private $navArr;
	
    public function __construct(\app\model\pages $model) {
        $this->model = $model;
        $this->navArr = array();
    }
	
    private function renderPage($alias) {
		$page = $this->model->loadPage($alias);
		return $page;
    }
	
	private function renderNav($alias) {
		$nav = $this->model->loadPage($alias); // get page data from database *!* use later for 'current' class
		$navRet = $this->createNav(); // $nav
		
                echo "<pre> RESULT: ---";
                var_dump($navRet);
                echo "</pre>";
                
		return $navRet;
	}
	
	private function createNav($parent = 0, $sub = false) {
            // *!* Create Nav
            $getNavPage = $this->model->loadNav($parent);
            
            foreach ($getNavPage as $getPage) {
                
                $NavPage = intval($getPage["fk_page"]);
                
                $this->createNav($NavPage, true);
                
                if($sub === false) $this->navArr[$parent][] = $NavPage;
                else $this->navArr[$parent][][] = $NavPage;
            }
            
            return $this->navArr;
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
                        case "nav": return $this->renderNav($alias);
		}
	}
}