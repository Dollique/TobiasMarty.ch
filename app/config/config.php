<?php

// Path config
if(!defined('DS')) define('DS', DIRECTORY_SEPARATOR);

// Define root path
if(!defined('ROOT')) define('ROOT', realpath(__DIR__ .DS.'..'.DS.'..').DS); // path: /app/public/index.php


// default route
const DEF_ROUTE = 'pages'; // default route


// Template config
const TPL_PATH = 'templates' . DS;
const TPL_DEFAULT = 'tobiasmarty';


// General config
const APP_NAME = 'TobiasMarty.ch';
const APP_DESCRIPTION = 'My future portfolio website';