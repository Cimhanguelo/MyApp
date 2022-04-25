<?php
/**
 * 
 * User: 
 * Date: 30/03/2022
 * Time: 08:26
 */

$servername = "localhost";
$dbname='paindiary';
$username = "root";
$password = "";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
// echo "success";
