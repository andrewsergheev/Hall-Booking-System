<?php include('includes/header.php');

if(isAdmin() == false) {
    redirect();
}else {

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
              <li class="breadcrumb-item active">Edit</li>
            </ul>
          </div>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h3">Find Hall</h3>
                    </div>
                      <div class="card-body">


 <form class="form-inline">
  <input class="form-control mr-sm-2" type="text" name="hall_id" placeholder="Search" aria-label="Search">
  <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
 </form>
</div>
                </div>

<?php
if(isset($_POST['update'])){

	$hall_id = $_POST['hall_id'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$rent = $_POST['rent'];
	$user_id = $_POST['user_id'];
	$size = $_POST['size'];

	$q = "UPDATE hall SET name='{$name}', phone='{$phone}' , address='{$address}',  rent='{$rent}',  size='{$size}',  user_id='{$user_id}' WHERE hall_id = '{$hall_id}'";

	$result = mysqli_query($dblink, $q);

	if(!$result){
		dangerMsg('There was an error.');
	}
	else{
		successMsg('Hall Updated Successfully.');
	}
}

?>
<?php
if(isset($_GET['hall_id']) ){

	$hall_id = $_GET['hall_id'];

	$q = "SELECT * FROM hall where hall_id='{$hall_id}'";

	$res = mysqli_query($dblink, $q);
	if(mysqli_num_rows($res)>0){

		$hall  = mysqli_fetch_assoc($res);

		$name =  $hall['name'];
		$phone =  $hall['phone'];
		$address =  $hall['address'];
		$rent =  $hall['rent'];
		$size =  $hall['size'];
		$user_id =  $hall['user_id'];
?>
                 <div class="card">
                     <div class="card-header d-flex align-items-center">
                      <h3 class="h3">Edit hall ID: <?php echo $hall_id?></h3>
                    </div>
                      <div class="card-body">

	<form method="post" action="edit_hall.php">
		<input type="hidden" name="hall_id" value="<?php echo $hall_id?>">
	  <div class="form-group">
	    <label for="name">Hall Name</label>
	    <input type="text" name="name" value="<?php echo $name?>" required class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Name">

	  </div>
	  <div class="form-group">
	    <label for="phone">Phone</label>
	    <input type="text" name="phone" value="<?php echo $phone?>" required class="form-control" id="phone" placeholder="Enter Phone">
	  </div>

	<div class="form-group">
	    <label for="address">Address</label>
	    <input type="text" name="address" value="<?php echo $address?>" required class="form-control" id="address" placeholder="Enter Phone">
	  </div>

	<div class="form-group">
		<label for="rent">Rent</label>
	    <input type="text" name="rent" value="<?php echo $rent?>" required class="form-control" id="rent" placeholder="Enter Rent">
	 </div>
	 <div class="form-group">
		<label for="size">Size</label>
	    <input type="text" name="size" value="<?php echo $size?>" required class="form-control" id="size" placeholder="Enter Size">
	 </div>

	<input type="hidden" name="user_id" value="<?php echo $user_id?>">

	  <button type="submit" name="update" class="btn btn-primary">Update</button>
	</form>
<?php
	}
	else{
		alertMsg('Hall ID: <strong>'.$hall_id.'</strong> Not Found.');
	}
}

?>
              </div>
                </div>
              </div>
</section>
<?php include('includes/footer.php'); }?>
