<?php
	/**
	 * Variables for website configuration
	 */
	define ("APPNAME",		"Appname");
	define ("COMPANY",		"Appname Inc.");
	define ("ADDRESS",		"Room 3520, HKUST, Clear Water Bay,<br>
								Kowloon, Hong Kong");
	define ("CONTACT",		"+852 2358 8888");
	define ("EMAIL",		"appname@connect.ust.hk");
	
	/**
	 * Variables for database configuration
	 */
	define ("DB_HOST",		"localhost");
	define ("DB_USERNAME",	"root");
	define ("DB_PASSWORD",	"");
	define ("DB_NAME",		"appnamedb");
	define ("DB_DSN",		"mysql:host=localhost;dbname=appnamedb");
	
	date_default_timezone_set("Asia/Hong_Kong");
	require("db/pois_class.php");
?>
