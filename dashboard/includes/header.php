<?php include('functions.php');
$redirect = 'login.php';
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header("Location: $redirect");
    exit;
}
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dashboard</title>
    <link rel="icon" type="image/x-icon" href="../../assets/img/hall_icon.png" />

	<link rel="stylesheet" type="text/css" href="includes/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="includes/style.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/fontawesome-all.min.css">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>

	<!-- FullCalendar-->
	<!--
		* Title: FullCalendar
		* Author: arshaw
		* Date: unknown
		* Code version: unknown
		* Availability: https://fullcalendar.io/
	-->
<link href='lib/main.css' rel='stylesheet' />
<script src='lib/main.js'></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },
	  textColor: 'black',
      eventColor: 'green',
      navLinks: true, // can click day/week names to navigate views
      //selectable: true,
      selectMirror: true,
	  weekNumbers: true,
	  //nowIndicator: true,

      eventRender: function (event, element, view) {
		  element.find('.fc-title').append('<br />' + event.description );
	  },

      //editable: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events: 'load.php',


    });

    calendar.render();
  });

</script>
	<style>



  #calendar {
    max-width: 1000px;
    margin: 0 auto;
  }
@media (max-width: 767px) { .fc-toolbar .fc-left { float: none !important; display: flex; justify-content: center; margin-bottom: 1rem; } } @media (max-width: 767px) { .fc-toolbar .fc-right { float: none !important; display: flex; justify-content: center; margin-bottom: 1rem; } } @media (max-width: 767px) { .fc-scroller.fc-day-grid-container { overflow: unset !important; height: 100% !important; } } @media (max-width: 767px) { .fc-view-container { margin-bottom: 2rem; } } @media (max-width: 767px) { .fc-row.fc-rigid .fc-content-skeleton { position: relative !important; } }


</style>
</head>

<body>
<div class="page">
	<?php  nav();?>
    <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="img/avatar-1.png" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4"><?php echo $_SESSION['user']['name']; ?></h1>
              <!--<p>Web Designer</p>-->
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
            <li class="active"><a href="dashboard.php"> <i class="icon-home"></i>Home </a></li>

            <li><a href="#clientDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-user"></i>Clients</a>
              <ul id="clientDropdown" class="collapse list-unstyled ">
                  <li><a href="add_client.php"><i class="fa fa-plus"></i> Add</a></li>
		          <li><a href="view_client.php"><i class="fa fa-eye"></i> View</a></li>
		          <li><a href="edit_client.php"><i class="fa fa-edit"></i> Edit</a></li>
              </ul>
            </li>
             <li><a href="#bookingDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-calendar-plus-o" aria-hidden="true"></i></i>Bookings</a>
              <ul id="bookingDropdown" class="collapse list-unstyled ">
                   <li><a class="dropdown-item" href="add_booking.php"><i class="fa fa-plus"></i> Add</a></li>
		           <li><a class="dropdown-item" href="view_booking.php"><i class="fa fa-eye"></i> View</a></li>
		           <li><a class="dropdown-item" href="edit_booking.php"><i class="fa fa-edit"></i> Edit</a></li>
              </ul>
            </li>

            <?php if ($_SESSION['user']['type'] == 'admin') : ?>
                  <li><a href="#hallDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-grid"></i>Halls</a>
              <ul id="hallDropdown" class="collapse list-unstyled ">
                  <li><a class="dropdown-item" href="add_hall.php"><i class="fa fa-plus"></i> Add</a></li>
		          <li><a class="dropdown-item" href="view_hall.php"><i class="fa fa-eye"></i> View</a></li>
		          <li><a class="dropdown-item" href="edit_hall.php"><i class="fa fa-edit"></i> Edit</a></li>
              </ul>
            </li>
            <li><a href="#managerDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-user-plus" aria-hidden="true"></i></i>Users/Managers</a>
              <ul id="managerDropdown" class="collapse list-unstyled ">
                  <li><a class="dropdown-item" href="add_manager.php"><i class="fa fa-plus"></i> Add</a></li>
		          <li><a class="dropdown-item" href="view_manager.php"><i class="fa fa-eye"></i> View</a></li>
		          <li><a class="dropdown-item" href="edit_manager.php"><i class="fa fa-edit"></i> Edit</a></li>
              </ul>
            </li>
			<?php endif; ?>

          </ul><span class="heading">Extras</span>
          <ul class="list-unstyled">
            <li> <a href="edit_user_details.php"> <i class="fa fa-user" aria-hidden="true"></i>My Account</a></li>
            <li> <a href="https://login.microsoftonline.com/common/oauth2/authorize?client_id=4345a7b9-9a63-4910-a426-35363201d503&redirect_uri=https%3A%2F%2Fwww.office.com%2Flanding&response_type=code%20id_token&scope=openid%20profile&response_mode=form_post&nonce=637503965521589625.NmQ2MTg2NGQtMzRjOC00ZTFlLTlmNzAtMDEzMTlhMjAxY2FhMTI5OTY3YmQtNDNmYi00OTdjLWI2ZGUtMzJiOTFiNzFlODQw&ui_locales=en-GB&mkt=en-GB&client-request-id=b3c4fbea-5b52-4152-8951-8282982e2bdd&state=J6v9nGvrRokOUYGCqkorwWbKJ9Gj5kYlT5lGRx5At71ePMvX9BKq_bpTkiJB5sJa0Ed-q26rLwhbGZohdV4_p5kH5uAUcqnEwK1ubdZPGJSoeg_1hW_rJQspW1MiF4xqTZ8iLyjecpyf__DvwQ0YETfIY4OexWWScIGcVJVk5cbeEK27y2zQTR1iBqkKhFmoVmaO6FgUbbrhdlPrTeRNZsGxCRNMS-LjkPkEloaXTnNPEe20cVivaquCWm6qs74jSOaV1VBjNYcfLRTGC-jyCg&x-client-SKU=ID_NETSTANDARD2_0&x-client-ver=6.8.0.0&sso_reload=true" target="_blank"> <i class="icon-mail"></i>Email </a></li>
            <li> <a href="https://dashboard.tawk.to/"  target="_blank"> <i class="fa fa-commenting-o" aria-hidden="true"></i>Online Chat</a></li>
            <li> <a href="help.php"> <i class="fa fa-info" aria-hidden="true"></i>Help</a></li>
          </ul>
        </nav>


    <div class="content-inner">
	   <!--<main role="main" class="container"> -->


