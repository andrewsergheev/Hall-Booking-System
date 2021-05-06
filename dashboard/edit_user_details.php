<?php include('includes/header.php'); ?>

<?php

$id = $_SESSION["user_id"];/* userid of the user */
if(isset($_POST['chg_pass'])) {
if(count($_POST)>0) {
$result = mysqli_query($dblink, "SELECT * from users WHERE user_id='" . $id . "'");
$row=mysqli_fetch_array($result);
if($_POST["currentPassword"] == $row["password"] && $_POST["newPassword"] == $_POST["confirmPassword"] ) {
mysqli_query($dblink,"UPDATE users set password='" . $_POST["newPassword"] . "' WHERE user_id='" . $id . "'");
$message = "Password Changed Sucessfully";
} else{
 $message = "Password is not correct";
}
}
}
?>





<!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">My Account</h2>
            </div>
          </header>

  <section class="forms">
            <div class="container-fluid">
              <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Change Account Details</h3>
                    </div>
                    <div class="card-body">
<?php
if(isset($_POST['update'])){

	$user_id = $_POST['user_id'];
	$name = $_POST['name'];
	$username = $_POST['username'];
    $email = $_POST['email'];
	$type = $_POST['type'];

	$q = "UPDATE users SET name='{$name}', username='{$username}', email='{$email}', type='{$type}' WHERE user_id = '{$user_id}'";

	$result = mysqli_query($dblink, $q);

	if(!$result){
		echo dangerMsg('There was an error.');
	}
	else{
		echo successMsg('Details Updated Successfully.');
	}
}

?>

<?php
//if(isset($_GET[$id]) ){

	//$manager_id = $_GET[$id];

	$q = "SELECT * FROM users where user_id='{$id}'";

	$res = mysqli_query($dblink, $q);
	if(mysqli_num_rows($res)>0){

		$manager  = mysqli_fetch_assoc($res);

		$name =  $manager['name'];
		$username =  $manager['username'];
        $email = $manager['email'];
		$type =  $manager['type'];
?>
                      <form method="post" action="edit_user_details.php">
                        <input type="hidden" name="user_id" value="<?php echo $id?>">
                        <div class="form-group">
                          <label class="form-control-label">Name</label>
                          <input type="text" name="name" value="<?php echo $name?>" required class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Username</label>
                          <input type="text" name="username" value="<?php echo $username?>" required class="form-control" id="username" placeholder="Enter Username">
                        </div>
                          <div class="form-group">
                          <label class="form-control-label">Email</label>
                          <input type="text" name="email" value="<?php echo $email?>" required class="form-control" id="email" placeholder="Enter Email" >
                        </div>
                        <input type="hidden" name="type" value="<?php echo $type?>" required class="form-control" id="type" placeholder="Enter.." >
                        <div class="form-group">
                          <button type="submit" name="update" class="btn btn-primary">Update</button>
                        </div>
                      </form>
<?php
	}
	else{
		alertMsg('Manager ID: <strong>'.$manager_id.'</strong> Not Found.');
	}
//}

?>
                    </div>
                  </div>
                </div>
                <!-- Change Password Form-->
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Change Password</h3>
                    </div>
                    <div class="card-body">
                      <div><?php if(isset($message)) { echo $message; } ?></div>
                        <form method="post" action="" class="form-horizontal">
                        <div class="form-group">
                          <label class="form-control-label">Current Password:</label>
                          <input type="password" name="currentPassword" class="form-control form-control"><!--<span id="currentPassword" class="required"></span>-->
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">New Password:</label>
                          <input type="password" name="newPassword" class="form-control form-control">
                            <!--<span id="newPassword" class="required"></span>-->
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Confirm Password:</label>
                          <input type="password" name="confirmPassword" class="form-control form-control">
                             <!--<span id="confirmPassword" class="required"></span>-->
                        </div>
                        <div class="form-group">
                          <input type="submit" name="chg_pass" class="btn btn-primary">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                </div>
      </div>
</section>


<!--
<div><?php if(isset($message)) { echo $message; } ?></div>
<form method="post" action="" align="center">
Current Password:<br>
<input type="password" name="currentPassword"><span id="currentPassword" class="required"></span>
<br>
New Password:<br>
<input type="password" name="newPassword"><span id="newPassword" class="required"></span>
<br>
Confirm Password:<br>
<input type="password" name="confirmPassword"><span id="confirmPassword" class="required"></span>
<br><br>
<input type="submit">
</form>
-->
<script>
document.getElementById('type').readOnly = true
</script>

<?php include('includes/footer.php'); ?>
