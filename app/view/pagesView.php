<?php

namespace app\view;

class pagesView {
    private $model;
	
    public function __construct(\app\model\pagesModel $model) {
        $this->model = $model;
    }
	
    public function renderPage() {
		$page = $this->model->loadPage(1);
		return $page["content"];
    }
	
	public function getTemplate() {
		
	}
	
	public function output() {
		return $this->renderPage();
	}
}


class Template {
	public $template;
	
	public function __construct($template) {
		$this->template = $template;
	}
	
	public function returnTemplate() {
		return $this->template;
	}
}

?>