<?php
require 'D:\Wamp\wamp\www\Airline\libs\Smarty.class.php';

$smarty = new Smarty();

$smarty -> template_dir = 'D:\Wamp\wamp\www\Airline\libs\templates';
$smarty -> compile_dir = 'D:\Wamp\wamp\www\Airline\libs\templates_c';

$title = "Flight Available";

$servername = "localhost";
$username = "root";
$password = "Alina_DB";
$dbname = "airline";

$conn = new mysqli($servername, $username, $password,$dbname);

if($conn ->connect_error){
   die("Connection failed: ".$conn ->connect_error);
}

session_start();
$sql = $_SESSION['destination'];
$sql2 =$_SESSION['departureDate'];
$sql3 = $_SESSION['departureTime'];
$sql4 = $_SESSION['arivalDate'];
$sql5 = $_SESSION['arivalTime'];
$sql6 = $_SESSION['duration'];
$sql7 = $_SESSION['freeSeatsNum'];
$sql8 = $_SESSION['price'];
//$_SESSION['x'] = 5;

$dest = $conn->query($sql);
$depDate = $conn->query($sql2);
$depTime = $conn->query($sql3);
$arrDate = $conn->query($sql4);
$arrTime = $conn->query($sql5);
$flightDuration = $conn->query($sql6);
$freeSeats = $conn->query($sql7);
$pricePerSeat = $conn->query($sql8);

//$_SESSION['count'] = $dest -> num_rows;
//<input type='hidden' id='field1' value='<?=$back[avatar]
$_SESSION['x'] = $dest -> num_rows;

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
    /*for($x = 1; $x <= $conn-> affected_rows; $x++){
      $rows[] =$arrTime->fetch_assoc();
     }*/ 
     $arivalTime[] = $row4["time_format(realArivalDate,'%H:%i')"];

 }
    }


  else {
		echo "No results";
 }


//$smarty -> assign("arivalTime",$arivalTime);
//$smarty -> assign("rows",$rows);
 $duration = array();
 if($flightDuration -> num_rows > 0){
	while($row5 = $flightDuration->fetch_assoc()){
		  $duration[] = $row5["duration"];
		//$duration = $row5["duration"];
		  
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

$smarty -> display("flightlistrepres.tpl");
?>