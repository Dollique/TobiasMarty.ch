<?php
class pagesController {
    private $model;
    
    public function __construct(pagesModel $model) {
        $this->model = $model;
    }
    
    public function textClicked() {
        $this->model->text = 'Text Updated';
    }
}
?>