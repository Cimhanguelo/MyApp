<?php

error_reporting( E_ALL );
ini_set( "display_errors", 1 );
session_start();

// submit update user data
if(isset($_POST['action']) && $_POST['action'] == "Submit"){
    include("../assets/databaseConnection.php");

    $fullname 		= $_POST['fullname'];
    $username 		= $_POST['username'];
    $email 			= $_POST['email'];
    $dob    	= $_POST['dob'];
    $gender 	= $_POST['gender'];
echo $dob;
echo $gender;
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

include 'dashboard.html.php';
?>