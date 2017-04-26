<?php
/*
error_reporting(E_ALL & ~E_DEPRECATED);
   if(count($_POST) > 0){

     $conn = mysql_connect("localhost", "root", "Alina_DB");
     mysql_select_db("airline", $conn);

    $ChAresult = mysql_query("SELECT flight_name 
                           FROM flight 
                           WHERE realDepartureDate IN (SELECT realDepartureDate
                                                       FROM flight 
                                                       WHERE date(realDepartureDate) = '".$_POST["date"]. "') 
                                                       AND flightlist_id IN (SELECT flightlist_id 
                                                                             FROM flightlist WHERE departure = '".$_POST["dep"]. "' AND arriving = '".$_POST["arr"]. "');");

    
    session_start();
   
    $_SESSION['flightName'] = "SELECT flight_name 
                               FROM flight 
                               WHERE realDepartureDate IN (SELECT realDepartureDate
                                                           FROM flight 
                                                           WHERE date(realDepartureDate) = '".$_POST["date"]. "') 
                                                                 AND flightlist_id IN (SELECT flightlist_id 
                                                                                       FROM flightlist WHERE departure = '".$_POST["dep"]. "' AND arriving = '".$_POST["arr"]. "');";

    $_SESSION['destination'] = "SELECT departure, arriving
                                FROM flightlist
                                WHERE departure = '".$_POST["dep"]."' AND arriving = '".$_POST["arr"]. "' AND flightlist_id IN (SELECT flightlist_id
                                                                                                                                FROM flight
                                                                                                                                WHERE date(realDepartureDate) = '".$_POST["date"]. "');";
    
    $_SESSION['departureDate'] = "SELECT date(realDepartureDate)
                                  FROM flight
                                  WHERE date(realDepartureDate) = '".$_POST["date"]. "' AND flightlist_id IN (SELECT flightlist_id
                                                                                                              FROM flightlist
                                                                                                              WHERE departure = '".$_POST["dep"]. "' AND arriving = '".$_POST["arr"]. "');";

   $_SESSION['departureTime'] = "SELECT time_format(realDepartureDate,'%H:%i')
                                 FROM flight
                                 WHERE date(realDepartureDate) = '".$_POST["date"]. "' AND flightlist_id IN (SELECT flightlist_id
                                                                                                             FROM flightlist
                                                                                                             WHERE departure = '".$_POST["dep"]. "' AND arriving = '".$_POST["arr"]."');";
    $_SESSION['arivalDate'] = "SELECT date(realArivalDate)
                               FROM flight
                               WHERE date(realDepartureDate) = '".$_POST["date"]. "' AND flightlist_id IN (SELECT flightlist_id
                                                                                                           FROM flightlist
                                                                                                           WHERE departure = '".$_POST["dep"]. "' AND arriving = '".$_POST["arr"]. "');";
    
    $_SESSION['arivalTime'] = "SELECT time_format(realArivalDate,'%H:%i')
                               FROM flight
                               WHERE date(realDepartureDate) = '".$_POST["date"]. "' AND flightlist_id IN (SELECT flightlist_id
                                                                                                           FROM flightlist
                                                                                                           WHERE departure = '".$_POST["dep"]. "' AND arriving = '".$_POST["arr"]."');";

    $_SESSION['duration'] = "SELECT duration
                             FROM flightlist
                             WHERE departure = '".$_POST["dep"]. "' AND arriving = '".$_POST["arr"]. "' AND flightlist_id IN (SELECT flightlist_id
                                                                                                                              FROM flight
                                                                                                                              WHERE date(realDepartureDate) = '".$_POST["date"]. "');";

    $_SESSION['freeSeatsNum'] = "SELECT free_seats_num
                                 FROM flight
                                 WHERE date(realDepartureDate) = '".$_POST["date"]. "' AND flightlist_id IN (SELECT flightlist_id
                                                                                                             FROM flightlist
                                                                                                             WHERE departure = '".$_POST["dep"]. "' AND arriving = '".$_POST["arr"]. "');";

    $_SESSION['price'] = "SELECT price_per_seat
                          FROM flightlist 
                          WHERE departure = '".$_POST["dep"]. "' AND arriving = '".$_POST["arr"]. "' AND flightlist_id IN (SELECT flightlist_id
                                                                                                                           FROM flight
                                                                                                                           WHERE date(realDepartureDate) = '".$_POST["date"]. "');";
   
    $count = mysql_num_rows($result);
    
    if($count == 0){
  	echo "<script type='text/javascript'> $(function(){ makeBlack(); });</script>";
  }
   else {
   	header("Location: bookingOptions.php");
   }

   }*/

$servername = "localhost";
$username = "root";
$password = "Alina_DB";
$dbname = "airline";

$conn = new mysqli($servername, $username, $password,$dbname);
if($conn ->connect_error){
   die("Connection failed: ".$conn ->connect_error);
}

if(count($_POST) > 0){

   $qrlChAresult = "SELECT flight_name 
                    FROM flight 
                    WHERE realDepartureDate IN (SELECT realDepartureDate
                                                FROM flight 
                                                WHERE date(realDepartureDate) = '".$_POST["date"]. "') 
                                                               AND flightlist_id IN (SELECT flightlist_id 
                                                                                     FROM flightlist WHERE departure = '".$_POST["dep"]. "' AND arriving = '".$_POST["arr"]. "');";
   
   session_start();
   $_SESSION['CAdestination'] = "SELECT departure, arriving
                                FROM flightlist
                                WHERE departure = '".$_POST["dep"]."' AND arriving = '".$_POST["arr"]. "' AND flightlist_id IN (SELECT flightlist_id
                                                                                                                                FROM flight
                                                                                                                                WHERE date(realDepartureDate) = '".$_POST["date"]. "');";

    $_SESSION['CAdepartureDate'] = "SELECT date(realDepartureDate)
                                  FROM flight
                                  WHERE date(realDepartureDate) = '".$_POST["date"]. "' AND flightlist_id IN (SELECT flightlist_id
                                                                                                              FROM flightlist
                                                                                                              WHERE departure = '".$_POST["dep"]. "' AND arriving = '".$_POST["arr"]. "');";

    $_SESSION['CAdepartureTime'] = "SELECT time_format(realDepartureDate,'%H:%i')
                                 FROM flight
                                 WHERE date(realDepartureDate) = '".$_POST["date"]. "' AND flightlist_id IN (SELECT flightlist_id
                                                                                                             FROM flightlist
                                                                                                             WHERE departure = '".$_POST["dep"]. "' AND arriving = '".$_POST["arr"]."');";
    $_SESSION['CAarivalDate'] = "SELECT date(realArivalDate)
                               FROM flight
                               WHERE date(realDepartureDate) = '".$_POST["date"]. "' AND flightlist_id IN (SELECT flightlist_id
                                                                                                           FROM flightlist
                                                                                                           WHERE departure = '".$_POST["dep"]. "' AND arriving = '".$_POST["arr"]. "');";
    
    $_SESSION['CAarivalTime'] = "SELECT time_format(realArivalDate,'%H:%i')
                               FROM flight
                               WHERE date(realDepartureDate) = '".$_POST["date"]. "' AND flightlist_id IN (SELECT flightlist_id
                                                                                                           FROM flightlist
                                                                                                           WHERE departure = '".$_POST["dep"]. "' AND arriving = '".$_POST["arr"]."');";

    $_SESSION['CAduration'] = "SELECT duration
                             FROM flightlist
                             WHERE departure = '".$_POST["dep"]. "' AND arriving = '".$_POST["arr"]. "' AND flightlist_id IN (SELECT flightlist_id
                                                                                                                              FROM flight
                                                                                                                              WHERE date(realDepartureDate) = '".$_POST["date"]. "');";
    $_SESSION['freeSeatsNum'] = "SELECT free_seats_num
                                 FROM flight
                                 WHERE date(realDepartureDate) = '".$_POST["date"]. "' AND flightlist_id IN (SELECT flightlist_id
                                                                                                             FROM flightlist
                                                                                                             WHERE departure = '".$_POST["dep"]. "' AND arriving = '".$_POST["arr"]. "');";

    $_SESSION['price'] = "SELECT price_per_seat
                          FROM flightlist 
                          WHERE departure = '".$_POST["dep"]. "' AND arriving = '".$_POST["arr"]. "' AND flightlist_id IN (SELECT flightlist_id
                                                                                                                           FROM flight
                                                                                                                           WHERE date(realDepartureDate) = '".$_POST["date"]. "');";

   $ChAresult  = $conn -> query($qrlChAresult);
   $count = $ChAresult -> num_rows;

   if($count == 0){
  	    echo "<script type='text/javascript'> $(function(){ makeBlack(); });</script>";
  }
   else {
     	header("Location: flightlistrepresChldAlone.php");
   }

}
$conn->close();

?>