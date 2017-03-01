<?php

namespace app\view;

class pagesView {
    private $model;
	
    public function __construct(\app\model\pagesModel $model) {
        $this->model = $model;
    }
	
    private function renderPage() {
		$page = $this->model->loadPage(1);
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