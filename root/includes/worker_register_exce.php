<?php

include_once 'db_connect.php';
include_once 'worker_functions.php';

sec_session_start();

function checkfor_files($file_name, $db_name,$conn_t)
{

	include_once 'db_connect.php';
	$temp = explode(".", $_FILES[$file_name]["name"]);
	$allowedExts = array("gif", "jpeg", "jpg", "png");
	$extension = end($temp);

	if ((($_FILES[$file_name]["type"] == "image/gif")
				|| ($_FILES[$file_name]["type"] == "image/jpeg")
				|| ($_FILES[$file_name]["type"] == "image/jpg")
				|| ($_FILES[$file_name]["type"] == "image/pjpeg")
				|| ($_FILES[$file_name]["type"] == "image/x-png")
				|| ($_FILES[$file_name]["type"] == "image/png"))
			&& ($_FILES[$file_name]["size"] < 2000000)
			&& in_array($extension, $allowedExts))
	{
		if ($_FILES["file"]["error"] > 0)
		{   
			return false;
		}   
		else
		{   
			//echo "Upload: " . $_FILES[$file_name][$file_name] . "<br>";
			//echo "Type: " . $_FILES[$file_name]["type"] . "<br>";
			//echo "Size: " . ($_FILES[$file_name]["size"] / 1024) . " kB<br>";

			$fp      = fopen($_FILES[$file_name]['tmp_name'], 'r');
			$content = fread($fp, filesize($_FILES[$file_name]['tmp_name']));
			$content = addslashes($content);
			fclose($fp); 

			//$content =  mysqli_real_escape_string(file_get_contents($_FILES[$file_name]['tmp_name']));

			$name_file = $db_name;
			$size_file = $_FILES[$file_name]['size'];
			$type_file = $_FILES[$file_name]['type'];

			$file_query = "select * from upload where name='".$db_name."' ;";
			//echo $file_query."<br />";
			$result = mysqli_query($conn_t,$file_query);

			if(mysqli_num_rows($result))
				return false;// echo "file alredy there";
			else
			{
				$file_insert = "insert into upload(name,type,size,content) values('".$name_file."', ";
				$file_insert = $file_insert."'$type_file', $size_file, '$content');" ;
				//echo $file_insert;
				if(mysqli_query($conn_t,$file_insert))
					return true; // echo "jai ho";
				else
					return false; //echo "har gaye"; 
			}
		}   
	}
	else
		return false;
}


//header('Location: ../../worker_register.php?error=1');
//$photo = explode(".", $_FILES["photo"]["name"]);
//$id_proof = explode(".", $_FILES["photo"]["name"]);

//$photo = $_FILES["photo"]["name"];
//$id_proof = $_FILES["id_proof"]["name"];
$mobileno = $_POST["mobileno"];
$name = $_POST["name"];
$id_type = $_POST["id_proof_type"];
$id_no = $_POST["id_proof_no"];
$loc1 = $_POST['mark'];
$loc2 = $_POST['series'];
$loc_final = $loc1."_".$loc2;
$occupation = $_POST["occupation"];


$language = $_POST['language'];

$str = $mobileno." ".$name." ".$id_type." ".$id_no." ".$loc1." ".$language." ".$occupation;

/*foreach ($_POST['language'] as $lg_name)
{
	   $language .= $lg_name.",";
}*/



if(empty($mobileno) || empty($name) || empty($id_type) || empty($id_no) || empty($loc1)
		|| empty($language) || empty($occupation) ) {
//	echo $str;
	echo "Fail";
//	echo "Please provide all the requested fields.";
}
else
{
	//echo $mobileno." ".$id_type." ".$id_no;
	//echo "<br />";
	$photo_msg = true ; //checkfor_files("photo", $mobileno."_photo",$con);
	$proof_msg = true ; //checkfor_files("id_proof", $mobileno."_id_proof",$con);
	if(!$photo_msg || !$proof_msg)
	{
		if(!$photo_msg)
			echo "Error: User uploaded photo";
		if(!$proof_msg)
			echo "Error: ID Proof photo";
	}
	else
	{
		$worker_insert = "insert into worker(name,mobile_no,occupation,location,language,id_proof_type,id_proof_no)";
		$worker_insert .= "values('$name','$mobileno','$occupation','$loc_final', '$language' ,'$id_type','$id_no');";
		//echo $worker_insert;
		if(mysqli_query($con,$worker_insert))
		{
			echo "Success";
			//echo "Success";
			//$back = login($mobileno, $name, $occupation, $mysqli); 
			/*if($back)
				echo "Success";
				//header("Location: ../../index.php");
			else
				echo "fail";*/
		}
		else
			echo "Fail";
	}
}

