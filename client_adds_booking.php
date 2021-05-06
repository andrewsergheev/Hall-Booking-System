<?php
include('dashboard/includes/functions.php');
global $hall_id;
//$hall_id_name = 0;
if(isset($_REQUEST['hall_id_name']) ){
	//session_start();
    $hall_id = $_REQUEST['hall_id_name'];
	$_SESSION['hall'] = $hall_id;
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Hull Village Hall - Booking</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
		<!-- Animation -->
 		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.php#page-top">Hull Village Hall</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php#halls">Our Halls</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php#signup">Contact</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="client_adds_booking.php">Book A Hall</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="dashboard/login.php">Log In</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header id="header">
			<div class="jumbotron" style="background-image: url('assets/img/bg-masthead.jpg'); background-size: cover;
 background-repeat: no-repeat;background-position: bottom;">
        		<div class="container" style="padding: 100px;">
          			<h1 class="text-center" style="color: #fff;">Book Your Hall</h1>
        		</div>
      		</div>
		</header>

		<section class="projects-section bg-light" id="projects">
            <div class="container">
				  <div class="row">
				<h1>Book a Hall</h1>
				<button type="button" class="btn btn-primary btn-block" id="newClient" onclick="showContent(1)">New Customer</button>
				<button type="button" class="btn btn-secondary btn-block" id="oldClient" onclick="showContent(2)">Existing Customer</button>
				</div><br />
				<div class="row">
					<div class="col-lg mx-auto">
						<div data-aos="zoom-in-up">
							 <?php include('dashboard/bookingForm.php');?>
							 <?php include('dashboard/oldBookingForm.php');?>
						</div>
					</div>
      			</div>
			</div>
		</section>

		<!-- Message-->
        <section class="signup-section" id="signup">
            <div data-aos="fade-down"><div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Send us a message!</h2>
						<?php include('dashboard/mail/contact.php'); ?>
						<form class="form-horizontal" name="sentMessage" id="contactForm" method="post">
						  <div class="row">
							<div class="col-md-6">
							  <div class="form-group">
								<input type="text" name="name" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" placeholder="Name" required>
								<p class="help-block text-danger"></p>
							  </div>
							</div>
							<div class="col-md-6">
							  <div class="form-group">
								<input type="email" name="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" placeholder="Email" required>
								<p class="help-block text-danger"></p>
							  </div>
							</div>
						  </div>
						  <div class="form-group">
							<textarea name="message" name="message" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" rows="4" placeholder="Message" required></textarea>
							<p class="help-block text-danger"></p>
						  </div>
						  <button type="submit" name="sendMessage" class="btn btn-primary mx-auto">Send Message</button>
						</form>
                    </div>
                </div>
				</div></div>
        </section>

        <!-- Contact-->
        <section class="contact-section bg-black">
            <div class="container">
                <div data-aos="fade-up" data-aos-duration="1000"><div class="row">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50">South Bridge Road, Kingston upon Hull HU9 1TL</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50"><a href="#!">info@hullvillagehall.co.uk</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50">01482 902-8832</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                </div>
				</div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container">Copyright © 2021 Hull Village Hall</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
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
  		<script>AOS.init();</script>
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
