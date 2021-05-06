<?php

//load.php
$connect = new PDO('mysql:host=localhost; dbname=chbs', 'root', '');

$data = array();

$query = "SELECT * FROM bookings ORDER BY booking_id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();


//$hall_id = $row["hall_id"];





foreach($result as $row)
{
    $h_name = '';
    $hall_id = $row["hall_id"];
    $name = "SELECT * FROM hall WHERE hall_id='$hall_id'";
    $stt = $connect->prepare($name);
    $stt->execute();



	//$namequery = mysql_query($name);
	while($namequery = $stt->fetch())
	{
	$hall_name = $namequery['name'];
        $h_name = $hall_name;
    }

    $client_name = '';
    $client_id = $row["client_id"];
    $q_c_name = "SELECT * FROM client WHERE client_id='$client_id'";
    $st = $connect->prepare($q_c_name);
    $st->execute();

    while($c_namequery = $st->fetch())
	{
	$c_name = $c_namequery['name'];
        $client_name = $c_name;
    }

    $id = $row["booking_id"];
    $url = "edit_booking.php?booking_id=" . '' . $id;



 $data[] = array(
  'booking_id'   => $row["booking_id"],
  'title'   => $h_name,
  'description' => $client_name,
  'start'   => $row["start"],
  'end'   => $row["end"],
  'url'  => $url
 );
}

echo json_encode($data);

?>
