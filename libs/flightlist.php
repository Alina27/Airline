<?php
error_reporting(E_ALL & ~E_DEPRECATED);
require 'D:\Wamp\wamp\www\Airline\libs\Smarty.class.php';

$smarty = new Smarty();

$smarty -> template_dir = 'D:\Wamp\wamp\www\Airline\libs\templates';
$smarty -> compile_dir = 'D:\Wamp\wamp\www\Airline\libs\templates_c';

$title = "Flight List";

$smarty -> assign("title",$title);


$servername = "localhost";
$username = "root";
$password = "Alina_DB";
$dbname = "airline";

$conn = new mysqli($servername, $username, $password,$dbname);
if($conn ->connect_error){
   die("Connection failed: ".$conn ->connect_error);
}

$sql_str = "SELECT * FROM flightlist";
$result = $conn->query($sql_str);

//$flightCount = mysql_num_rows($result); //кількість рядків у flight  - $smarty -> assign("flightCount",$flightCount); 
$flightCount = mysqli_num_rows($result);

$sql_from_str = "SELECT departure FROM flightlist";
$sql_to_str = "SELECT arriving FROM flightlist";

$sql_from = $conn->query($sql_from_str);
$sql_to = $conn->query($sql_to_str);

  for($i = 0; $i < $flightCount; $i++){
      $row1 = $sql_from -> fetch_assoc();
      //$from = "<option>".$row['departure']."</option>";
      $from = "<option value =".$row1['departure']."></option>"; 
   }

//$to = "<option name = 'arr' >".$row['arriving']."</option>";
  for($i = 0; $i < $flightCount; $i++){
        $row2 = $sql_to -> fetch_assoc();
        $to = "<option value =".$row2['arriving']."></option>"; 
  } 
$conn->close();
/*
if(count($_POST) > 0) {
  $conn = mysql_connect("localhost", "root", "Alina_DB");
  mysql_select_db("airline", $conn);

   
  $res1 = mysql_query("SELECT flight_name FROM flight WHERE flightlist_id IN (SELECT flightlist_id FROM flightlist WHERE departure = '".$_POST["dep"]. "' AND arriving = '".$_POST["arr"]. "');"); 

  $count = mysql_num_rows($res1);

  if($count == 0){
    header("Location: menu.php");
  }
  else {
    header("Location: flightstatus.php");
  }
}*/


   /* 
if(count($_POST) > 0){

 $sql_find_fl = "SELECT flight_name 
                 FROM flight
                 WHERE flightlist_id IN (SELECT flightlist_id 
                                         FROM flightlist   
						                             WHERE departure = '".$_POST["dep"]. "' AND arriving = '".$_POST["arr"]. "');"; 

$sql_find_fl = "SELECT flight_name 
                 FROM flight
                 WHERE flightlist_id IN (SELECT flightlist_id 
                                         FROM flightlist   
                                         WHERE departure = 'London-Gatwick (LG)' AND arriving = 'Boston (BOS)');";

$find_fl = $conn->query($sql_find_fl);
//$find_fl = mysql_query($sql_find_fl);

 while($find_fl -> num_rows > 0){
   echo"<h1>".$info['flight_name']."</h1>";
 }
  } */
$smarty -> assign("from",$from);   
$smarty -> assign("to",$to);
$smarty -> display("flightlist.tpl");

?>