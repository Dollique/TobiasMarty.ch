<?php
class pagesController {
    private $model;
    
    public function __construct(pagesModel $model) {
        $this->model = $model;
    }
    
    public function someAction() {
        // some user action was triggered by URL action=someAction
		
		return "UserAction";
    }
}
?>