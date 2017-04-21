<?php
	// database config
	if($_SERVER['DOCUMENT_ROOT'] == "C:/xampp/htdocs") { // if local
		define('DB_HOST','localhost');
		define('DB_NAME','tobiasmarty');
		define('DB_USER','root');
		define('DB_PASS','');
	}
	else {
		define('DB_HOST','localhost');
		define('DB_NAME','tobiasmarty');
		define('DB_USER','root');
		define('DB_PASS','');
	}
	
	// Path config
	if(!defined('DS')) define('DS', DIRECTORY_SEPARATOR);
	
	if($_SERVER['DOCUMENT_ROOT'] == "C:/xampp/htdocs") { // if local
		define('BASE_DIR', "//localhost".dirname($_SERVER['SCRIPT_NAME']).DS);
	}
	else define('BASE_DIR', DS); // *!* TO BE TESTED!
	
	
	// default route
	const DEF_ROUTE = 'pages'; // default route
	
	
	// Template config
	const TPL_PATH = 'templates' . DS;
	const TPL_DEFAULT = 'default';
	
	
	// General config
	const APP_NAME = 'TobiasMarty.ch';
	const APP_DESCRIPTION = 'My future portfolio website';
?>