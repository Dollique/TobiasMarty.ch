<?php

namespace app\controller;

/**
* @Inject \app\model\pagesModel
* @Inject \app\view\pagesView
* @Inject \app\core\twig
*/
class pagesController {
    
    public function __construct() {
        
    }
    
    public function someAction() {
        // some user action was triggered by URL action=someAction
		
		return "UserAction";
    }
	
	public function output() {
		$routeView = \app\core\Router::getRouteName("view");
		
		$nav = $this->pagesView->output($routeView, "nav");
		//var_dump($nav); // *!* test
		
		$page = $this->pagesView->output($routeView);
		$title = $page["title"];
		$content = $page["content"];
		
		$content_array = array(
			'config' => array(
				'site' => array(
					'title' => $title
				)
			),
			'page' => array(
				'nav' => $nav,
				'content' => $content,
				'footer' => 'This is the footer'
			)
		);
		
		return $this->twig->renderTwig($content_array);
	}
}