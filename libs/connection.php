<?php
   error_reporting(E_ALL & ~E_DEPRECATED);
   if(count($_POST) > 0){

     $conn = mysql_connect("localhost", "root", "Alina_DB");
     mysql_select_db("airline", $conn);

     //$from = $_POST["dep"];
     //$to = $_POST["arr"];
    
    /* 
    $result = mysql_query("SELECT flight_name 
                           FROM flight 
                           WHERE flightlist_id IN (SELECT flightlist_id 
                                                   FROM flightlist WHERE departure = '".$_POST["dep"]. "' AND arriving = '".$_POST["arr"]. "');");*/
    $result = mysql_query("SELECT flight_name 
                           FROM flight 
                           WHERE free_seats_num > '0' AND realDepartureDate IN (SELECT realDepartureDate
                                                                                FROM flight 
                                                                                WHERE date(realDepartureDate) = '".$_POST["date"]. "') 
                                                                                 AND flightlist_id IN (SELECT flightlist_id 
                                                                                                       FROM flightlist WHERE departure = '".$_POST["dep"]. "' AND arriving = '".$_POST["arr"]. "');");

    
    session_start();
    $_SESSION['destination'] = "SELECT departure, arriving
                                FROM flightlist
                                WHERE departure = '".$_POST["dep"]."' AND arriving = '".$_POST["arr"]. "' 
                                                  AND flightlist_id IN (SELECT flightlist_id
                                                                        FROM flight
                                                                        WHERE date(realDepartureDate) = '".$_POST["date"]. "')
                                GROUP BY price_per_seat;";
    
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
                                                                                                                              WHERE date(realDepartureDate) = '".$_POST["date"]. "')
GROUP BY price_per_seat;";

    $_SESSION['freeSeatsNum'] = "SELECT free_seats_num
                                 FROM flight
                                 WHERE date(realDepartureDate) = '".$_POST["date"]. "' AND flightlist_id IN (SELECT flightlist_id
                                                                                                             FROM flightlist
                                                                                                             WHERE departure = '".$_POST["dep"]. "' AND arriving = '".$_POST["arr"]. "');";

    $_SESSION['price'] = "SELECT price_per_seat
                          FROM flightlist 
                          WHERE departure = '".$_POST["dep"]. "' AND arriving = '".$_POST["arr"]. "' 
                                               AND flightlist_id IN (SELECT flightlist_id
                                                                     FROM flight
                                                                                                                           WHERE date(realDepartureDate) = '".$_POST["date"]. "')
GROUP BY price_per_seat;";

    $count = mysql_num_rows($result);
    
     if($count == 0){
          //header("Location: menu.php");
     	echo "<script type='text/javascript'> $(function(){ makeBlack(); });</script>";
     }
     else {
          header("Location: flightlistrepres.php");
     }

   }

?>