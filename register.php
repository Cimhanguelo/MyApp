<?php
include("./assets/dbConnect.php");

$fullname 		= $_POST['fullname'];
$username 		= $_POST['username'];
$email       	= $_POST['email'];
$password 		= MD5($_POST['password']); //encrypt password

$query = "SELECT email, username FROM user WHERE email=? OR username=?";
    $stmt = $db->prepare($query);
    if($stmt){
        $stmt->bind_param('ss', $email, $username);
        $stmt->execute();
        $stmt->bind_result($email_address, $user_name);
        $stmt->fetch();
        if(!empty($email_address) || !empty($user_name)){
            $error = "This username or email is taken, please choose another one.";
            include 'error.html.php';
            exit;
        }
    }
$sql = "INSERT INTO user (full_name, username, email, password) VALUES ('$fullname', '$username', '$email', '$password')";

if (mysqli_query($db , $sql)) {
    header("location: registerthankyou.html");
} else {
    $error = mysqli_error($db);
    include 'error.html.php';
    exit;
}
$db -> close();

//header("location: signupthankyou.html");


?>