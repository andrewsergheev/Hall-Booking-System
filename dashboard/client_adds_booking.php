<?php
include('includes/functions.php');
global $hall_id;
//$hall_id_name = 0;
if(isset($_REQUEST['hall_id_name']) ){
	session_start();
    $hall_id = $_REQUEST['hall_id_name'];
	$_SESSION['hall'] = $hall_id;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Add Booking</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<!-- Animation -->
 <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" style="background: #f6f6f6;">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="index.php">Hull Village Hall</a>
      <!-- <div class="phone"><span>Call Today</span>320-123-4321</div> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php#about" class="page-scroll">About</a></li>
        <li><a href="index.php#rooms" class="page-scroll">Our Halls</a></li>
        <li><a href="index.php#gallery" class="page-scroll">Gallery</a></li>
        <li><a href="index.php#contact" class="page-scroll">Contact</a></li>
        <li><a href="client_adds_booking.php" class="page-scroll">Book A Hall</a></li>
        <li><a href="login.php" class="page-scroll">Log in</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
</nav>
	<header id="header">
<div class="jumbotron" style="background-image: url('img/intro-bg.jpg');">
        <div class="container" style="padding: 100px;">
          <h1 class="text-center" style="color: #fff;">Book Your Hall</h1>
        </div>
      </div>
	</header>

<!-- Add Booking Section -->
<div id="add_booking">
  <div class="container">
    <div class="section-title">
      <h2>Add Booking</h2>
	<div class="col-md-6"><button type="button" class="btn btn-primary btn-block" id="newClient" onclick="showContent(1)">New Customer</button></div>
	<div class="col-md-6"><button type="button" class="btn btn-primary btn-block" id="oldClient" onclick="showContent(2)">Existing Customer</button></div>
    </div>
	 <div class="row">
		 <div data-aos="zoom-in-up">
			 <?php include('bookingForm.php');?>
			 <?php include('oldBookingForm.php');?>
		 </div>
      </div>
  </div>
</div>

<!-- Contact Section -->
<div id="contact">
  <div class="container">
    <div data-aos="zoom-in-up"><div class="col-md-8">
      <div class="row">
        <div class="section-title">
          <h2>Get In Touch</h2>
          <p>Please fill out the form below to send us an email and we will get back to you as soon as possible.</p>
        </div>
		<?php include('mail/contact.php'); ?>
        <form name="sentMessage" id="contactForm" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Name" required>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" name="message" class="form-control" rows="4" placeholder="Message" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" name="sendMessage" class="btn btn-custom btn-lg">Send Message</button>
        </form>
      </div>
		</div></div>
    <div data-aos="zoom-in-up"><div class="col-md-3 col-md-offset-1 contact-info">
      <div class="contact-item">
        <h4>Contact Info</h4>
        <p><span>Address</span>Hull Village Hall<br>
          South Bridge Road, Kingston upon Hull HU9 1TL</p>
      </div>
      <div class="contact-item">
        <p><span>Phone</span> +1 123 456 1234</p>
      </div>
      <div class="contact-item">
        <p><span>Email</span> info@company.com</p>
      </div>
		</div></div>
    <div class="col-md-12">
      <div data-aos="fade-up"
     data-aos-duration="1000"><div class="row">
        <div class="social">
          <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>
		  </div></div>
    </div>
  </div>
</div>
<!-- Footer Section -->
<div id="footer">
  <div class="container text-center">
    <p>&copy; 2021 Hull Village Hall</p>
  </div>
</div>


<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/nivo-lightbox.js"></script>
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
<!--<script type="text/javascript" src="js/contact_me.js"></script>-->
<script type="text/javascript" src="js/main.js"></script>



<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/604bb057067c2605c0b7cbb8/1f0jqhm6v';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!--Animation Script-->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

<!--Form Control Script-->
<script>
	document.getElementById("bookingForm").style.display = "none";
	document.getElementById("searchClient").style.display = "none";
	document.getElementById("newBookingForm").style.display = "none";

	window.onload = function() {
		document.getElementById("newBookingForm").style.display = "block";
	};
	function showContent(a) {
		if (a == 1) {
			document.getElementById("bookingForm").style.display = "block";
			document.getElementById("searchClient").style.display = "none";
			document.getElementById("newBookingForm").style.display = "none";

		}
		if (a == 2) {
			document.getElementById("bookingForm").style.display = "none";
			document.getElementById("searchClient").style.display = "block";
			document.getElementById("newBookingForm").style.display = "block";
		}else {
			document.getElementById("bookingForm").style.display = "block";
			document.getElementById("searchClient").style.display = "none";
			document.getElementById("newBookingForm").style.display = "none";
		}
	}
$('#contactForm').submit(function() {
    window.location = window.location + "#contact";
});
</script>
</body>
</html>
