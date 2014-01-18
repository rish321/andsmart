<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>

<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();
?>
<?php if (login_check($mysqli) == true) : ?>
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
	   </div>
   </div>	
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
  <div class="main">
	   <div class="content-top">
			 <div class="top-box">
				<form action="results.php" method="post">
			<text font size="20"> I want </text> 			&nbsp;&nbsp;&nbsp;&nbsp;
			<select name="Worker" >
                                 <option value="electrician">Electrician</option>
                                 <option value="plumber">Plumber</option>
                                 <option value="driver">Driver</option>
                                 <option value="laundry">Laundry</option>
                                 <option value="maid">House Maid</option>
                                 <option value="milkman">Milkman</option>
                                 <option value="cook">Cook</option>
                                 <option value="sweeper">Sweeper</option>
                                 <option value="labourer">Labourer</option>
                                 <option value="cobbler">Cobbler</option>
                                 <option value="barber">Barber</option>
                                 <option value="mechanic">Mechanic</option>
                                 <option value="tailor">Tailor</option>
                                 <option value="carpenter">Carpenter</option>
                                 <option value="water">Water Man</option>
                                 <option value="tiffin">Tiffin</option>
                                 <option value="grocer">Grocer</option>
                                 <option value="gardener">Gardener</option>
                                 <option value="dishwasher">Dish-washer</option>
                                 <option value="painter">Painter</option>
                                 <option value="other">Other</option>
			</select>
			&nbsp;&nbsp;&nbsp;&nbsp;			&nbsp;&nbsp;&nbsp;&nbsp;			&nbsp;&nbsp;&nbsp;&nbsp;
			<text font size="20"> My Location </text>			&nbsp;&nbsp;&nbsp;&nbsp;
			<select name="location" >
                                 <option value="Hyderabad_Jublee">Hyderabad Jublee</option>
                                 <option value="Secunderabad">Secunderabad</option>
                                 <option value="Keshavigiri">Keshavigiri</option>
                                 <option value="Golkonda">Golkonda</option>
                                 <option value="Amberpet">Amberpet</option>
                                 <option value="Begumpet">Begumpet</option>
                                 <option value="Lalaguda">Lalaguda</option>
                                 <option value="Lingampally">Lingampally</option>
                                 <option value="SanathNagar ">SanathNagar </option>
                                 <option value="HimmathNagar">Himmath Nagar</option>
                                 <option value="Kachiguda ">Kachiguda </option>
                                 <option value="HimayathNagar">HimayathNagar</option>
                                 <option value="BanjaraHills">Banjara Hills</option>
                                 <option value="Uppal">Uppal</option>
                                 <option value="Falaknuma">Falaknuman</option>
                                 <option value="Kukatpally">Kukatpally</option>
                                 <option value="ChandaNagar">Chanda Nagar</option>
                                 <option value="Sainikpuri">Sainikpuri</option>
                                 <option value="Somajiguda">Somajigudar</option>
                                 <option value="Gachibowli">Gachibowli</option>
                                 <option value="Kairtabad">Kairtabad</option>
			</select>
			&nbsp;&nbsp;&nbsp;&nbsp;			&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit">
				
			</form>
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
<?php else : ?>
<p> 
<span class="error">You are unauthorized to access this page.</span> Please <a href="user_login.php">login</a>.
</p>
<?php endif; ?>

    	
    	
            
