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
<script type="text/javascript" src="root/js/forms2.js"></script>
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

<!-- Slider menu --> 
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

<!--  End Banner -->

  <div class="main">
	   <div class="content-top">
			 <div class="top-box" >
		
<?php
include_once 'root/includes/register.inc.php';
include_once 'root/includes/functions.php';
?>

        <ul style="text-align:left" >
            <li>Usernames may contain only digits, upper and lower case letters and underscores</li>
            <li>Emails must have a valid email format</li>
            <li>Passwords must be at least 6 characters long</li>
            <li>Passwords must contain
                <ul>
                    <li>At least one upper case letter (A..Z)</li>
                    <li>At least one lower case letter (a..z)</li>
                    <li>At least one number (0..9)</li>
                </ul>
            </li>
            <li>Your password and confirmation must match exactly</li>
        </ul>
	<br />
	<br />
        <form name="register_form" action="root/includes/register_exec.php" method="post" name="registration_form" onsubmit="return regformhash();" >
	     <table align='center' style='margin: 0px auto; width:50%' >
             <tr><td align='left'>Username:</td><td align='left' ><input type='text'  name='username'   id='username' /></td> </tr>

            <tr><td align='left' >Email:</td><td align='left' >  <input type="text" name="email" id="email" /></td></tr>

            <tr><td align='left'>Password:</td><td align='left' > <input type="password" name="password" id="password"/></td></tr>
            <tr><td align='left'>Confirm password:</td><td align='left' > <input type="password" name="confirmpwd" id="confirmpwd" /></td></tr>
            <tr><td align='left'>&nbsp;</td><td align='left' > <input type="hidden" name="pass2" id="pass2" value="chacha" /></td></tr>
            <tr><td align='left'><input type="submit" value="Register" /></td><td align='left' ><a href="user_login.html">Already Registered ?</a></td></tr>
	    </table>

<!--            <input type="button" value="Register" onclick="return regformhash(this.form, this.form.username,this.form.email,this.form.password,this.form.confirmpwd);" /> -->
        </form>


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

    	
    	
            
