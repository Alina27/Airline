<?php
   
   if(isset($_POST['submit']) > 0){

  $servername = "localhost";
  $username = "root";
  $password = "Alina_DB";
  $dbname = "airline";

  $conn = new mysqli($servername, $username, $password,$dbname);

if($conn ->connect_error){
   die("Connection failed: ".$conn ->connect_error);
}

    $sqlReq = "SELECT departure, arriving
              FROM flightlist
              INNER JOIN flight
              ON flightlist.flightlist_id = flight.flightlist_id
              WHERE date(realDepartureDate) = '2017-08-02' AND departure = '".$_POST['depStatus']."' ";

      session_start();
      $_SESSION['statusDest'] = "SELECT departure, arriving
              FROM flightlist
              INNER JOIN flight
              ON flightlist.flightlist_id = flight.flightlist_id
              WHERE date(realDepartureDate) = '2017-08-02' AND departure = '".$_POST['depStatus']."' ";



     $res = $conn -> query($sqlReq);
     $countRows = $res -> num_rows;
    
     if($countRows === 0){
      header("Location: manu.php");
     }
     else {
      header("Location: flightstatus.php");
     }

   }

?>
