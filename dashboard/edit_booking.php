<?php include('includes/header.php'); ?>

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
              <li class="breadcrumb-item active">Edit</li>
            </ul>
          </div>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h3">Find Booking</h3>
                    </div>
                      <div class="card-body">

 <form class="form-inline">
  <input class="form-control mr-sm-2" type="text" name="booking_id" placeholder="Search" aria-label="Search">
  <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
 </form>
                    </div>
                </div>

<?php
if(isset($_POST['update'])){

	$booking_id = $_POST['booking_id'];
	$client_id = $_POST['client_id'];
	$hall_id = $_POST['hall_id'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$price = $_POST['price'];

	$q = "UPDATE bookings SET client_id='{$client_id}', hall_id='{$hall_id}' , start='{$start}',  end='{$end}', price='{$price}' WHERE booking_id = '{$booking_id}'";

	$result = mysqli_query($dblink, $q);

	if(!$result){
		echo mysqli_error($dblink);
		echo dangerMsg('There was an error.');
	}
	else{
		echo successMsg('Booking Updated Successfully.');

		$email = getClient($client_id)['email'];
        $name = getClient($client_id)['name'];
        $hallname = getHall($hall_id)['name'];

        $to = "$email";
        $subject = "Welcome to Hull Village Hall";
        $message = "Dear {$name},

        Your Booking has been chnaged.

        Here are your new details:

        Hall: {$hallname},
        Start Date: {$start},
        End Date: {$end},
        Price: £{$price}.

        Thank you.
        Kind Regards.
        ";
        $from = "support@hullvillagehall.co.uk";
        $headers = "From: $from";
        mail($to,$subject,$message,$headers);
	}
}

?>
<?php
if(isset($_GET['booking_id']) ){

	$booking_id = $_GET['booking_id'];

	$q = "SELECT * FROM bookings where booking_id='{$booking_id}'";

	$res = mysqli_query($dblink, $q);
	if(mysqli_num_rows($res)>0){

		$booking  = mysqli_fetch_assoc($res);


		$client_id =  $booking['client_id'];
		$hall_id =  $booking['hall_id'];
		$start =  $booking['start'];
		$end =  $booking['end'];
		$price = $booking['price'];
?>

                <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h3">Edit Booking ID: <?php echo $booking_id?></h3>
                    </div>
                      <div class="card-body">
	<form method="post" action="edit_booking.php" onsubmit="return validateForm()">
		<input type="hidden" name="booking_id" value="<?php echo $booking_id?>">
	 <div class="form-group">
			<label for="client">Client:</label>
			<select name="client_id" required class="form-control" id="client">

				<option value="<?php  echo $client_id?>" selected><?php  echo getClient($client_id)['name']?></option>
				<option value="" disabled>Select Other Client</option>
			<?php
			$rows = mysqli_query($dblink, "SELECT * FROM client WHERE client_id != '{$client_id}'");
			while($r = mysqli_fetch_assoc($rows)){
			?>

				<option value="<?php echo $r['client_id']?>" ><?php echo $r['name']?></option>

			<?php
			}
			?>


			</select>
		</div>
		<div class="form-group">
			<label for="hall">Hall:</label>
			<select name="hall_id" required class="form-control" id="hall">

				<option value="<?php  echo $hall_id?>" data-rent="<?php echo getHall($hall_id)['rent']?>" selected><?php  echo getHall($hall_id)['name']?></option>
				<option value=""  disabled>Select Other Hall</option>
			<?php
			$rows = mysqli_query($dblink, "SELECT * FROM hall WHERE hall_id != '{$hall_id}'");
			while($r = mysqli_fetch_assoc($rows)){
			?>

				<option value="<?php echo $r['hall_id']?>" data-rent="<?php echo $r['rent']?>"><?php echo $r['name']?></option>

			<?php
			}
			?>


			</select>
		</div>
		<div class="form-group">

            <label for="start">Start Date:</label>
            <input type="datetime-local" value="<?php  echo date('Y-m-d\TH:i:s', strtotime($start));?>" name="start" required class="form-control" id="start" placeholder="Enter Start Date">
		</div>

		<div class="form-group">
		    <label for="date">End Date:</label>
		    <input type="datetime-local" value="<?php  echo date('Y-m-d\TH:i:s', strtotime($end));?>" name="end" required class="form-control" id="end" placeholder="Enter End Date">
	  	</div>
		<div class="form-group">
		    <label for="price">Price £:</label>
			<!--<input type="hidden" id = "previousPrice" required class="form-control" value="<?php //echo $price;?>"> -->
            <input type="text" name="price" id = "totalPrice" required class="form-control" value="<?php echo $price;?>">
	  	</div>

	  <button type="submit" name="update" class="btn btn-primary">Update</button>
	</form>
<?php
	}
	else{
		alertMsg('Booking ID: <strong>'.$booking_id.'</strong> Not Found.');
	}
}

?>
                    </div>
                </div>
              </div>
</section>
<?php include('includes/footer.php'); ?>
<script>
//var previousPrice = document.getElementById("previousPrice").value;
//document.getElementById("totalPrice").value = previousPrice;
</script>
<script src="js/booking.js"></script>
