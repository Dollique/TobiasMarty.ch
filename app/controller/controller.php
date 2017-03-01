<?php

namespace TobiasMarty\controllers;

class pagesController {
    private $model;
    
    public function __construct(\TobiasMarty\models\pagesModel $model) {
        $this->model = $model;
    }
    
    public function someAction() {
        // some user action was triggered by URL action=someAction
		
		return "UserAction";
    }
}
?>