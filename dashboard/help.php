<?php include('includes/header.php');
if(isset($_POST['sendMessage'])) {
	$name = $_POST['name'];
	$username = $_POST['username'];
	$email_address = $_POST['email'];
	$message = $_POST['message'];

	// Create the email and send the message
	$to = 'support@hullvillagehall.co.uk'; // Add your email address
	$email_subject = "Website Contact Form:  $name";
	$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\n Username: $username\n\nEmail: $email_address\n\nMessage:\n$message";
	$headers = "From: noreply@hullvillagehall.co.uk\n"; // This is the email address the generated message will be from.
	$headers .= "Reply-To: $email_address";
	$result = mail($to,$email_subject,$email_body,$headers);

	if(!$result){
		echo mysqli_error($dblink) ;
		dangerMsg('There was an error.');
	}
	else{
		successMsg('Message Sent!');
	}

}


?>

          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">FAQ and Support</h2>
            </div>
          </header>
<section class="forms">
            <div class="container-fluid">
              <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">FAQ</h3>
                    </div>
                    <div class="card-body">
				<h4>How to contact admin?</h4>
				<p>If you have any issue please use the contact form on the right to contact admin or deal 0148589632.</p>
				<h4>Have any issues or errors?</h4>
                <p>If you have any errors please use the contact form on the right to contact admin or deal 0148589632.</p>
                <p></p>
                <br />
                <div class="row text-center">
                 <div class="col-12">
                  <img src="img/support.png" class="img-responsive" alt="Project Title">
                 </div>
                </div>

 </div>
                  </div>
                </div>
                <!-- Contact Support Form-->
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Contact Support</h3>
                    </div>
                    <div class="card-body">
                        <form name="sentMessage" method="post">
					  <div class="form-group">
						<label for="name">Full Name:</label>
						<input type="text" name="name" class="form-control" placeholder="Name" required>
					  </div>

					<div class="form-group">
						<label for="username">UserName:</label>
						<input type="text" name="username" class="form-control" placeholder="Name" required>
					  </div>

					  <div class="form-group">
						<label for="email">Email:</label>
						<input type="email" name="email" class="form-control" placeholder="Email" required>
					  </div>

				  <div class="form-group">
					<label for="message">Message:</label>
					<textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
				  </div>
				  <button type="submit" name="sendMessage" class="btn btn-primary">Send Message</button>
        </form>
                    </div>
                  </div>
                </div>
                </div>
      </div>
</section>

<?php include ('includes/footer.php');?>
