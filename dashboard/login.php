<?php //ob_start();?>
<?php //require_once("includes/functions.php"); ?>
<?php include('includes/functions.php');
if (isLoggedIn()) {
	header('location: dashboard.php');
}?>

<?php
$username = "";
$msg = "";
if (isset($_POST['login'])) {


	$username = $_POST["username"];
	$password = ($_POST["password"]);
	$user=mysqli_query($dblink,"SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1")

	or die(mysqli_error($dblink));
	$row=mysqli_fetch_array($user);

		//$results = mysqli_query($dblink, $user);

    $logged_in_user = $row;
    if ($row) {
      // Success
        $_SESSION["user_id"] = $row['user_id'];

			// Mark user as logged in
			if($row['type']=='admin'){
				setcookie('admin',true,time()+60*60*24*7);
                $_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: dashboard.php');
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: dashboard.php');
			}


			setcookie('username',$username,time()+60*60*24*7);
			setcookie('loggedin',$username,time()+60*60*24*7);
            //header('location: dashboard.php');
			//redirect_to("dashboard.php");
    } else {
      // Failure
      $msg = "Invalid Login.";
    }
  }

?>


<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log in</title>

    <link rel="icon" type="image/x-icon" href="../assets/img/hall_icon.png" />

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">


    <!--

	<link rel="stylesheet" type="text/css" href="includes/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="includes/style.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/fontawesome-all.min.css">

    -->
</head>
<body>

    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Dashboard</h1>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                    <?php if($msg!=''){
			         dangerMsg($msg);
		          }
		          ?>


                  <form method="post" class="form-validate">
                    <div class="form-group">

                      <input id="username" type="text" name="username" required data-msg="Please enter your username" class="input-material" autocomplete="off">
                        <label for="login-username" class="label-material">User Name</label>
                    </div>
                    <div class="form-group">
                      <input id="password" type="password" name="password" required data-msg="Please enter your password" class="input-material" autocomplete="off">
                      <label for="password" class="label-material">Password</label>
                    </div><button type="submit" name="login" class="btn btn-primary">Login</button>

                  </form>
					<!--<a href="#" class="forgot-pass">Forgot Password?</a><br><small>Do not have an account? </small><a href="register.html" class="signup">Signup</a>-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="copyrights text-center">
        <p>Go back to <a href="../index.php">Home</a>
          <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
        </p>
      </div>

    </div>






     <!--

	<main role="main" class="container">




	<div class="login-area">

		<?php //if($msg!=''){
			//dangerMsg($msg);
		//}
		?>

		<form method="post" class="form-signin">
		  <div class="form-group">
		    <label for="username">Username</label>
		    <input type="username" name="username" class="form-control" autocomplete="off" required id="username" placeholder="Username">
		    </div>
		  <div class="form-group">
		    <label for="pass">Password</label>
		    <input type="password" name="password" class="form-control" autocomplete="off" required id="pass" placeholder="Password">
		  </div>

		  <button type="submit" name="login" class="btn btn-primary">Login</button>
		</form>
		</div>
		</main>
-->

 <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>

</body>
</html>
