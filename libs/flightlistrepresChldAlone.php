<?php
require 'D:\Wamp\wamp\www\Airline\libs\Smarty.class.php';

$smarty = new Smarty();

$smarty -> template_dir = 'D:\Wamp\wamp\www\Airline\libs\templates';
$smarty -> compile_dir = 'D:\Wamp\wamp\www\Airline\libs\templates_c';

$title = "Flight Available";

if(isset($_POST['radio'])){
	session_start();
	$_SESSION["radioPP"] = $_POST['radio'];
	header("Location: childAlone.php");
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
$sql_1 = $_SESSION['CAdestination'];
$sql_2 = $_SESSION['CAdepartureDate'];
$sql_3 = $_SESSION['CAdepartureTime'];
$sql_4 = $_SESSION['CAarivalDate'];
$sql_5 = $_SESSION['CAarivalTime'];
$sql_6 = $_SESSION['CAduration'];
$sql_7 = $_SESSION['freeSeatsNum']; 
$sql_8 = $_SESSION['price'];


$dest = $conn -> query($sql_1);
$depDate = $conn->query($sql_2);
$depTime = $conn->query($sql_3);
$arrDate = $conn->query($sql_4);
$arrTime = $conn->query($sql_5);
$flightDuration = $conn->query($sql_6);
$freeSeats = $conn->query($sql_7);
$pricePerSeat = $conn->query($sql_8);

$destination = array();

if($dest -> num_rows > 0){
	while($row = $dest->fetch_assoc()){
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

$count = $dest -> num_rows;
$smarty -> assign("count",$count);

$smarty -> assign("title",$title);
$smarty -> assign("destination",$destination);
$smarty -> assign("destinationDate",$destinationDate);
$smarty -> assign("departureTime",$departureTime);
$smarty -> assign("arivalDate",$arivalDate);
$smarty -> assign("arivalTime",$arivalTime);
$smarty -> assign("duration",$duration);
$smarty -> assign("freeSeatsNum",$freeSeatsNum);
$smarty -> assign("price",$price);

$smarty -> display("flightlistrepresChldAlone.tpl");
?>