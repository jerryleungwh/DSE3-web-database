<?php
	require "../config.php";
	try {
		$pdo = new PDO("mysql:host=" . DB_HOST, DB_USERNAME, DB_PASSWORD);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->query("CREATE DATABASE IF NOT EXISTS " . DB_NAME);
		echo "Database and ";
		
		$pdo->query("USE " . DB_NAME);
		$sql = file_get_contents("init_tables.sql");
		$pdo->query($sql);
		echo "tables installed successfully.";
		
	} catch(PDOException $err) {
		die("ERROR: " . $err->getMessage());
	}
	unset($pdo);
?>
