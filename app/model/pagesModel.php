<?php

namespace app\model;

class pagesModel {
	private $pdo;
	private $page;
	
	public function __construct() { // (PDO $pdo)
		$this->pdo = new \PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
	}
	
	public function loadPage($data, $field = "alias") {
		$stmt = $this->pdo->prepare("SELECT title, content FROM pages WHERE " . $field . "='" . $data . "';");
		
		$stmt->execute([$data]);
		return $stmt->fetch();
	}
	
	public function loadNav($parent) {
		$stmt = $this->pdo->prepare("SELECT fk_page FROM nav WHERE fk_parentpage = " . $parent . ";");
                $stmt->execute();
		return $stmt->fetchAll();
	}


	public function getPage() {
		return $this->page;
	}
	
}