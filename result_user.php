<?php 

include_once 'root/includes/db_connect.php';

$pvalue = json_decode(stripslashes($_POST["json_obj"]), true);

$loc_final = $pvalue["mark"]."_".$pvalue["series"];

$array = explode(',', $pvalue["language"]);
//echo $pvalue["worker"]." ".$pvalue["mark"]." ".$pvalue["series"]." ".$pvalue["language"] ;

if($pvalue["language"]!='' && $pvalue["language"]!='null'){
	if($pvalue["series"] == '' )
		$query = "select * from worker where occupation='".$pvalue["worker"]."' AND location like '%".$pvalue["mark"]."%' AND ( ";
	else
		$query = "select * from worker where occupation='".$pvalue["worker"]."' AND location='".$loc_final."' AND ( ";

	for ($i = 0; $i < count($array)-1; ++$i) {
		$query .= " language like '%".$array[$i]."%' OR  " ;
	}
	$query .= " language like '%".$array[$i]."%') ;";
}
else{
	if($pvalue["series"] == '' )
		$query = "select * from worker where occupation='".$pvalue["worker"]."' AND location like '%".$pvalue["mark"]."%' ;";
	else
		$query = "select * from worker where occupation='".$pvalue["worker"]."' AND location='".$loc_final."' ;";
}

//echo $query;

$result = mysqli_query($con,$query);

if(mysqli_num_rows($result))
{
	echo "Results: <br /><br />";
        echo "<table align='center' style='margin: 0px auto; width:80%'>";
        echo "<tr><th align='left' style='font-weight: bold; '> Name </th> <th align='left' style='font-weight: bold; '> Mobile No. </th>";
	echo "<th align='left' style='font-weight: bold; '> City </th><th align='left' style='font-weight: bold; '> Area </th><th align='left' style='font-weight: bold; '> Language </th>  <th align='center' style='font-weight: bold; '> Rating </th> </tr>";
        while($row = mysqli_fetch_array($result))
        {
		list($city_name, $area_name) = explode("_", $row['location']);
                echo "<tr>";
                echo "<td align='left'>". $row['name']. "</td><td align='left'> <a href='tel:".$row['mobile_no']."'>" . $row['mobile_no']. "</a></td> <td align='left'>$city_name</td><td align='left' >$area_name</td><td align='left' >".$row['language']."</td><td align='center'>". $row['rating']. "</td>" ;
                echo "</tr>";
        }
        echo "</table>";
//        echo "employee is there";
}
else
        echo "No employee found in this area";



/*

include_once 'root/includes/db_connect.php';

$occupation = $_POST["worker"];
$loc1 = $_POST["mark"];
$loc2 = $_POST["series"];
$location = $loc1."_".$loc2;

$query = "select * from worker where location="."'$location'"." and occupation="."'$occupation' ; ";

$result = mysqli_query($con,$query);

if(mysqli_num_rows($result))
{
	echo "<table align='center' style='margin: 0px auto; width:80%'>";
	echo "<tr><th align='left'  style='font-weight: bold;' >S.No.</th> <th align='left' style='font-weight: bold; '> Name </th> <th align='left' style='font-weight: bold; '> Mobile No. </th> <th align='center' style='font-weight: bold; '> Rating </th> </tr>";
	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td align='left'>". $row['SNo']. "<td align='left'>". $row['name']. "</td><td align='left'> <a href='tel:".$row['mobile_no']."'>" . $row['mobile_no']. "</a> </td><td align='center'>". $row['rating']. "</td>" ;
		echo "</tr>";
	}
	echo "</table>";
//        echo "employee is there";
}
else
	echo "employee is not there";

*/

//echo $occupation."<br />".$location;

?>
