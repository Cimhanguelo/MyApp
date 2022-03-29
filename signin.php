<?php

include("assets/dbConnect.php"); //Establishing connection with our database
session_start();

if(empty($_POST["username"]) || empty($_POST["password"])) 
{
    $GLOBALS['loginError'] = 'Both fields are required.';
}

//else echo $OK

    $username = $_POST['username'];
    $password = MD5($_POST['password']);
    //$sql = "SELECT * FROM users WHERE username LIKE '$email' AND password LIKE '$password' ";
    //$sql="SELECT userid FROM users WHERE email='$email' and password='$password'";

    //$result = $conn->query($sql);
   // $result=mysqli_query($db,$sql);
    $query = "SELECT user_id, full_name, username, email, 
     date(date) as date FROM user WHERE email=? OR username=? AND password=? LIMIT 1";
    $stmt = $db->prepare($query);
    if($stmt){
        $stmt->bind_param('sss', $username, $username, $password);
        $stmt->execute();
        $stmt->bind_result($userid, $fullname, $username, $email,  $date );
        $stmt->fetch();
        $_SESSION['email'] = $email;
        $_SESSION['userid'] = $userid;
        $_SESSION['fullname'] = $fullname;
        $_SESSION['username'] = $username;
        $_SESSION['date'] = $date;
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

    $db -> close();

?>