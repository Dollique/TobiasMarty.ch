<?php
class pagesView {
    private $model;
	
    public function __construct(pagesModel $model) {
        $this->model = $model;
    }
	
    public function renderPage() {
		$page = $this->model->loadPage(1);
		return $page->content;
    }
}
?>