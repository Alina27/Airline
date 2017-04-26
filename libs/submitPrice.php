<?php

if(count($_POST) > 0){
	$conn = mysql_connect("localhost", "root", "Alina_DB");
	mysql_select_db("airline", $conn);

	$result = mysql_query("SELECT * 
                           FROM flightlist
                           WHERE price_per_seat = '".$_POST['prs']."';");

	$count = mysql_num_rows($result);

	if($count == 0){
		header("Location: flightlist.php");
	}
	else {
		header("Location: createReservation.php");
	}
}

?>
