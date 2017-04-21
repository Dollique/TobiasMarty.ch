<?php

namespace app\controller;

class pages {
    private $model;
    
    public function __construct(\app\model\pages $model) {
        $this->model = $model;
    }
    
    public function someAction() {
        // some user action was triggered by URL action=someAction
		
		return "UserAction";
    }
}