<?php
	require("config.php");
	session_start();
	$action = isset($_GET['action'])? $_GET['action'] : "";
	$username = isset($_SESSION['username'])? $_SESSION['username'] : "";
	
	if ($action != "logout" && $username != "Admin") {
		login();
		exit();
	}
	
	switch ($action) {
		case "logout":
			logout();
			break;
			
		case "statistic":
			statistic();
			break;
		case "list-trips":
			listTrips();
			break;
		case "list-pois":
			listPois();
			break;
			
		case "check-poi":
			checkPoi();
			break;
			
		default:
			homepage();
	}
	
	function login() {
		header("Location: user.php?action=login");
	}
	
	function logout() {
		unset($_SESSION['username']);
		header("Location: index.php");
	}
	
	function statistic() {
		require("inc/error.php");
	}
	
	function listTrips() {
		require("inc/error.php");
	}
	
	function listPois() {
		$results = array();
		$data = Poi::getList("ORDER BY category,id");
		$results['pois'] = $data['results'];
		$results['totalRows'] = $data['totalRows'];
		require("inc/pois_manage.php");
	}
	
	function checkPoi() {
		if (isset($_POST['approve'])) {
			// Admin has approved the POI: change the status to Approved
			$poi = Poi::getById((int) $_POST['poi_id']);
			$poi->values['status'] = "Approved";
			$poi->update();
			header("Location: admin.php?action=list-pois");
		
		} elseif (isset($_POST['reject'])) {
			// Admin has rejectd the POI: change the status to rejectd
			$poi = Poi::getById((int) $_POST['poi_id']);
			$poi->values['status'] = "Rejected";
			$poi->update();
			header("Location: admin.php?action=list-pois");
		
		} else {
			// Admin has cancelled changes: return to the POI list
			header("Location: admin.php?action=list-pois");
		}
	}
	
	function homepage() {
		header("Location: index.php");
	}
?>
