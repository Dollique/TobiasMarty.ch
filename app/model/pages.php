<?php

namespace app\model;

class pages {
	private $pdo;
	private $page;
	
	public function __construct(\PDO $pdo) { // (PDO $pdo)
		$this->pdo = $pdo;
	}
	
	public function loadPage($alias) {
		$stmt = $this->pdo->prepare('SELECT title, content FROM pages WHERE alias = "' . $alias . '";');
		$stmt->execute([$alias]);
		return $stmt->fetch();
	}
	
	public function getPage() {
		return $this->page;
	}
	
}