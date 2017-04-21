<?php

// Path config
if(!defined('DS')) define('DS', DIRECTORY_SEPARATOR);

if($_SERVER['DOCUMENT_ROOT'] == "C:/xampp/htdocs") { // if local *!* bad practise!
	define('BASE_DIR', "//localhost".dirname($_SERVER['SCRIPT_NAME']).DS);
}
else define('BASE_DIR', DS . 'demo' . DS); // *!* TO BE REPLACED!


// default route
const DEF_ROUTE = 'pages'; // default route


// Template config
const TPL_PATH = 'templates' . DS;
const TPL_DEFAULT = 'default';


// General config
const APP_NAME = 'TobiasMarty.ch';
const APP_DESCRIPTION = 'My future portfolio website';