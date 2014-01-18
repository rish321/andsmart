<html>
<?php
include_once 'db_connect.php';
include_once 'functions.php';

sec_session_start(); // Our custom secure way of starting a PHP session.


$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['pass2'];
// $pass2 = $_POST['pass2'];
// echo $pass2;
if($email!="" && $password!="")
{
	$email_query  = "select * from members where email='$email';";
	$result = mysqli_query($con,$email_query);
	// echo $email_query;
	//echo $result;
	if(mysqli_num_rows($result))
		echo "User already exist";
	else	
	{
		$query = "insert into members (username,email,password,salt) values ('$username','$email','$password','12')";
		if(mysqli_query($con,$query))
		{
			$back = login($email, $password, $mysqli);
    			if ($back == true) {
  			     // Login success 
 			 //  	echo "sdfsdfasdf";
 		       header('Location: ../../user_home.php');
    		} else {
		        // Login failed 
		        header('Location: ../../user_login.php?error=1');
	    	}
			
			//echo $query; // Session
		}
		else
			echo "Fail"; 
	}
}
else
	echo "Invaild Page" ;
 
/*if (isset($_POST['email'], $_POST['p'])) {
    $email = $_POST['email'];
    $password = $_POST['p']; // The hashed password.
 
if (login($email, $password, $mysqli) == true) {
        // Login success 
        header('Location: ../protected_page.php');
    } else {
        // Login failed 
        header('Location: ../index.php?error=1');
    }
} else {
    // The correct POST variables were not sent to this page. 
    echo 'Invalid Request';*/

?>


<h1> hello </h1>
</html>
