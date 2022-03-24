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


include 'dashboard.html.php';
?>