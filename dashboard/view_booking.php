<?php include('includes/header.php'); ?>
<?php
	if(isset($_POST['delete'])){
		$booking_id = $_POST['booking_id'];

		$q = "DELETE FROM bookings where booking_id='{$booking_id}'";

		$result = mysqli_query($dblink, $q);

		if(!$result){
			dangerMsg('There was an error.');
		}
		else{
			dangerMsg('Booking ID: '.$booking_id.' Deleted');
		}


	}
?>
<?php
	$query = "SELECT * FROM bookings";
	$bookings = mysqli_query($dblink,$query);
	if(mysqli_num_rows($bookings)==0){
		dangerMsg('No booking added yet.');
	}
	else{

?>

<!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Bookings</h2>
            </div>
          </header>
   <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Bookings</li>
              <li class="breadcrumb-item active">View</li>
            </ul>
          </div>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">

<div class="card">
             <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Table of Hall Bookings</h3>
                    </div>
          <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Booking ID</th>
        <th>Hall</th>
        <th>Client</th>
        <th>Start Date</th>
        <th>End Date</th>
		<th>Price</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	<?php
		$count = 1;
		while($r = mysqli_fetch_assoc($bookings)){

			?>
      <tr>

        <td><?php echo $count++;?></td>
		<td><?php echo $r['booking_id']?></td>
		<td><?php echo getHall($r['hall_id'])['name']?></td>
		<td><?php echo getClient($r['client_id'])['name']?></td>
		<td><?php echo $r['start']?></td>
		<td><?php echo $r['end']?></td>
		<td>£<?php echo $r['price']?></td>

		<td>
			<div class="btn-group">
				<button  class="btn btn-primary" onclick="location.href='edit_booking.php?booking_id=<?php echo $r['booking_id']?>'" ><i class="fa fa-edit"></i>Edit</button>&nbsp;&nbsp;&nbsp;
				<form method="post" class="inline">
					<input type="hidden" name="booking_id" value="<?php echo $r['booking_id']?>">

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

<?php include('includes/footer.php'); ?>
