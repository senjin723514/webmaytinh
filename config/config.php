<?php
$configDB = array();
$configDB["host"] 		= "computerstore.c5w2y2wuu5n9.ap-southeast-1.rds.amazonaws.com";
$configDB["database"]	= "computerstore";
$configDB["username"] 	= "admin";
$configDB["password"] 	= "123123123";
define("HOST", "computerstore.c5w2y2wuu5n9.ap-southeast-1.rds.amazonaws.com");
define("DB_NAME", "computerstore");
define("DB_USER", "admin");
define("DB_PASS", "123123123");
define('ROOT', dirname(dirname(__FILE__) ) );
//Thu muc tuyet doi truoc cua config; c:/wamp/www/lab/
define("BASE_URL", "http://".$_SERVER['SERVER_NAME']);//dia chi website
?>