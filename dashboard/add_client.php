<?php include('includes/header.php'); ?>

<?php
if(isset($_POST['add'])){

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$email = $_POST['email'];

	$sql_e = "SELECT * FROM client WHERE email='$email'";
	$res_e = mysqli_query($dblink, $sql_e);

	if(mysqli_num_rows($res_e) > 0){
  	  echo dangerMsg("It looks like this email exist in our database.");
  	}else{

		$q = "INSERT INTO client VALUES(NULL,'{$name}','{$phone}','{$address}','{$email}')";

		$result = mysqli_query($dblink, $q);

		if(!$result){
			echo dangerMsg('There was an error.');
		}
		else{
			echo successMsg('Client Added Successfully.');
		}
	}
}

?>

<!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Clients</h2>
            </div>
          </header>
<!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Clients</li>
              <li class="breadcrumb-item active">Add</li>
            </ul>
          </div>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h3">Add Client</h3>
                    </div>
                      <div class="card-body">

	<form method="post">
	  <div class="form-group">
	    <label for="name">Full Name</label>
	    <input type="text" name="name" required class="form-control" id="name"  placeholder="Enter Name">
	  </div>

	   <div class="form-group">
	    <label for="address">Address</label>
	    <input type="text" name="address" required class="form-control" id="address" aria-describedby="addHelp" placeholder="Enter Address">
	     <small id="addHelp" class="form-text text-muted">Enter your address with street, city and district.</small>
	  </div>
	  <div class="form-group">
	    <label for="phone">Phone</label>
	    <input type="text" name="phone" required class="form-control" id="phone" placeholder="Enter Phone">
	  </div>
	 	<div class="form-group">
	    <label for="pass">Email</label>
	    <input type="email" name="email" required class="form-control" id="pass" placeholder="Enter Email">
	  </div>
	  <button type="submit" name="add" class="btn btn-primary">Submit</button>
	</form>
              </div>
                </div>
              </div>
</section>

<?php include('includes/footer.php'); ?>
