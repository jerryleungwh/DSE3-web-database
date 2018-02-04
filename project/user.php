<?php
	require("config.php");
	session_start();
	$action = isset($_GET['action'])? $_GET['action'] : "";
	$username = isset($_SESSION['username'])? $_SESSION['username'] : "";
	
	if ($action != "login" && $action != "logout" && !$username) {
		login();
		exit;
	}

	switch ($action) {
		case "login":
			login();
			break;
		case "logout":
			logout();
			break;
			
		case "overview":
			overview();
			break;
		case "list-trips":
			listTrips();
			break;
		case "list-pois":
			listPois();
			break;
		case "setting":
			setting();
			break;
		
		case "add-poi":
			addPoi();
			break;
		case "edit-poi":
			editPoi();
			break;
		case "view-poi":
			viewPoi();
			break;
			
		default:
			homepage();
	}
	
	function login() {
		$results = array();
		
		if (isset($_POST['submit'])) {
			// User has entered their password: give a new session
			if ($_POST['user_id'] == "Chris") {
				$_SESSION['username'] = "Chris";
				header("Location: index.php");
				
			} elseif ($_POST['user_id'] == "Admin") {
				$_SESSION['username'] = "Admin";
				header("Location: index.php");
				
			} else {
				$results['errorMessage'] = true;
				require("inc/login.php");
			}
		} else {
			// User has not enter their password yet: display the form
			require("inc/login.php");
		}
	}
	
	function logout() {
		unset($_SESSION['username']);
		header("Location: index.php");
	}
	
	function overview() {
		require("inc/error.php");
	}
	
	function listTrips() {
		require("inc/error.php");
	}
	
	function listPois() {
		$results = array();
		$data = Poi::getList("WHERE user_id='" . $_SESSION['username'] . "' ORDER BY category,id");
		$results['pois'] = $data['results'];
		$results['totalRows'] = $data['totalRows'];
		require("inc/pois_list.php");
	}
	
	function setting() {
		require("inc/error.php");
	}
	
	function addPoi() {
		$results = array();
		$results['pageTitle'] = "Add new POI";
		$results['formAction'] = "add-poi";
		$results['username'] = $_SESSION['username'];
		
		if (isset($_POST['submit'])) {
			// User has posted the POI edit form: save the new POI
			$poi = new Poi;
			$poi->storeFormValues($_POST);
			$poi->insert();
			header("Location: user.php?action=list-pois");
			
		} elseif (isset($_POST['cancel'])) {
			// User has cancelled their edits: return to the POI list
			header("Location: user.php?action=list-pois");
			
		} else {
			// User has not posted the POI edit form yet: display the form
			$results['poi'] = new Poi;
			require("inc/pois_edit.php");
		}
	}
	
	function editPoi() {
		$results = array();
		$results['pageTitle'] = "Edit POI";
		$results['formAction'] = "edit-poi";
		$results['username'] = $_SESSION['username'];
		
		if (isset($_POST['submit'])) {
			// User has posted the POI edit form: save the POI changes
			$poi = Poi::getById((int) $_POST['poi_id']);
			$poi->storeFormValues($_POST);
			$poi->update();
			header("Location: user.php?action=list-pois");
		
		} elseif (isset($_POST['delete'])) {
			$poi = Poi::getById((int) $_POST['poi_id']);
			$poi->remove();
			
			header("Location: user.php?action=list-pois");
		
		} elseif (isset($_POST['cancel'])) {
			// User has cancelled their edits: return to the POI list
			header("Location: user.php?action=list-pois");
			
		} else {
			// User has not posted the POI edit form yet: display the form
			$results['poi'] = Poi::getById((int) $_GET['poi-id']);
			if (!is_null($results['poi'])) {
				require("inc/pois_edit.php");
			} else {
				header("Location: index.php");
			}
		}
	}
	
	function viewPoi() {
		$results = array();
		$results['pageTitle'] = "View POI";
		$results['username'] = $_SESSION['username'];
		$results['poi'] = Poi::getById((int) $_GET['poi-id']);
		
		if (!is_null($results['poi'])) {
			require("inc/pois_detail.php");
		} else {
			header("Location: index.php");
		}
	}
	
	function homepage() {
		header("Location: index.php");
	}
?>
