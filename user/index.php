<?php

error_reporting( E_ALL );
ini_set( "display_errors", 1 );
session_start();

// submit update user data
if(isset($_POST['action']) && $_POST['action'] == "Submit"){
	// connect database
	include("../assets/databaseConnection.php");

	$fullname	= $_POST['fullname'];
	$username	= $_POST['username'];
	$email		= $_POST['email'];
	$dob	= $_POST['dob'];
	$gender	= $_POST['gender'];

	$sql = "UPDATE user SET full_name=?, username=?, email=?, dob=?, gender=? WHERE user_id = ?";
	$stmt = $db->prepare($sql);
	$stmt->bind_param('sssssi', $fullname, $username, $email, $dob, $gender, $_POST['userid'] );
	if ($stmt->execute()) {
		$_SESSION['message'] = "Profile updated successful";
		$back = '?profile';
		include 'message.html.php';
		exit;
	} else {
		$_SESSION['message'] = "Error: " .$db->error;
	}
	$stmt->close();
}

// user login check
if (!isset($_SESSION['email'])) {
	header("Location: ../"); 
}

// logout
if(isset($_GET['logout'])){
	session_unset();
	header('Location: ../');
	exit();
}

//open update profile form
if(isset($_GET['update-profile'])){
	include 'user-detail-form.html.php';
	exit();
}

//open profile 
if(isset($_GET['profile'])){
	include 'user-detail.html.php';
	exit();
}

if(isset($_GET['current-month'])) {
	// connect database
	include("../assets/databaseConnection.php");
	$user_id = $_SESSION['userid'];

try{
	// DATEADD(WEEK, -1, GETUTCDATE())
	$query = "SELECT user_symptom.id as id, name, pain_level, user_symptom.date as date FROM user_symptom INNER JOIN symptom ON symptom_id = symptom.id WHERE user_symptom.user_id = $user_id AND DATE(user_symptom.date) > (NOW() - INTERVAL 30 DAY)";
	$result = $db->query($query);
	if($result){
		$symptoms = $result->fetch_all(MYSQLI_ASSOC);
		$chart_query = "SELECT name, sum(pain_level) as level, user_symptom.date as date FROM user_symptom INNER JOIN symptom ON symptom_id = symptom.id WHERE user_id = $user_id AND DATE(user_symptom.date) > (NOW() - INTERVAL 30 DAY) GROUP BY name";
		$chart_result = $db->query($chart_query);
		if($chart_result) {
			$charts = $chart_result->fetch_all(MYSQLI_ASSOC);
			$dashboard = "Current Month";
			//print_r($charts);
			include 'dashboard.html.php';
			exit();
		}else {
			echo $db->error;
		}
	}else{
	  $_SESSION['message'] = 'Error occured '. $db->error;
	  $back = '.';
	  include 'message.html.php';
	}
  }catch(Exception $ex){
	$_SESSION['message'] = 'Error occured '. $ex;
	include 'message.html.php';
  }   
	exit;
}

if(isset($_GET['last-quarter'])) {
	// connect database
	include("../assets/databaseConnection.php");
	$user_id = $_SESSION['userid'];

try{
	// DATEADD(WEEK, -1, GETUTCDATE())
	$query = "SELECT user_symptom.id as id, name, pain_level, user_symptom.date as date FROM user_symptom INNER JOIN symptom ON symptom_id = symptom.id WHERE user_symptom.user_id = $user_id AND DATE(user_symptom.date) > (NOW() - INTERVAL 90 DAY)";
	$result = $db->query($query);
	if($result){
		$symptoms = $result->fetch_all(MYSQLI_ASSOC);
		$chart_query = "SELECT name, sum(pain_level) as level, user_symptom.date as date FROM user_symptom INNER JOIN symptom ON symptom_id = symptom.id WHERE user_id = $user_id AND DATE(user_symptom.date) > (NOW() - INTERVAL 90 DAY) GROUP BY name";
		$chart_result = $db->query($chart_query);
		if($chart_result) {
			$charts = $chart_result->fetch_all(MYSQLI_ASSOC);
			$dashboard = "Last Quarter";
			//print_r($charts);
			include 'dashboard.html.php';
			exit();
		}else {
			echo $db->error;
		}
	}else{
	  $_SESSION['message'] = 'Error occured '. $db->error;
	  $back = '.';
	  include 'message.html.php';
	}
  }catch(Exception $ex){
	$_SESSION['message'] = 'Error occured '. $ex;
	include 'message.html.php';
  }   
	exit;
}

if(isset($_GET['this-week'])) {
	// connect database
	include("../assets/databaseConnection.php");
	$user_id = $_SESSION['userid'];

try{
	// DATEADD(WEEK, -1, GETUTCDATE())
	$query = "SELECT user_symptom.id as id, name, pain_level, user_symptom.date as date FROM user_symptom INNER JOIN symptom ON symptom_id = symptom.id WHERE user_symptom.user_id = $user_id AND DATE(user_symptom.date) > (NOW() - INTERVAL 7 DAY)";
	$result = $db->query($query);
	if($result){
		$symptoms = $result->fetch_all(MYSQLI_ASSOC);
		$chart_query = "SELECT name, sum(pain_level) as level, user_symptom.date as date FROM user_symptom INNER JOIN symptom ON symptom_id = symptom.id WHERE user_id = $user_id AND DATE(user_symptom.date) > (NOW() - INTERVAL 7 DAY) GROUP BY name";
		$chart_result = $db->query($chart_query);
		if($chart_result) {
			$charts = $chart_result->fetch_all(MYSQLI_ASSOC);
			$dashboard = "This Week";
			//print_r($charts);
			include 'dashboard.html.php';
			exit();
		}else {
			echo $db->error;
		}
	}else{
	  $_SESSION['message'] = 'Error occured '. $db->error;
	  $back = '.';
	  include 'message.html.php';
	}
  }catch(Exception $ex){
	$_SESSION['message'] = 'Error occured '. $ex;
	include 'message.html.php';
  }   
	exit;
}

// update symptoms
if (isset($_POST['submit-update']) && $_POST['submit-update'] == "Update") {
	// echo 'Update';
	// connect database
	include("../assets/databaseConnection.php");

	$note = $_POST['note'];
	$location = $_POST['location'];
	$reflection = $_POST['reflection'];
	$other_symptom = $_POST['other-symptom'];
	$agg_factor = $_POST['agg-factor'];
	$symptom_id = $_POST['symptom_id'];
	
	$sql = "UPDATE user_symptom SET daily_reflection=?, note=?, location=?, other_symptoms=?, agg_factors=? WHERE id = ?";
	$stmt = $db->prepare($sql);
	$stmt->bind_param('sssssi', $reflection, $note, $location, $other_symptom, $agg_factor, $symptom_id);

	if ($stmt->execute()){
		$_SESSION['message'] = "Symptom Update successful";
		$back = '?symptoms';
		include 'message.html.php';
		exit;
	} else {
		$_SESSION['message'] = "Error: " .$db->error;
		exit;
	}
}

//get symptoms detail
if (isset($_POST['get-detail']) && $_POST['get-detail'] == "Detail") {
	// connect database
	include("../assets/databaseConnection.php");
	$symptom_id = $_POST['symptom_id'];
	try{
		$query = "SELECT user_symptom.id as id, name, pain_level, daily_reflection, note, location, other_symptoms, agg_factors FROM user_symptom INNER JOIN symptom ON symptom_id = symptom.id WHERE user_symptom.id = $symptom_id";
		$result = $db->query($query);
		if($result){
			$symptoms = $result->fetch_all(MYSQLI_ASSOC);
			include 'symptom-detail.html.php';
			exit();
		}else{
		  $_SESSION['message'] = 'Error occured '. $db->error;
		  $back = '?symptoms';
		  include 'message.html.php';
		}
	  }catch(Exception $ex){
		$_SESSION['message'] = 'Error occured '. $ex;
		include 'message.html.php';
	  }   

}

if (isset($_GET['symptoms'])) {
	// connect database
	include("../assets/databaseConnection.php");
	$user_id = $_SESSION['userid'];

	try{
		$query = "SELECT user_symptom.id as id, name, pain_level FROM user_symptom INNER JOIN symptom ON symptom_id = symptom.id WHERE user_symptom.user_id = $user_id";
		$result = $db->query($query);
		if($result){
			$symptoms = $result->fetch_all(MYSQLI_ASSOC);
			include 'symptoms.html.php';
			exit();
		}else{
		  $_SESSION['message'] = 'Error occured '. $db->error;
		  $back = '.';
		  include 'message.html.php';
		}
	  }catch(Exception $ex){
		$_SESSION['message'] = 'Error occured '. $ex;
		include 'message.html.php';
	  }   
}

if (isset($_POST['submit-pain']) && $_POST['submit-pain'] == "Submit") {
	// connect database
	include("../assets/databaseConnection.php");

	$user_id = $_SESSION['userid'];
	$symptom_id = $_POST['symptom'];
	$pain_level = $_POST['pain-level'];
	$note = $_POST['note'];
	$location = $_POST['location'];
	$reflection = $_POST['reflection'];
	$other_symptom = $_POST['other-symptom'];
	$agg_factor = $_POST['agg-factor'];
	
	$sql = "INSERT INTO user_symptom (user_id, symptom_id, pain_level, daily_reflection, note, location, other_symptoms, agg_factors) 
	VALUES ('$user_id', '$symptom_id', '$pain_level', '$reflection', '$note', '$location', '$other_symptom', '$agg_factor')";

	if (mysqli_query($db , $sql)) {
		$_SESSION['message'] = "Symptom addition successful";
		$back = '?symptom-form';
		include 'message.html.php';
		exit;
	} else {
		$_SESSION['message'] = "Error: " .$db->error;
		exit;
	}
}

if (isset($_GET['symptom-form'])) {
	// connect database
	include("../assets/databaseConnection.php");

	try{
		$query = "SELECT id, name FROM symptom";
		$result = $db->query($query);
		if($result){
			$symptoms = $result->fetch_all(MYSQLI_ASSOC);
			include 'symptom-form.html.php';
			exit();
		}else{
		  $_SESSION['message'] = 'Error occured '. $db->error;
		  include 'message.html.php';
		}
	  }catch(Exception $ex){
		$_SESSION['message'] = 'Error occured '. $ex;
		include 'message.html.php';
	  }   
}

// load dash user dashboard
// connect database
include("../assets/databaseConnection.php");
$user_id = $_SESSION['userid'];

try{
	// DATEADD(WEEK, -1, GETUTCDATE())
	$query = "SELECT user_symptom.id as id, name, pain_level, user_symptom.date as date FROM user_symptom INNER JOIN symptom ON symptom_id = symptom.id WHERE user_symptom.user_id = $user_id ORDER BY user_symptom.date DESC";
	$result = $db->query($query);
	if($result){
		$symptoms = $result->fetch_all(MYSQLI_ASSOC);
		$chart_query = "SELECT name, sum(pain_level) as level FROM user_symptom INNER JOIN symptom ON symptom_id = symptom.id WHERE user_id = $user_id GROUP BY name";
		$chart_result = $db->query($chart_query);
		if($chart_result) {
			$charts = $chart_result->fetch_all(MYSQLI_ASSOC);
			$dashboard = "Over All";
			//print_r($charts);
			include 'dashboard.html.php';
			exit();
		}else {
			echo $db->error;
		}
	}else{
	  $_SESSION['message'] = 'Error occured '. $db->error;
	  include 'message.html.php';
	}
  }catch(Exception $ex){
	$_SESSION['message'] = 'Error occured '. $ex;
	include 'message.html.php';
  }   
?>