<?php include('includes/header.php'); ?>

<?php
global $last_id;



$halls = mysqli_query($dblink, "SELECT * FROM hall");
$clients = mysqli_query($dblink, "SELECT * FROM client");

if(isset($_POST['add'])){

	$client_id = $_POST['client_id'];
	$hall_id = $_POST['hall_id'];
	$start = $_POST['start'];
	$end = $_POST['end'];
    $price = $_POST['price'];





	$q = "INSERT INTO bookings VALUES(NULL,'{$client_id}','{$hall_id}','{$start}','{$end}','{$price}')";

	$result = mysqli_query($dblink, $q);

    if($result) {
        $last_id = mysqli_insert_id($dblink);
    }

	if(!$result){
		echo mysqli_error($dblink) ;
		dangerMsg('There was an error.');
	}
	else{
		successMsg('Hall Booked.');

        $email = getClient($client_id)['email'];
        $name = getClient($client_id)['name'];
        $hallname = getHall($hall_id)['name'];

        $to = "$email";
        $subject = "Welcome to Hull Village Hall";
        $message = "Dear {$name},

        Thank you for booking with us.

        Here are you details:

        Hall: {$hallname},
        Start Date: {$start},
        End Date: {$end},
        Price: {$price}.

        Thank you.
        Kind Regards.
        ";
        $from = "support@hullvillagehall.co.uk";
        $headers = "From: $from";
        mail($to,$subject,$message,$headers);

	}

}
?>





<form id="bookingForm" method="post" onsubmit="return validateForm()">

		<div class="form-group">
			<label for="client">Client</label>
			<select name="client_id" required class="form-control" id="client">

				<option value="" disabled selected>Select Client</option>
			<?php
			$rows = mysqli_query($dblink, "SELECT * FROM client");
			while($r = mysqli_fetch_assoc($rows)){
			?>

				<option value="<?php echo $r['client_id']?>" ><?php echo $r['name']?></option>

			<?php
			}
			?>


			</select>
		</div>
		<div class="form-group">
			<label for="hall">Hall</label>
			<select name="hall_id" required class="form-control" id="hall">

				<option value="" disabled selected>Select hall</option>
			<?php
			$rows = mysqli_query($dblink, "SELECT * FROM hall");
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
            <input type="datetime-local" name="start" required class="form-control" id="start" placeholder="Enter Start Date">
		</div>

		<div class="form-group">
		    <label for="date">End Date:</label>
            <input type="datetime-local" name="end" required class="form-control" id="end" placeholder="Enter End Date">
	  	</div>

        <div class="form-group">
		    <label for="price">Price</label>
            <input type="text" name="price" id = "totalPrice" required class="form-control">
	  	</div>

	  <button type="submit" name="add" class="btn btn-primary" >Submin</button>
	</form>


<script>
document.getElementById('totalPrice').readOnly = true
document.getElementById("totalPrice").value = 0;
var price = 0;
$("#hall").change(function () {
	price = 0;
	price = $(this).find(':selected').data('rent');
	document.getElementById("start").value = null;
	document.getElementById("end").value = null;
	document.getElementById("totalPrice").value = 0;
	return price;
});

$("#start").change(function () {
document.getElementById("end").value = null;
document.getElementById("totalPrice").value = 0;
	$("#end").change(function () {
		if(price > 0) {
			var startDate = document.getElementById('start').value;
			var dt1 = new Date(startDate);

			var endDate = document.getElementById('end').value;
			var dt2 = new Date(endDate);
			var diff =(dt2.getTime() - dt1.getTime()) / 1000;
			diff /= 60;
			var time = Math.abs(Math.round(diff));
			var total = price * (time/60)
			//alert("You price is " +price + "*" + time + "/60" + "=" + total);
			document.getElementById("totalPrice").value = total;
		}else {
			alert("Choose the hall");
			document.getElementById("start").value = null;
			document.getElementById("end").value = null;
		}

	});
});
</script>

<script>
function validateForm() {
	var price = document.getElementById("totalPrice").value;
	if(price == null || price == ''|| price == '0') {
		alert("Something went wrong");
		//document.getElementById('bookingForm').reset();
      	//return false;
	}

    var today = new Date();
    var th = today.getHours();
    var tm = today.getMinutes();

    var start = document.getElementById("start").value;
    var startDate = new Date(start);
    var sh = startDate.getHours();
    var sm = startDate.getMinutes();

    var end = document.getElementById("end").value;
    var endDate = new Date(end);
    var eh = endDate.getHours();
    var em = endDate.getMinutes();

    if (startDate.setHours(sh, sm) <= today.setHours(th, tm) || startDate.setHours(sh, sm) <= today.setHours(th + 1, tm)) {
        alert("Your Start date is in the past or is less than 1h in advance!");
        document.getElementById("start").value = null;
        return false;
    }
    if (endDate.setHours(eh, em) <= today.setHours(th, tm) || endDate.setHours(eh, em) <= startDate.setHours(sh, sm)) {
        alert("Your End date is in the past or equal to Start date!");
        document.getElementById("end").value = null;
        return false;
    }
}
</script>
