<?php

error_reporting( E_ALL );
ini_set( "display_errors", 1 );
session_start();

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