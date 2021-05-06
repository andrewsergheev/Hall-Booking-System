<?php ob_start();?>

<?php include("includes/header.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php
	session_unset();
	setcookie('loggedin','',time()-60*60*24*7);
	setcookie('admin','',time()-60*60*24*7);
	setcookie('stuff','',time()-60*60*24*7);
	setcookie('username','',time()-60*60*24*7);
	//redirect_to('login.php');
    session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
?>

<?php include("includes/footer.php"); ?>
