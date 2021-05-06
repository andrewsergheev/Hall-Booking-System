<?php include('includes/header.php');
if(isAdmin() == false) {
    redirect();
}else {
?>
<?php
	if(isset($_POST['delete'])){
		$hall_id = $_POST['hall_id'];
		$name = getHall($hall_id)['name'];

		$q = "DELETE FROM hall where hall_id='{$hall_id}'";

		$result = mysqli_query($dblink, $q);

		if(!$result){
			dangerMsg('Can\'t delete hall. To delete first remove all <strong>Booking</strong> of <strong>'.$name.'</strong>.');
		}
		else{
			dangerMsg('<strong>'.$name.'</strong> Deleted');
		}


	}
?>
<?php
	$query = "SELECT * FROM hall";
	$halls = mysqli_query($dblink,$query);
	if(mysqli_num_rows($halls)==0){
		dangerMsg('No Hall added yet.');
	}
	else{

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
              <li class="breadcrumb-item active">View</li>
            </ul>
          </div>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
                 <div class="card">
             <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Table of Halls</h3>
                    </div>
          <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Hall ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Rent</th>
        <th>Size</th>
        <th>Manager</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	<?php
		$count = 1;
		while($r = mysqli_fetch_assoc($halls)){

			?>
      <tr>

        <td><?php echo $count++;?></td>
		<td><?php echo $r['hall_id']?></td>
		<td><?php echo $r['name']?></td>
		<td><?php echo $r['phone']?></td>
		<td><?php echo $r['address']?></td>
		<td><?php echo $r['rent']?></td>
		<td><?php echo $r['size']?></td>
		<td><?php echo getManager($r['user_id'])['name']?></td>

		<td>
			<div class="btn-group">
				<button  class="btn btn-primary" onclick="location.href='edit_hall.php?hall_id=<?php echo $r['hall_id']?>'" ><i class="fa fa-edit"></i>Edit</button>&nbsp;&nbsp;&nbsp;
				<form method="post" class="inline">
					<input type="hidden" name="hall_id" value="<?php echo $r['hall_id']?>">

					<button type="submit" class="btn btn-danger" name="delete" ><i class="fa fa-trash"></i>Delete</button>
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
