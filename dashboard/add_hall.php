<?php include('includes/header.php');
if(isAdmin() == false) {
    redirect();
}else {

?>

<?php
if(isset($_POST['add'])){

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$rent = $_POST['rent'];
	$user_id = $_POST['user_id'];
	$size = $_POST['size'];

	$q = "INSERT INTO hall VALUES(NULL,'{$name}','{$phone}','{$address}','{$rent}','{$size}','{$user_id}')";

	$result = mysqli_query($dblink, $q);

	if(!$result){
		echo mysqli_error($dblink) ;
		dangerMsg('There was an error.');
	}
	else{
		successMsg('Hall Added Successfully.');
	}
}

?>

<!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Halls</h2>
            </div>
          </header>
<!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Halls</li>
              <li class="breadcrumb-item active">Add</li>
            </ul>
          </div>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h3">Add Hall</h3>
                    </div>
                      <div class="card-body">
	<form method="post">
	  <div class="form-group">
	    <label for="name">Hall Name</label>
	    <input type="text" name="name" required class="form-control" id="name"  placeholder="Enter Name">


	  <div class="form-group">
	    <label for="phone">Phone</label>
	    <input type="text" name="phone" required class="form-control" id="phone" placeholder="Enter Phone">
	  </div>
	  </div>
		<div class="form-group">
		    <label for="address">Address</label>
		    <input type="text" name="address" required class="form-control" id="address" aria-describedby="addHelp" placeholder="Enter Address">

		</div>
		<div class="form-group">
			<label for="rent">Rent</label>
			<input type="number" name="rent" required class="form-control" id="rent" placeholder="Enter Rent">
		</div>
		<div class="form-group">
			<label for="size">Size</label>
			<input type="number" name="size" required class="form-control" id="size" placeholder="Enter Size">
		</div>
        <input type="hidden" name="user_id" value="<?php echo $_SESSION["user_id"]?>">


	  <button type="submit" name="add" class="btn btn-primary">Submit</button>
	</form>
                    </div>
                </div>
              </div>
</section>

<?php include('includes/footer.php'); }?>
