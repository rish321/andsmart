<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>NIPUण </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="keywords" content="Enginery Iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(
hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
<!--slider-->
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
<!-- Navigation -->
 <script src="js/navigation.js" type="text/javascript"></script>
    <script>
        $(function() 
        {
            $(".nav").each(function()
            {
                new ResponsiveNav($(this), 1680);
            });
        });
    </script>    
</head>
<body>
<div class="wrap"> 	
<div class="header">	
     <div class="header-top">
		 <div class="logo">
			 <h1><a href="index.html">NIPUण </a></h1>
		 </div>
	    <div id="text-6" class="visible-all-devices header-text ">			
	    	<div class="textwidget">
		        Want Job? <br>
				<h5 class="phone">9502429261</h5></div>
		</div>
		 <div class="clear"></div> 
	   </div>   </div>	
   <!------ Slider ------------>
   <div class="banner">
         <div class="nav">
				<div class="navControl">
				    <a href="#">Menu</a>
				</div>
	    	  	<ul>
	    	  	   <li><a href="index.html">Home</a></li>
				   <li><a href="about.html">About us</a></li>
						
				   <li><a href="contact.html">Contact</a></li>
				</ul>
	    	</div>
	    	

	    </div>
  <!------ End Slider  ------------>
  <div class="main">
	   <div class="content-top">
			 <div class="top-box">

<?php 
include_once 'db_connect.php';
$occupation = $_POST["Worker"];
$location = $_POST["location"];

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



//echo $occupation."<br />".$location;



?>
				
<br>
<a href="pre_experience.html"><img src="images/worker_logo.png" alt=""/> Show My Previous Workers </a>

				
			 </div>
  <div class="section group">
				
				<div class="clear"></div>
			</div>
		</div>
		
	   </div>
	   <div class="footer">
		  <div class="footer-text">
				<h2>Get in touch</h2>
				
				<ul class="follow_icon">
					<li><a href="#" style="opacity: 1;"><img src="images/fb.png" alt=""></a></li>
					<li><a href="#" style="opacity: 1;"><img src="images/tw.png" alt=""></a></li>
					<li><a href="#" style="opacity: 1;"><img src="images/rss.png" alt=""></a></li>
					<li><a href="#" style="opacity: 1;"><img src="images/g+.png" alt=""></a></li>
					<li><a href="#" style="opacity: 1;"><img src="images/pin.png" alt=""></a></li>
				</ul>
				<div class="copy">
					
				</div>
			</div>	
		</div>
	</div>
</body>
</html>

    	
    	
            
