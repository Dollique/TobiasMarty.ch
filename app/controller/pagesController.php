<?php

namespace app\controller;

class pagesController {
    private $model;
    
    public function __construct(\app\model\pagesModel $model) {
        $this->model = $model;
    }
    
    public function someAction() {
        // some user action was triggered by URL action=someAction
		
		return "UserAction";
    }
}
?>