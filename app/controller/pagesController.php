<?php

namespace app\controller;

/**
* @Inject \app\model\pagesModel
* @Inject \app\view\pagesView
*/
class pagesController {
    
    public function __construct() {
        
    }
    
    public function someAction() {
        // some user action was triggered by URL action=someAction
		
		return "UserAction";
    }
	
	public function output() {
		$nav = $this->pagesView->output($this->routeName, "nav");
		//var_dump($nav); // *!* test
		
		$page = $this->pagesView->output($this->routeName);
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

		$return = $this->twig->render('content.html.twig', $content_array);

		return $return;
	}
}