<?php include('includes/header.php'); ?>
<?php
	if(isset($_POST['delete'])){
		$client_id = $_POST['client_id'];
		$name = getClient($client_id)['name'];

		$q = "DELETE FROM client where client_id='{$client_id}'";

		$result = mysqli_query($dblink, $q);

		if(!$result){
			dangerMsg('Can\'t delete client. To delete first remove all <strong>Booking</strong> by him.');
		}
		else{
			dangerMsg('Client: '.$name.' Deleted');
		}


	}
?>
<?php
	$query = "SELECT * FROM client";
	$clients = mysqli_query($dblink,$query);
	if(mysqli_num_rows($clients)==0){
		dangerMsg('No client added yet.');
	}
	else{

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
              <li class="breadcrumb-item active">View</li>
            </ul>
          </div>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">




<!--<form>
	<input class="form-control" id="searchText" type="text" placeholder="Search by client name, phone, address etc." aria-label="Search">
</form> -->
<!--
	<div  id="search-result">
	  <div class="table-responsive">
	  <table class="table">-->
         <div class="card">
             <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Table of Clients</h3>
                    </div>
          <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-striped table-hover">
	    <thead>
	      <tr>
	        <th>#</th>
	        <th>Client ID</th>
	        <th>Name</th>
	        <th>Phone</th>
	        <th>Address</th>
	        <th>Email</th>
	        <th>Action</th>
	      </tr>
	    </thead>
	    <tbody>
	    	<?php
			$count = 1;
			while($r = mysqli_fetch_assoc($clients)){

				?>
	      <tr>

	        <td><?php echo $count++;?></td>
			<td><?php echo $r['client_id']?></td>
			<td><?php echo $r['name']?></td>
			<td><?php echo $r['phone']?></td>
			<td><?php echo $r['address']?></td>
			<td><?php echo $r['email']?></td>

			<td>
				<div class="btn-group">
					<button  class="btn btn-primary" onclick="location.href='edit_client.php?client_id=<?php echo $r['client_id']?>'" ><i class="fa fa-edit"></i>Edit</button>&nbsp;&nbsp;&nbsp;
					<form method="post" class="inline">
						<input type="hidden" name="client_id" value="<?php echo $r['client_id']?>">

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
