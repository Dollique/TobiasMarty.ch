<?php

namespace app\view;

class pages {
    private $model;
	
    public function __construct(\app\model\pages $model) {
        $this->model = $model;
    }
	
    private function renderPage() {
		$page = $this->model->loadPage(1); // *!* TODO: decide which page to load using Routing (URLs)
		return $page["content"];
    }
	
	public function getTemplate($section = "header", $tpl = TPL_DEFAULT) {
		$getTPL = new template($tpl);
		$renderTPL = $getTPL->render($section);
		
		return $renderTPL;
	}
	
	public function output() {
		return $this->renderPage();
	}
}

?>