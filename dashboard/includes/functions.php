<?php
global $dblink;
$db_user ="root" ;
$db_pass ="" ;
$db_name ="chbs" ;
$dblink = mysqli_connect('localhost',$db_user,$db_pass,$db_name);
$errors   = array();
session_start();

	if(!$dblink){
		echo 'Connection Error';
	}
	function redirect_to($new_location) {
	  header("Location: " . $new_location);
	  exit;
	}

		function nav(){?>
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="dashboard.php" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><span>Hall </span><strong>Dashboard</strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>HD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                <!-- Notifications-->
                <!-- <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red badge-corner">12</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item">
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-envelope bg-green"></i>You have 6 new messages </div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item">
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item">
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-upload bg-orange"></i>Server Rebooted</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item">
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                          <div class="notification-time"><small>10 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications                                            </strong></a></li>
                  </ul>
                </li>-->
                <!-- Messages                        -->
               <!-- <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange badge-corner">10</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                        <div class="msg-profile"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Jason Doe</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                        <div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Frank Williams</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                        <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Ashley Wood</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages   </strong></a></li>
                  </ul>
                </li>-->
                <!-- Logout    -->
                  <li style="padding-left: 20px" class="nav-item"> <button class="btn btn-success my-2 my-sm-0" onclick="location.href='logout.php'">Logout <i class="fa fa-sign-out"></i></button>
                <!--<li class="nav-item"><a href="login.html" class="nav-link logout"> <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i></a>--></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>

		<?php
		}

		function successMsg($msg){
			echo '<div class="alert alert-success">'.$msg.'</div>';
		}
		function dangerMsg($msg){
			echo '<div class="alert alert-danger">'.$msg.'</div>';
		}
		function alertMsg($msg){
			echo '<div class="alert alert-warning">'.$msg.'</div>';
		}

		function getManager($id){
			global $dblink;
			$query = "SELECT * FROM users where user_id = '{$id}'";
			$manager = mysqli_query($dblink,$query);
			$r = mysqli_fetch_assoc($manager);
			return $r;
		}
		function getClient($id){
			global $dblink;
			$query = "SELECT * FROM client where client_id = '{$id}'";
			$client = mysqli_query($dblink,$query);
			$r = mysqli_fetch_assoc($client);
			return $r;
		}
		function getHall($id){
			global $dblink;
			$query = "SELECT * FROM hall where hall_id = '{$id}'";
			$hall = mysqli_query($dblink,$query);
			$r = mysqli_fetch_assoc($hall);
			return $r;
		}


        function redirect(){
             echo "
            <script>
                setTimeout(function() {
                    window.location = 'error.php';
                });
            </script>
            ";
        }


/*
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $dblink, $username, $errors;

	// grap form values
	$username = ($_POST['username']);
	$password = ($_POST['password']);

	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($dblink, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: dashboard.php');
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: index.php');
			}
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}
*/

function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}

function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}
function bookingConfirmation($email, $name, $hallname, $start, $end, $price)
{
	$to = "$email";
	$subject = "Welcome to Hull Village Hall";
	$message = "Dear {$name},

	Thank you for booking with us.

	Here are your details:

	Hall: {$hallname},
	Start Date: {$start},
	End Date: {$end},
	Price: £{$price}.

	Thank you.
	Kind Regards.
	";
	$from = "support@hullvillagehall.co.uk";
	$headers = "From: $from";
	mail($to,$subject,$message,$headers);
}
?>
