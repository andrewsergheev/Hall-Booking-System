<?php include('includes/header.php');
if(isAdmin() == false) {
    redirect();
}else {
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
              <li class="breadcrumb-item active">Edit</li>
            </ul>
          </div>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h3">Find Users & Managers</h3>
                    </div>
                      <div class="card-body">
 <form class="form-inline">
  <input class="form-control mr-sm-2" type="text" name="user_id" placeholder="Search" aria-label="Search">
  <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
 </form>
 </div>
                </div>

<?php
if(isset($_POST['update'])){

    $user_id = $_POST['user_id'];
	$name = $_POST['name'];
    $username = $_POST['username'];
	$password = $_POST['password'];
	$type = $_POST['type'];


	$q = "UPDATE users SET name='{$name}', username='{$username}', password='{$password}' , type='{$type}' WHERE user_id = '{$user_id}'";

	$result = mysqli_query($dblink, $q);

	if(!$result){
		echo dangerMsg('There was an error.');
	}
	else{
		echo successMsg('Manager Updated Successfully.');
	}
}

?>
<?php
if(isset($_GET['user_id']) ){

	$user_id = $_GET['user_id'];

	$q = "SELECT * FROM users where user_id='{$user_id}'";

	$res = mysqli_query($dblink, $q);
	if(mysqli_num_rows($res)>0){

		$manager  = mysqli_fetch_assoc($res);

		$name = $manager['name'];
        $username = $manager['username'];
	   $password = $manager['password'];
	   $type = $manager['type'];
?>
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h3">Edit User ID: <?php echo $user_id?></h3>
                    </div>
                      <div class="card-body">

	<form method="post" action="edit_manager.php">
		<input type="hidden" name="user_id" value="<?php echo $user_id?>">
	  <div class="form-group">
	    <label for="name">User Name</label>
	    <input type="text" name="name" value="<?php echo $name?>" required class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Name">

	  </div>
	  <div class="form-group">
	    <label for="phone">Username</label>
	    <input type="text" name="username" value="<?php echo $username?>" required class="form-control" id="username" placeholder="Enter Phone">
	  </div>
	 	<div class="form-group">
	    <label for="email">Password</label>
	    <input type="password" name="password" value="<?php echo $password?>" required class="form-control" id="password" placeholder="Enter Email">
	  </div>
        <div class="form-group">
	    <label for="phone">Type</label>
	    <select name="type" id="type" required class="form-control">
          <option value="<?php echo $type?>"><?php echo $type?></option>
            <option value="admin">admin</option>
        </select>
	  </div>
	  <button type="submit" name="update" class="btn btn-primary">Update</button>
	</form>
<?php
	}
	else{
		alertMsg('Manager ID: <strong>'.$manager_id.'</strong> Not Found.');
	}
}

?>
                    </div>
                </div>
              </div>
</section>
<?php include('includes/footer.php'); }?>
