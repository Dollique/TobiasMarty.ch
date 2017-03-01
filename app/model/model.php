<?php
class pagesModel {
	private $pdo;
	private $page;
	
	public function __construct(PDO $pdo) { // (PDO $pdo)
		$this->pdo = $pdo;
	}
	
	public function loadPage($id) {
		$stmt = $this->pdo->prepare('SELECT * FROM pages');
		$stmt->execute([$id]);
		return $stmt->fetch();
	}
	
	public function getPage() {
		return $this->page;
	}
	
}
?>