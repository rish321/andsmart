<?php
include_once 'root/includes/db_connect.php';
include_once 'root/includes/functions.php';



$pic_query = "select name,type, size,content from upload where name='123478_photo' ;";
$result = mysqli_query($con,$pic_query);
// Make sure the result is valid
if(mysqli_num_rows($result)>0) {
	// Get the row
	$row = mysqli_fetch_assoc($result);
	//echo "jai ho ".$row['type'];
	// Print headers
	header("Content-Type: ". $row['type']);
	header("Content-Length: ". $row['size']);
	//header("Content-Disposition: attachment; filename=". $row['name']);

	// Print data
	echo $row['content'];
}

?>

