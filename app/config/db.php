<?php

if(is_readable(__DIR__.'/db.ini') && ($_SERVER['DOCUMENT_ROOT'] != "C:/xampp/htdocs")) $db_params = parse_ini_file(__DIR__.'/db_tmarty.ini', false); // *!* ONLY FOR TESTING PURPOSE!
elseif(is_readable(__DIR__.'/db.ini')) $db_params = parse_ini_file(__DIR__.'/db.ini', false);

define('DB_HOST',$db_params["host"]);
define('DB_NAME',$db_params["dbname"]);
define('DB_USER',$db_params["user"]);
define('DB_PASS',$db_params["password"]);