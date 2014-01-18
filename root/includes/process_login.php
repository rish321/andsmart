<?php
include_once 'db_connect.php';
include_once 'functions.php';
 
sec_session_start(); // Our custom secure way of starting a PHP session.


if (isset($_POST['email'], $_POST['p'])) {
    $email = $_POST['email'];
    $password = $_POST['p']; // The hashed password.
    $back = login($email, $password, $mysqli) ; 
    if ($back == true) {
        // Login success 
  //  	echo "sdfsdfasdf";
        header('Location: ../../user_home.php');
    } else {
        // Login failed 
        header('Location: ../../user_login.php?error=1');
    }
} else {
    // The correct POST variables were not sent to this page. 
    echo 'Invalid Request';
}
