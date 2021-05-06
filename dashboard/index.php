<?php

?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Hull Village Hall</title>
<meta name="description" content="">
<meta name="author" content="">

<!--
		* Title: Animate On Scroll Library
		* Author: michalsnik
		* Date: unknown
		* Code version: unknown
		* Availability: https://michalsnik.github.io/aos/
-->

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

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">Hull Village Hall</a>
      <!-- <div class="phone"><span>Call Today</span>320-123-4321</div> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll">About</a></li>
        <li><a href="#rooms" class="page-scroll">Our Halls</a></li>
        <li><a href="#gallery" class="page-scroll">Gallery</a></li>
        <li><a href="#contact" class="page-scroll">Contact</a></li>
        <li><a href="client_adds_booking.php" class="page-scroll">Book A Hall</a></li>
        <li><a href="login.php" class="page-scroll">Log in</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 intro-text">
            <h1>Hull Village Hall</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at.</p>
            <a href="#about" class="btn btn-custom btn-lg page-scroll">Learn More</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Get Touch Section -->
<div id="get-touch">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 col-md-offset-1">
        <h3>Cost for your home renovation project</h3>
        <p>Get started today and complete our form to request your free estimate</p>
      </div>
      <div class="col-xs-12 col-md-4 text-center"><a href="#rooms" class="btn btn-custom btn-lg page-scroll">Book a Hall</a></div>
    </div>
  </div>
</div>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
		<div data-aos="fade-right"><div class="col-xs-12 col-md-6"> <img src="img/about.jpg" class="img-responsive" alt=""> </div></div>
      <div data-aos="fade-left"><div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>Who We Are</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <h3>Why Choose Us?</h3>
          <div class="list-style">
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <ul>
                <li>Years of Experience</li>
                <li>Fully Insured</li>
                <li>Cost Control Experts</li>
                <li>100% Satisfaction Guarantee</li>
              </ul>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <ul>
                <li>Free Consultation</li>
                <li>Satisfied Customers</li>
                <li>Project Management</li>
                <li>Affordable Pricing</li>
              </ul>
            </div>
          </div>
        </div>
		  </div></div>
    </div>
  </div>
</div>
<!-- Rooms Section -->
<div id="rooms">
  <div class="container">
    <div data-aos="zoom-in"><div class="section-title">
		<br />
      <h2>Our Halls</h2>
		</div></div>
    <div data-aos="zoom-in"><div class="row">
      <div class="col-md-4">
          <!--<button name="click" value="one" >  -->
		<div class="portfolio-item">
            <div class="hover-bg"> <a href="client_adds_booking.php?hall_id_name=1">
              <div class="hover-text">
                <h4>Book Now</h4>
              </div>
              <img src="img/services/service-1.jpg" width="400" height="200" alt=" "> </a> </div>
          </div>
        <div class="service-desc">
          <a href="client_adds_booking.php?hall_id_name=1"><h3>Gec Convention Hall</h3></a>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
      </div>

      <div class="col-md-4">
		<div class="portfolio-item">
            <div class="hover-bg"> <a href="client_adds_booking.php?hall_id_name=2">
              <div class="hover-text">
                <h4>Book Now</h4>
              </div>
              <img src="img/services/service-2.jpg" width="400" height="200" alt=" "> </a> </div>
          </div>
        <div class="service-desc">
            <a href="client_adds_booking.php?hall_id_name=2"><h3>Home Additions</h3></a>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
      </div>

      <div class="col-md-4">
		<div class="portfolio-item">
            <div class="hover-bg"> <a href="client_adds_booking.php?hall_id_name=3">
              <div class="hover-text">
                <h4>Book Now</h4>
              </div>
              <img src="img/services/service-3.jpg" width="400" height="200" alt=" "> </a> </div>
          </div>
        <div class="service-desc">
            <a href="client_adds_booking.php?hall_id_name=3"><h3>Bathroom Remodels</h3></a>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
      </div>
		</div></div>

    <div data-aos="zoom-in"><div class="row">
      <div class="col-md-4">
		<div class="portfolio-item">
            <div class="hover-bg"> <a href="client_adds_booking.php?hall_id_name=4">
              <div class="hover-text">
                <h4>Book Now</h4>
              </div>
              <img src="img/services/service-4.jpg" width="400" height="200" alt=" "> </a> </div>
          </div>
        <div class="service-desc">
            <a href="client_adds_booking.php?hall_id_name=4"><h3>Kitchen Remodels</h3></a>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
      </div>

      <div class="col-md-4">
			<div class="portfolio-item">
            <div class="hover-bg"> <a href="client_adds_booking.php?hall_id_name=5">
              <div class="hover-text">
                <h4>Book Now</h4>
              </div>
              <img src="img/services/service-5.jpg" width="400" height="200" alt=" "> </a> </div>
          </div>

        <div class="service-desc">
            <a href="client_adds_booking.php?hall_id_name=5"><h3>Windows & Doors</h3></a>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
      </div>

      <div class="col-md-4">
		<div class="portfolio-item">
            <div class="hover-bg"> <a href="client_adds_booking.php?hall_id_name=6">
              <div class="hover-text">
                <h4>Book Now</h4>
              </div>
              <img src="img/services/service-6.jpg" width="400" height="200" alt=" "> </a> </div>
          </div>
        <div class="service-desc">
            <a href="client_adds_booking.php?hall_id_name=6"><h3>Decks & Porches</h3></a>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
      </div>
		</div></div>
  </div>
	</div>
<!-- Gallery Section -->
<div id="gallery">
  <div class="container">
	  <br /><br />
    <div data-aos="fade-up"><div class="section-title">
      <h2>Our Gallery</h2>
		</div></div>
    <div data-aos="fade-up"><div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/01-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <i class="fa fa-search-plus fa-4x"></i>
              </div>
              <img src="img/portfolio/01-small.jpg" width="400" height="200" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/02-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <i class="fa fa-search-plus fa-4x"></i>
              </div>
              <img src="img/portfolio/02-small.jpg" width="400" height="200" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/03-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <i class="fa fa-search-plus fa-4x"></i>
              </div>
              <img src="img/portfolio/03-small.jpg" width="400" height="200" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/04-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <i class="fa fa-search-plus fa-4x"></i>
              </div>
              <img src="img/portfolio/04-small.jpg" width="400" height="200" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/08-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <i class="fa fa-search-plus fa-4x"></i>
              </div>
              <img src="img/portfolio/08-small.jpg" width="400" height="200" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/06-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <i class="fa fa-search-plus fa-4x"></i>
              </div>
              <img src="img/portfolio/06-small.jpg" width="400" height="200" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>

    </div>
		</div></div>
</div>
	</div>
<!-- Testimonials Section -->
<div id="testimonials">
  <div class="container">
    <div data-aos="fade-down"><div class="section-title">
      <h2>Testimonials</h2>
		</div></div>
    <div class="row">
      <div data-aos="flip-down"><div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="img/testimonials/01.jpg" alt=""> </div>
          <div class="testimonial-content">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at."</p>
            <div class="testimonial-meta"> - John Doe </div>
          </div>
        </div>
		  </div></div>
      <div data-aos="flip-down"><div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="img/testimonials/02.jpg" alt=""> </div>
          <div class="testimonial-content">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis."</p>
            <div class="testimonial-meta"> - Johnathan Doe </div>
          </div>
        </div>
		  </div></div>
      <div data-aos="flip-down"><div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="img/testimonials/03.jpg" alt=""> </div>
          <div class="testimonial-content">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at."</p>
            <div class="testimonial-meta"> - John Doe </div>
          </div>
        </div>
		  </div></div>
      <div class="row"> </div>
      <div data-aos="flip-down"><div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="img/testimonials/04.jpg" alt=""> </div>
          <div class="testimonial-content">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at."</p>
            <div class="testimonial-meta"> - Johnathan Doe </div>
          </div>
        </div>
		  </div></div>
      <div data-aos="flip-down"><div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="img/testimonials/05.jpg" alt=""> </div>
          <div class="testimonial-content">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at."</p>
            <div class="testimonial-meta"> - John Doe </div>
          </div>
        </div>
		  </div></div>
      <div data-aos="flip-down"><div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="img/testimonials/06.jpg" alt=""> </div>
          <div class="testimonial-content">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis."</p>
            <div class="testimonial-meta"> - Johnathan Doe </div>
          </div>
        </div>
		  </div></div>
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
        <form name="sentMessage" id="contactForm" novalidate method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
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
<script type="text/javascript" src="js/contact_me.js"></script>
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

</body>
</html>
