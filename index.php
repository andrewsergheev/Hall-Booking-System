<?php
//Index Page
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Hull Village Hall - Home</title>

		<!--
		* Title: Animate On Scroll Library
		* Author: michalsnik
		* Date: unknown
		* Code version: unknown
		* Availability: https://michalsnik.github.io/aos/
		-->

        <link rel="icon" type="image/x-icon" href="assets/img/hall_icon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
		<!-- Custom theme CSS -->
		<link href="css/custom-styles.css" rel="stylesheet" />
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
		<!-- Animation -->
 		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Hull Village Hall</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#halls">Our Halls</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#signup">Contact</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="client_adds_booking.php">Book A Hall</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="dashboard/login.php">Log In</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase">Hull Village Hall</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Welcome to Village Hall that makes your dream true!</h2>
                    <a class="btn btn-primary js-scroll-trigger" href="#halls">Book A Hall</a>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container">
                <div class="row">
                    <div data-aos="zoom-in-up"><div class="col-lg-8 mx-auto">
                        <h2 class="text-white mb-4">About Us</h2>
                        <p class="text-white-50">
                            Based at the Village Hall & Community Centre, the Hull Village Hall Community Association is a registered charity which exists to promote the benefit of the residents of Hull and the surrounding area.

							We run an active and popular community centre situated in a pleasant urban village near the city centre of Kingston Upon Hull.
                        </p>
						</div></div>
                </div>
				<div data-aos="zoom-in-up"><img class="img-fluid" height="1800px" width="900px" src="assets/img/bg2.svg" alt="" /></div>
            </div>
        </section>
        <!-- Our Halls-->
        <section class="projects-section bg-light" id="projects">
            <div class="container">
                <!-- Featured Hall Row-->
                <div class="row align-items-center no-gutters mb-4 mb-lg-5">
					<div class="col-xl-8 col-lg-7"><div data-aos="fade-right"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/about.jpg" alt="" /></div></div>
                    <div class="col-xl-4 col-lg-5">
                        <div data-aos="fade-left"><div class="featured-text text-center text-lg-left">
                            <h2>Our Halls</h2>
                            <p class="text-black-50 mb-0">The Hull Village Hall provides you with the option of booking one or more of three rooms and also offers the use of kitchen facilities. All of the rooms are named with a nautical theme to reflect the history of the area.

							</p>
							</div></div>
                    </div>
                </div>
				<div id="halls"></div>
                <!-- Hall #1-->
                <div data-aos="zoom-in-up"><div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                    <div class="col-lg-6">
						<div class="content"><a href="client_adds_booking.php?hall_id_name=1">
                     <div class="content-overlay"></div>
						<img class="img-fluid" src="assets/img/services/service-1.jpg" alt="" />
					<div class="content-details fadeIn-bottom">
                         <h3 class="content-title">Book Now</h3>
                     </div>
                 </a></div>
					</div>

                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
									<a href="client_adds_booking.php?hall_id_name=1"><h4 class="text-white">The Admiral's Hall</h4></a>
                                    <p class="mb-0 text-white-50">Admiral's Hall is the largest hall and is perfect for holding large parties and events. The room contains tables, chairs and has capacity for 170 people.</p>
                                    <hr class="d-none d-lg-block mb-0 ml-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				</div>
                <!-- Hall #2-->
                <div data-aos="zoom-in-up"><div class="row justify-content-center no-gutters">
                    <div class="col-lg-6">
					<div class="content"><a href="client_adds_booking.php?hall_id_name=2">
                     <div class="content-overlay"></div>
						<img class="img-fluid" src="assets/img/services/service-2.jpg" alt="" />
					<div class="content-details fadeIn-bottom">
                         <h3 class="content-title">Book Now</h3>
                     </div>
                 </a></div>
					</div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
									<a href="client_adds_booking.php?hall_id_name=2"><h4 class="text-white">The Commodore's Hall</h4></a>
                                    <p class="mb-0 text-white-50">The Commodore's Hall is the second largest room and is perfect for holding meetings, presentations and small parties.</p>
                                    <hr class="d-none d-lg-block mb-0 mr-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				</div>
				<!-- Hall #3-->
                <div data-aos="zoom-in-up"><div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                    <div class="col-lg-6">
					<div class="content"><a href="client_adds_booking.php?hall_id_name=3">
                     <div class="content-overlay"></div>
						<img class="img-fluid" src="assets/img/services/service-3.jpg" alt="" />
					<div class="content-details fadeIn-bottom">
                         <h3 class="content-title">Book Now</h3>
                     </div>
                 </a></div>
					</div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
									<a href="client_adds_booking.php?hall_id_name=3"><h4 class="text-white">The Captain's room</h4></a>
                                    <p class="mb-0 text-white-50">The Captain's room is the smallest of the rooms and is perfect for holding small meetings and events with small numbers of people.</p>
                                    <hr class="d-none d-lg-block mb-0 ml-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				</div>
                <!-- Hall #4-->
                <div data-aos="zoom-in-up"><div class="row justify-content-center no-gutters">
                    <div class="col-lg-6">
					<div class="content"><a href="client_adds_booking.php?hall_id_name=4">
                     <div class="content-overlay"></div>
						<img class="img-fluid" src="assets/img/services/service-4.jpg" alt="" />
					<div class="content-details fadeIn-bottom">
                         <h3 class="content-title">Book Now</h3>
                     </div>
                 </a></div>
					</div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
									<a href="client_adds_booking.php?hall_id_name=4"><h4 class="text-white">The Galley Hall</h4></a>
                                    <p class="mb-0 text-white-50">The Commodore's room is the another large hall that is perfect for holding meetings, presentations and small parties.</p>
                                    <hr class="d-none d-lg-block mb-0 mr-0" />
                                </div>
                            </div>
                        </div>
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
						<?php include('dashboard/mail/msg.php'); ?>
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


		<!-- Back to Top Start -->
    	<a href="#" id="return-to-top"><i class="icon-chevron-up"></i></a>
    	<!-- Back to Top End -->

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
		<script>
		// ===== Scroll to Top ====
		$(window).scroll(function() {
			if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
				$('#return-to-top').fadeIn(200);    // Fade in the arrow
			} else {
				$('#return-to-top').fadeOut(200);   // Else fade out the arrow
			}
		});
		$('#return-to-top').click(function() {      // When arrow is clicked
			$('body,html').animate({
				scrollTop : 0                       // Scroll to top of body
			}, 500);
		});
		</script>
    </body>
</html>
