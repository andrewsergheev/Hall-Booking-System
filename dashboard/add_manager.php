<?php include('includes/header.php'); ?>

<?php
if(isAdmin() == false) {
   redirect();
}else {
if(isset($_POST['add'])){


	$name = $_POST['name'];
    $username = $_POST['username'];
	$password = $_POST['password'];
    $email = $_POST['email'];
	$type = $_POST['type'];

    $sql_u = "SELECT * FROM users WHERE username='$username'";
  	$sql_e = "SELECT * FROM users WHERE email='$email'";
  	$res_u = mysqli_query($dblink, $sql_u);
  	$res_e = mysqli_query($dblink, $sql_e);

  	if (mysqli_num_rows($res_u) > 0) {
  	  echo dangerMsg("Sorry... username already taken");
  	}else if(mysqli_num_rows($res_e) > 0){
  	  echo dangerMsg("Sorry... email already taken");
  	}else{

        $q = "INSERT INTO users VALUES(NULL,'{$name}','{$username}','{$password}','{$email}','{$type}')";



        $result = mysqli_query($dblink, $q);

        if(!$result){
            echo dangerMsg('There was an error.');
        }
        else{
            echo successMsg('User Added Successfully.');

          $to = "$email";
          $subject = "Welcome to Hull Village Hall";
          $message = "Dear {$name},\n
          I am pleased to inform you that you have been registred.\n\n
          Please see you details below\n\n
          Username: {$username}\n
          Password: {$password}\n\n

          Please make sure you have chnaged the passwrod in My Account section.\n

          Thank you.\n
          Kind Regards.
          ";
          $from = "support@hullvillagehall.co.uk";
          $headers = "From: $from";
          mail($to,$subject,$message,$headers);
        }
    }
}

?>

<!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Users & Managers</h2>
            </div>
          </header>
<!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Users & Managers</li>
              <li class="breadcrumb-item active">Add</li>
            </ul>
          </div>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h3">Add User</h3>
                    </div>
                      <div class="card-body">
	<form method="post">
	  <div class="form-group">
	    <label for="name">Manager Name</label>
	    <input type="text" name="name" required class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Name">
	  </div>

	  <div class="form-group">
	    <label for="username">User Name</label>
	    <input type="text" name="username" required class="form-control" id="username" placeholder="Enter User Name">
	  </div>

	 	<div class="form-group">
	    <label for="password">Password</label>
	    <input type="text" name="password" required class="form-control" id="password" placeholder="Enter Password">
	  </div>

        <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" required class="form-control" id="email" placeholder="Enter Email" >
        </div>

        <div class="form-group">
	    <label for="phone">Type</label>
	    <select name="type" id="type" required class="form-control">
          <option value="admin">Admin</option>
          <option value="manager" selected>Manager</option>
        </select>
	  </div>

	  <button type="submit" name="add" class="btn btn-primary">Submit</button>
	</form>

                    </div>
                </div>
              </div>
</section>
<?php include('includes/footer.php'); }?>
