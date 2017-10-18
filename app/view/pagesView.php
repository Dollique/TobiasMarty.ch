<?php

namespace app\view;

/**
* @Inject \app\model\pagesModel
*/
class pagesView {
	
    public function __construct() {
        
    }
	
    private function renderPage($alias) {
		$page = $this->pagesModel->loadPage($alias);
		return $page;
    }
	
	private function renderNav($alias) {
		$nav = $this->pagesModel->loadPage($alias); // get page data from database *!* use later for 'current' class
		$navRet = $this->createNav(); // $nav
		
		// *!* WORK HERE !!!
		/*echo "<pre> RESULT: ---";
		print_r($navRet);
		echo "</pre>";*/
	}
	
        // I got help on SO: https://stackoverflow.com/questions/45940902/recursive-nested-navigation-with-php/45947793
	private function createNav($parent = 0) {
            // *!* Create Nav
            $getNavPage = $this->pagesModel->loadNav($parent); // array of menu items (fk_page) that have $parent as parent.
            
            if(empty($getNavPage)) return $parent; // if there is no more child then return the $parent as an INT
            
            /* start child-nav */
            $NavPage = 0;
            foreach ($getNavPage as $key => $getPage) {
                $NavPage = intval($getPage["fk_page"]); // make sure fk_page is an int
                
                $getNavPage[$key] = $this->createNav($NavPage); // get childs (recursive loop)
            }
            
            return array($parent => $getNavPage); // returns an array of the sub nav (child-navigation)
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