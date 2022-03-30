<?php

include("assets/databaseConnection.php"); //Establishing connection with our database
session_start();

if(empty($_POST["username"]) || empty($_POST["password"])) 
{
    $GLOBALS['loginError'] = 'Both fields are required.';
}

    $username = $_POST['username'];
    $password = MD5($_POST['password']);
    
    $query = "SELECT user_id, full_name, username, email, 
     dob, gender FROM user WHERE email=? OR username=? AND password=? LIMIT 1";
    $stmt = $db->prepare($query);
    if($stmt){
        $stmt->bind_param('sss', $username, $username, $password);
        $stmt->execute();
        $stmt->bind_result($userid, $fullname, $username, $email,  $dob, $gender );
        $stmt->fetch();
        $_SESSION['email'] = $email;
        $_SESSION['userid'] = $userid;
        $_SESSION['fullname'] = $fullname;
        $_SESSION['username'] = $username;
        $_SESSION['dob'] = $dob;
        $_SESSION['gender'] = $gender;
        //check if user is found
        if(empty($userid) && empty($username)){
            $error  = "Incorrect username or password";
            include 'error.html.php';
            exit;
        }
        //goto user dashboard
        header('Location: user');
    }
    else
    {
        $error  = "Email / Password is Invalid ". mysqli_error($db);
        include 'error.html.php';
        exit;
    }
    $stmt->close();
    $db -> close();

?>