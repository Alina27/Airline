<?php
require 'D:\Wamp\wamp\www\Airline\libs\Smarty.class.php';

$smarty = new Smarty();

$smarty -> template_dir = 'D:\Wamp\wamp\www\Airline\libs\templates';
$smarty -> compile_dir = 'D:\Wamp\wamp\www\Airline\libs\templates_c';

$title = "Flight Available";

/*
if(count($_POST) > 0) {
	$conn = mysql_connect("localhost", "root", "Alina_DB");
	mysql_select_db("airline", $conn);
	//$result = mysql_query("SELECT * FROM flightlist WHERE price_per_seat = '".$_POST['prs']."'");
	$ress = mysql_query("SELECT * FROM flightlist WHERE price_per_seat = '".$_POST['radio']."';");
    $cnt = mysql_num_rows($ress);

	for($i = 0; $i < $count; $i++){
		if($_POST['radio'] == $i){
			header("Location: createReservation.php");
		}
		else {
			header("Location: flightstatus.php");
		}
	} 
}*/

if(isset($_POST['radio'])){
	session_start();
	$_SESSION["pp"] = $_POST['radio'];
	header("Location: createReservation.php");
}

$servername = "localhost";
$username = "root";
$password = "Alina_DB";
$dbname = "airline";

$conn = new mysqli($servername, $username, $password,$dbname);
if($conn ->connect_error){
   die("Connection failed: ".$conn ->connect_error);
}

session_start();
$sql0 = $_SESSION['flightName'];
$sql = $_SESSION['destination'];
$sql2 =$_SESSION['departureDate'];
$sql3 = $_SESSION['departureTime'];
$sql4 = $_SESSION['arivalDate'];
$sql5 = $_SESSION['arivalTime'];
$sql6 = $_SESSION['duration'];
$sql7 = $_SESSION['freeSeatsNum'];
$sql8 = $_SESSION['price'];
//$_SESSION['x'] = 5;

$num = $conn->query($sql0);
$dest = $conn->query($sql);
$depDate = $conn->query($sql2);
$depTime = $conn->query($sql3);
$arrDate = $conn->query($sql4);
$arrTime = $conn->query($sql5);
$flightDuration = $conn->query($sql6);
$freeSeats = $conn->query($sql7);
$pricePerSeat = $conn->query($sql8);

$flightNumber = array();
if($num -> num_rows > 0){
	while($row0 = $num->fetch_assoc()){
		$flightNumber[] = $row0['flight_name'];
		//$_SESSION['pr'] = $_POST["priceT"];
	}
}
else {
		echo "No results";
 }

$destination = array();
if($dest -> num_rows > 0){
	while($row = $dest->fetch_assoc()){
		//$destination = $row['departure']." - ".$row['arriving'];
        $destination[] = $row['departure']." - ".$row['arriving'];
	}
  }
  else {
		echo "No results";
 }
$destinationDate = array();
 if($depDate -> num_rows > 0){
	while($row1 = $depDate->fetch_assoc()){
		$destinationDate[] = $row1['date(realDepartureDate)'];
	}
  }
  else {
		echo "No results";
 }

$departureTime = array();
if($depTime -> num_rows > 0){
	while($row2 = $depTime->fetch_assoc()){
		$departureTime[] = $row2["time_format(realDepartureDate,'%H:%i')"];
	}
  }
  else {
		echo "No results";
 }

$arivalDate = array();
if($arrDate -> num_rows > 0){
	while($row3 = $arrDate->fetch_assoc()){
		  $arivalDate[] = $row3['date(realArivalDate)'];
	}
  }
  else {
		echo "No results";
 }
$arivalTime = array();
if($arrTime -> num_rows > 0){
   while($row4 = $arrTime->fetch_assoc()){
     
     $arivalTime[] = $row4["time_format(realArivalDate,'%H:%i')"];

 }
    }

  else {
		echo "No results";
 }

 $duration = array();
 if($flightDuration -> num_rows > 0){
	while($row5 = $flightDuration->fetch_assoc()){
		  $duration[] = $row5["duration"]; 
	}
  }
  else {
		echo "No results";
 }

$freeSeatsNum = array();
 if($freeSeats -> num_rows > 0){
	while($row6 = $freeSeats->fetch_assoc()){
		  $freeSeatsNum[] = $row6["free_seats_num"];
	}
  }
  else {
		echo "No results";
 }

$price = array();
 if($pricePerSeat -> num_rows > 0){
	while($row7 = $pricePerSeat->fetch_assoc()){
		  $price[] = $row7["price_per_seat"];
	}
  }
  else {
		echo "No results";
 }


$conn->close();

$count = $dest -> num_rows;
$smarty -> assign("count",$count);

$smarty -> assign("title",$title);
$smarty -> assign("flightNumber",$flightNumber);
$smarty -> assign("destination",$destination);
$smarty -> assign("destinationDate",$destinationDate);
$smarty -> assign("departureTime",$departureTime);
$smarty -> assign("arivalDate",$arivalDate);
$smarty -> assign("arivalTime",$arivalTime);
$smarty -> assign("duration",$duration);
$smarty -> assign("freeSeatsNum",$freeSeatsNum);
$smarty -> assign("price",$price);  

$smarty -> display("bookingOptions.tpl");

?>