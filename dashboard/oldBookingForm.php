<?php //include('includes/functions.php');
//$hall_id = 0;
if(isset($_SESSION['hall'])){
    $hall_id = $_SESSION['hall'];
}
?>


 <form id="searchClient" class="form-inline">
	 <h3>Existing Customer Form</h3>
	 <div class="form-group">
	<input class="form-control" type="email" name="client_email" placeholder="Enter your email " aria-label="Search" required>
  	<button class="btn btn-success btn-sm" type="submit">Search</button>
	 </div>
 </form>
<?php

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


	if(!$result){
		echo mysqli_error($dblink) ;
		dangerMsg('There was an error.');
	}
	else{
		successMsg('Hall Booked.');

        $email = getClient($client_id)['email'];
        $name = getClient($client_id)['name'];
        $hallname = getHall($hall_id)['name'];

        bookingConfirmation($email, $name, $hallname, $start, $end, $price);

	}

}

if(isset($_GET['client_email']) ){
	$client_email = $_GET['client_email'];

	$q = "SELECT * FROM client where email='{$client_email}'";

	$res = mysqli_query($dblink, $q);
	if(mysqli_num_rows($res)>0){

		$client  = mysqli_fetch_assoc($res);

		$client_id = $client['client_id'];
		$name =  $client['name'];

?>

<form id="newBookingForm" method="post" onsubmit="return validateForm1()">
	<h3>Existing Customer Form</h3>

		<div class="form-group">
			<label for="client">Client</label>
			<select name="client_id" required class="form-control" id="client">
				<option value="<?php echo $client_id?>" ><?php echo $name?></option>
			</select>
		</div>


	<div class="form-group">

                                <label for="hall">Hall</label>
                                <select name="hall_id" required class="form-control" id="hall1">
<?php
if($hall_id > 0){

	//$hall_id = $_SESSION['hall_id'];
    //$hall_id = $_REQUEST['hall_id_name'];

	$q = "SELECT * FROM hall where hall_id='{$hall_id}'";

	$res = mysqli_query($dblink, $q);
	if(mysqli_num_rows($res)>0){

		$hall  = mysqli_fetch_assoc($res);

		$name =  $hall['name'];

?>

                             <option value="<?php echo $hall_id;?>" data-rent1="<?php echo getHall($hall_id)['rent'];?>" selected><?php echo $name;?></option>
<?php
                            $rows = mysqli_query($dblink, "SELECT * FROM hall where hall_id != '{$hall_id}'");
                                while($r = mysqli_fetch_assoc($rows)){
                                ?>

                                    <option value="<?php echo $r['hall_id'];?>" data-rent1="<?php echo $r['rent'];?>"><?php echo $r['name'];?></option>

                                <?php
                                }

    }
}else {
        ?>
                                 <option value="" disabled selected>Select hall</option>


                                <?php
                                $rows = mysqli_query($dblink, "SELECT * FROM hall");
                                while($r = mysqli_fetch_assoc($rows)){
                                ?>

                                    <option value="<?php echo $r['hall_id']?>" data-rent1="<?php echo $r['rent']?>"><?php echo $r['name']?></option>

                                <?php
                                }
                                ?>

        <?php

}?>
                                </select>
                            </div>


		<div class="form-group">
			<label for="start">Start Date:</label>
            <input type="datetime-local" name="start" required class="form-control" id="start1" placeholder="Enter Start Date">
		</div>

		<div class="form-group">
		    <label for="date">End Date:</label>
            <input type="datetime-local" name="end" required class="form-control" id="end1" placeholder="Enter End Date">
	  	</div>

        <div class="form-group">
		    <label for="price">Price £:</label>
            <input type="text" name="price" id = "totalPrice1" required class="form-control">
	  	</div>

	  <button type="submit" name="add" class="btn btn-primary" >Submin</button>
	</form>
<?php
        session_destroy();
	}
	else{
		alertMsg('Client Email: <strong>'.$client_email.'</strong> Not Found.');
	}
}

?>

<script>
document.getElementById('totalPrice1').readOnly = true;
document.getElementById("totalPrice1").value = 0;
var price =  $("#hall1").find(':selected').data('rent1');
$("#hall1").change(function () {
	price = 0;
	price = $(this).find(':selected').data('rent1');
	document.getElementById("start1").value = null;
	document.getElementById("end1").value = null;
	document.getElementById("totalPrice1").value = 0;
	return price;
});

$("#start1").change(function () {
document.getElementById("end1").value = null;
document.getElementById("totalPrice1").value = 0;
	$("#end1").change(function () {
		if(price > 0) {
			var startDate = document.getElementById('start1').value;
			var dt1 = new Date(startDate);

			var endDate = document.getElementById('end1').value;
			var dt2 = new Date(endDate);
			var diff =(dt2.getTime() - dt1.getTime()) / 1000;
			diff /= 60;
			var time = Math.abs(Math.round(diff));
			var total = price * (time/60)
			//alert("You price is " +price + "*" + time + "/60" + "=" + total);
			document.getElementById("totalPrice1").value = total;
		}else {
			alert("Choose the hall");
			document.getElementById("start1").value = null;
			document.getElementById("end1").value = null;
		}

	});
});
</script>

<script>
function validateForm1() {
	var price = document.getElementById("totalPrice1").value;
	if(price == null || price == ''|| price == '0') {
		alert("Something went wrong");
		//document.getElementById('bookingForm').reset();
      	return false;
	}

    var today = new Date();
    var th = today.getHours();
    var tm = today.getMinutes();

    var start = document.getElementById("start1").value;
    var startDate = new Date(start);
    var sh = startDate.getHours();
    var sm = startDate.getMinutes();

    var end = document.getElementById("end1").value;
    var endDate = new Date(end);
    var eh = endDate.getHours();
    var em = endDate.getMinutes();

    if (startDate.setHours(sh, sm) <= today.setHours(th, tm) || startDate.setHours(sh, sm) <= today.setHours(th + 1, tm)) {
        alert("Your Start date is in the past or is less than 1h in advance!");
        document.getElementById("start1").value = null;
        return false;
    }
    if (endDate.setHours(eh, em) <= today.setHours(th, tm) || endDate.setHours(eh, em) <= startDate.setHours(sh, sm)) {
        alert("Your End date is in the past or equal to Start date!");
        document.getElementById("end1").value = null;
        return false;
    }
}
</script>
<?php

?>

