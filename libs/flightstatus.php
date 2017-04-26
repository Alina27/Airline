<?php

 require 'D:\Wamp\wamp\www\Airline\libs\Smarty.class.php';

$smarty = new Smarty();

$smarty -> template_dir = 'D:\Wamp\wamp\www\Airline\libs\templates';
$smarty -> compile_dir = 'D:\Wamp\wamp\www\Airline\libs\templates_c';

$title = "Flight Status";
$smarty -> assign("title",$title);

$smarty -> display("flightstatus.tpl");

$servername = "localhost";
$username = "root";
$password = "Alina_DB";
$dbname = "airline";

$conn = new mysqli($servername, $username, $password,$dbname);

if($conn ->connect_error){
   die("Connection failed: ".$conn ->connect_error);
}

$qrlSt1 = "SELECT arriving 
              FROM flightlist
              WHERE departure = '".$_POST['depStatus']."';";

$stDest1 = $conn -> query($qrlSt1);

 $count = $stDest1 -> num_rows;
 $smarty -> assign('count',$count);

if(count($_POST) > 0){

   $dest = $_POST['depStatus'];

   $qrlSt1 = "SELECT arriving 
              FROM flightlist
              WHERE departure = '".$dest."';";

   $stDest1 = $conn -> query($qrlSt1);

   $todayFlights = array();

   $count = $stDest1 -> num_rows;

   if($stDest1 -> num_rows > 0){
      while($row1  = $stDest1 -> fetch_assoc()){
           $todayFlights[] = $row1['arriving'];
      }
   }
    else {
           echo "No results";
   }

   $smarty -> assign('count',$count);
   $smarty -> assign('todayFlights',$todayFlights);
}

$conn -> close();

?>