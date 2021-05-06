<?php include('includes/header.php');
if(isAdmin() == false) {
    redirect();
}else {
?>
<?php
	if(isset($_POST['delete'])){
		$user_id = $_POST['user_id'];
        $name = getManager($user_id)['name'];

		$q = "DELETE FROM users where user_id='{$user_id}'";

		$result = mysqli_query($dblink, $q);

		if(!$result){
			dangerMsg('Can\'t delete manager. To delete first remove all <strong>Halls</strong> under him.');
		}
		else{
			dangerMsg('User: '.$name.' Deleted');
		}


	}
?>
<?php
	$query = "SELECT * FROM users";
	$managers = mysqli_query($dblink,$query);
	if(mysqli_num_rows($managers)==0){
		dangerMsg('No manager added yet.');
	}
	else{

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
              <li class="breadcrumb-item active">View</li>
            </ul>
          </div>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">

<div class="card">
             <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Table of Users & Managers</h3>
                    </div>
          <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>User ID</th>
        <th>Name</th>
        <th>User Name</th>
        <th>Email</th>
        <th>Type</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	<?php
		$count = 1;
		while($r = mysqli_fetch_assoc($managers)){

			?>
      <tr>

        <td><?php echo $count++;?></td>
		<td><?php echo $r['user_id']?></td>
		<td><?php echo $r['name']?></td>
		<td><?php echo $r['username']?></td>
        <td><?php echo $r['email']?></td>
		<td><?php echo $r['type']?></td>

		<td>
			<div class="btn-group">
                <?php
                //if($r['type'] == "manager") {
                if($_SESSION["user_id"] != $r['user_id'] && $r['user_id'] != "1") {
?>
				<button  class="btn btn-primary" onclick="location.href='edit_manager.php?user_id=<?php echo $r['user_id']?>'" ><i class="fa fa-edit"></i>Edit</button>&nbsp;&nbsp;&nbsp;
				<form method="post" class="inline">
					<input type="hidden" name="user_id" value="<?php echo $r['user_id']?>">

					<button type="submit" class="btn btn-danger" name="delete" ><i class="fa fa-trash"></i>Delete</button>
                    <?php
        } ?>
				</form>
			</div>
		</td>

      </tr>

      <?php
	}
		?>
    </tbody>
  </table>
  </div>
    </div>
                </div>
              </div>
</section>
 <?php
}
?>

<?php include('includes/footer.php'); }?>
