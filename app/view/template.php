<?php

namespace app\view;

class template {
	public $template;
	
	public function __construct($template) {
		$this->template = $template;
	}
	
	private function getConfig() {
		require_once(TPL_PATH . "/" . $this->template . "/config.php");
	}
	
	public function render($section) {
		$this->getConfig();
		$tplpath = TPL_PATH . $this->template . "/" . $section . "." . TPL_FILETYPE;
		
		if (is_readable($tplpath)) {
			ob_start();
			require_once $tplpath;
			return ob_get_clean();
		}
	}
}

?>