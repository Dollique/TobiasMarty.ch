<?php

// *!* This is a temporary way to turn on errors on the hosting server online.
error_reporting(E_ALL);
ini_set("display_errors", 1);

if(!defined('DS')) define('DS', DIRECTORY_SEPARATOR);

require_once(realpath(__DIR__ .DS.'..') . DS ."core". DS . "bootstrap.php");