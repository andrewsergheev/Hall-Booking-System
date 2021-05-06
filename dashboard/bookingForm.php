<?php
//include('includes/functions.php'); ?>

<?php
global $last_id;
//$_REQUEST['hall_id_name'] =1;




if(isset($_POST['add_new'])){

    $name = $_POST['name'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$email = $_POST['email'];

	$sql_e = "SELECT * FROM client WHERE email='$email'";
	$res_e = mysqli_query($dblink, $sql_e);

	if(mysqli_num_rows($res_e) > 0){
  	  echo dangerMsg("It looks like your email exist in our database. Please try Existing Customer Section!");
  	}else{

		$q = "INSERT INTO client VALUES(NULL,'{$name}','{$phone}','{$address}','{$email}')";

		$result = mysqli_query($dblink, $q);

		if ($result) {
		$last_id = mysqli_insert_id($dblink);
		}

		if(!$result){
			echo dangerMsg('There was an error.');
		}

		$halls = mysqli_query($dblink, "SELECT * FROM hall");
		$clients = mysqli_query($dblink, "SELECT * FROM client");

		$client_id = $last_id;
		$hall_id = $_POST['hall_id'];
		$start = $_POST['start'];
		$end = $_POST['end'];
		$price = $_POST['price'];





		$q = "INSERT INTO bookings VALUES(NULL,'{$client_id}','{$hall_id}','{$start}','{$end}','{$price}')";

		$result = mysqli_query($dblink, $q);

		if($result) {
			$last_id = mysqli_insert_id($dblink);

			successMsg('Hall Booked.');

			$email = getClient($client_id)['email'];
			$name = getClient($client_id)['name'];
			$hallname = getHall($hall_id)['name'];

			bookingConfirmation($email, $name, $hallname, $start, $end, $price);

		}

		if(!$result){
			echo mysqli_error($dblink) ;
			dangerMsg('There was an error.');
		}
	}
}




//function bookingForm(){
?>

<form id="bookingForm" method="post" onsubmit="return validateForm()">
<h3>New customer Form</h3>
                                <div class="form-group">
                                  <label for="name">Full Name</label>
	                               <input type="text" name="name" required class="form-control" id="name"  placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                  <label for="address">Address</label>
	                               <input type="text" name="address" required class="form-control" id="address" aria-describedby="addHelp" placeholder="Enter Address">
	                               <small id="addHelp" class="form-text text-muted">Enter your address with street, city and district.</small>
                                </div>
                                <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" required class="form-control" id="phone" placeholder="Enter Phone">
                              </div>
                                <div class="form-group">
                                <label for="pass">Email</label>
                                <input type="email" name="email" required class="form-control" id="pass" placeholder="Enter Email">
                              </div>


        <div class="form-group">

                                <label for="hall">Hall</label>
                                <select name="hall_id" required class="form-control" id="hall">
<?php
if(isset($_REQUEST['hall_id_name']) ){

	//$hall_id = $_SESSION['hall_id'];
    $hall_id = $_REQUEST['hall_id_name'];

	$q = "SELECT * FROM hall where hall_id='{$hall_id}'";

	$res = mysqli_query($dblink, $q);
	if(mysqli_num_rows($res)>0){

		$hall  = mysqli_fetch_assoc($res);

		$name =  $hall['name'];

?>

                             <option value="<?php echo $hall_id?>" data-rent="<?php echo getHall($hall_id)['rent']?>" selected><?php echo $name;?></option>
<?php
                            $rows = mysqli_query($dblink, "SELECT * FROM hall where hall_id != '{$hall_id}'");
                                while($r = mysqli_fetch_assoc($rows)){
                                ?>

                                    <option value="<?php echo $r['hall_id']?>" data-rent="<?php echo $r['rent']?>"><?php echo $r['name']?></option>

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

                                    <option value="<?php echo $r['hall_id']?>" data-rent="<?php echo $r['rent']?>"><?php echo $r['name']?></option>

                                <?php
                                }
                                ?>

        <?php

}?>
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
		    <label for="price">Price £:</label>
            <input type="text" name="price" id = "totalPrice" required class="form-control">
	  	</div>

	  <button type="submit" name="add_new" class="btn btn-primary" >Submit</button>
	</form>
<?php
//} ?>


<script>

document.getElementById('totalPrice').readOnly = true;
document.getElementById("totalPrice").value = 0;
var price = $("#hall").find(':selected').data('rent');
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

function validateForm() {
	var price = document.getElementById("totalPrice").value;
	if(price == null || price == ''|| price == '0') {
		alert("Something went wrong");
		//document.getElementById('bookingForm').reset();
      	return false;
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



