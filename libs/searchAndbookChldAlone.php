<?php
error_reporting(E_ALL & ~E_DEPRECATED);
require 'D:\Wamp\wamp\www\Airline\libs\Smarty.class.php';

$smarty = new Smarty();

$smarty -> template_dir = 'D:\Wamp\wamp\www\Airline\libs\templates';
$smarty -> compile_dir = 'D:\Wamp\wamp\www\Airline\libs\templates_c';

$title = "Search And Book Child Alone";

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

$flightCount = mysqli_num_rows($result);

$sql_from_str = "SELECT departure FROM flightlist";
$sql_to_str = "SELECT arriving FROM flightlist";

$sql_from = $conn->query($sql_from_str);
$sql_to = $conn->query($sql_to_str);

  for($i = 0; $i < $flightCount; $i++){
        $row = $sql_from->fetch_assoc();
        $from = "<option>".$row['departure']."</option>";
   }

  for($i = 0; $i < $flightCount; $i++){
        $row = $sql_to->fetch_assoc();
        $to = "<option>".$row['arriving']."</option>";
    } 

$conn->close();

$smarty -> assign("from",$from);
$smarty -> assign("to",$to);
$smarty -> display("searchAndbookChldAlone.tpl");
?>