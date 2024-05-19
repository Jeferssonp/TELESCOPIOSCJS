<?php
// Free html5 templates : www.zerotheme.com

$text = "<span style='color:red;'>Error! Please try again.</span>";

if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = "youremail@gmail.com";
	$subject = "Zerotheme - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Zerotheme";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue;'>Your Message was sent successfully !</span>";
	}
}
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>zMaster - Free Responsive Html5 Css3 Template</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
	<link href='./images/favicon.ico' rel='icon' type='image/x-icon'/>
    
</head>
<body>
<div class="wrap-body">
<!--------------Header--------------->
<header>
	<div class="top-header">
		<div class="zerogrid">
			<div class="row">
				<nav>
					<div class="wrap-nav">
						<a class="toggleMenu" href="#">--- Menu ---</a>
						<ul class="menu">
							<li><a href="index.html">Home</a></li>
							<li><a href="index.html#box-1">About</a></li>
							<li><a href="index.html#box-2">Team</a></li>
							<li><a href="index.html#box-3">Services</a></li>
							<li><a href="index.html#box-4">Pricing</a></li>
							<li><a href="index.html#box-5">Projects</a></li>
							<li><a href="index.html#box-6">Contact</a></li>
							<li><a href="index.html#box-7">Subscribe Email</a></li>
						</ul>
					</div>
				</nav>
				
			</div>
		</div>
	</div>
	<div class="wrap-header">
		<div class="zerogrid">
			<div id="logo"><a href="#"><img src="./images/logo.png"/></a></div>
			<h1 class="hptitle">Design Templates and Themes in Minutes</h1>
			<p class="hpsubtitle ">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.</br>At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore. </p>
		</div>
	</div>
</header>
 
<!--------------Content--------------->
<section class="container">
	<div id="main-content" class="wrap-container">
		<div class="zerogrid">
			<div class="message">
				<div class="wrap">
					<div class="text"><?php echo $text;?></div>
					<div class="back"><a href="index.html"><<< Back to HomePage</a></div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<footer>
	<div class="copyright">
		<div class="footer-social">
			<a href="#"><img src="images/facebook.png" title="facebook"/></a>
			<a href="#"><img src="images/twitter.png" title="twitter"/></a>
			<a href="#"><img src="images/google.png" title="google"/></a>
			<a href="#"><img src="images/pinterest.png" title="pinterest"/></a>
			<a href="#"><img src="images/instagram.png" title="instagram"/></a>
		</div>
		<p>Copyright © 2015 - Designed by <span><a href="http://www.zerotheme" title="free website templates">ZEROTHEME</a></span></p>
	</div>
</footer>

</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/navigation.js"></script>
</body></html>