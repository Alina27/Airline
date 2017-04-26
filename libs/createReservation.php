<?php
require 'D:\Wamp\wamp\www\Airline\libs\Smarty.class.php';
require 'D:\Wamp\wamp\www\Airline\libs\Seats.php';

$smarty = new Smarty();

$smarty -> template_dir = 'D:\Wamp\wamp\www\Airline\libs\templates';
$smarty -> compile_dir = 'D:\Wamp\wamp\www\Airline\libs\templates_c';

$title = "Create Reservation";
$smarty -> assign("title",$title);

session_start();
$price = $_SESSION["pp"];
$smarty -> assign("price",$price);

//Database
$servername = "localhost";
$username = "root";
$password = "Alina_DB";
$dbname = "airline";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn -> connect_error){
	die("Connection failed: ".$conn ->connect_error);
}


$sql = "SELECT departure, arriving
        FROM flightlist 
        WHERE price_per_seat = '".$price."'";

$sql1 = "SELECT time_format(realArivalDate,'%H:%i')
         FROM flight
         WHERE flightlist_id IN (SELECT flightlist_id
        	                    FROM flightlist 
        	                    WHERE price_per_seat = '".$price."');";

$sql2 = "SELECT flight_id
         FROM flight 
         WHERE flightlist_id IN (SELECT flightlist_id
         	                     FROM flightlist
         	                     WHERE price_per_seat = '".$price."');";

$res = $conn->query($sql);
$res1 = $conn->query($sql1);
$res2 = $conn->query($sql2);


if($res -> num_rows > 0){
	while($row = $res->fetch_assoc()){
		$destinationChoosen = $row['departure']." ".$row['arriving'];
	}
  }
  else {
		echo "No results";
	}


if($res1 -> num_rows > 0){
	while($row1 = $res1->fetch_assoc()){
		$timeChoosen = $row1["time_format(realArivalDate,'%H:%i')"];
	}
  }
  else {
		echo "No results";
 }

 if($res2 -> num_rows > 0){
	while($row2 = $res2->fetch_assoc()){
		$flightID = (INT)$row2["flight_id"];
	}
  }
  else {
		echo "No results";
 }
if(count($_POST) > 0){
            $firstName = $_POST['fName'];
            $middleName = $_POST['sName'];
            $lastName = $_POST['lName'];
            $gender = $_POST['adltGen'];
            $dayBrth = $_POST['dayBrth'];
            $monthBrth = $_POST['month'];
            $yearBrth = $_POST['year'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

       if($_POST['lugg'] === 'handOnly'){
          $lugg = '0';
       }
       else if ($_POST['lugg'] === 'oneLugg'){
          $lugg = '1';
          $price+=45;
       }
       else if($_POST['lugg'] === 'twoLugg'){
          $lugg = '2';
          $price+=95;
       }

       $inf = $_POST['inf'];

       $infFN = $_POST['infFName'];
       $infMN = $_POST['infSName'];
       $infLN = $_POST['infLName'];
       $infG = $_POST['infGender'];
       //$infDB =  infant B_Day
       $cld = $_POST['cld'];
       $cldFN = $_POST['childFName'];
       $cldMN = $_POST['childSName'];
       $cldLN = $_POST['childLName'];
       $cldG = $_POST['childGender'];
       $cldLugg = $_POST['childLugg'];


       if($inf === 'No' && $cld === 'No'){
       $qrlpass1 = "INSERT INTO passenger (first_name, middle_name, last_name, phone, e_mail)
                     VALUES ('$firstName', '$middleName', '$lastName', '$phone', '$email');"; 
               
       $tktInsert1 = $conn -> query($qrlpass1);

        //id CAST(sum(number)/count(number) as UNSIGNED) as average,
       
       $sqId = "SELECT pass_id
                FROM passenger
                WHERE first_name = '".$firstName."' AND last_name = '".$lastName."' AND phone = '".$phone."' AND e_mail = '".$email."' ;";

       
       $idRes = $conn->query($sqId);

       if($idRes -> num_rows > 0){
           while($idRow  = $idRes -> fetch_assoc()){
                 $id = (INT)$idRow['pass_id'];
           }
       }
       else {
           echo "No results";
       } 
       // here id 



       $sqlPID = "SELECT pass_id
                  FROM passenger
                  WHERE first_name = '".$firstName."' AND last_name = '".$lastName."' AND phone = '".$phone."' AND e_mail = '".$email."' ;";
 
       $res3 = $conn -> query($sqlPID);


       if($res3 -> num_rows > 0){
           while($row3  = $res3 -> fetch_assoc()){
                 $passID = (INT)$row3['pass_id'];
           }
       }
       else {
           echo "No results";
       }

                               
       $qrladlt1 = "INSERT INTO adult (adult_id, first_name, middle_name, last_name, phone_number, birth_date, gender, e_mail, infant)
                    VALUES ('$passID','$firstName', '$middleName', '$lastName', '$phone', '1990-02-02', '$gender', '$email', '0');";

       $tktInsertadlt1 = $conn -> query($qrladlt1);       
                             
       $qrlAdult2 = "INSERT INTO  ticket (price, luggage, flight_id, agent_id, pass_id)
                     VALUES('$price', '$lugg', '$flightID', '2', '$passID');";

       $tktInsert2 = $conn -> query($qrlAdult2);

       $qTktId = "SELECT ticket_id
                  FROM ticket
                  WHERE pass_id = '".$passID."';";

       $tktRes = $conn -> query($qTktId);

       if($tktRes -> num_rows > 0){
         while($row8 = $tktRes -> fetch_assoc()){
               $tktId = $row8['ticket_id'];
         }
       }

       else {
           echo "No results";
       }


$desFlight = "SELECT seat_id
              FROM seats
              WHERE tkt_id IN(SELECT ticket_id
                              FROM ticket
                              WHERE flight_id = '".$flightID."');";

$qrlSeatsNum = "SELECT free_seats_num
                FROM flight
                WHERE flightlist_id IN (SELECT flightlist_id
                                        FROM flightlist
                                        WHERE price_per_seat = '".$price."');";


$qresDesFlg = $conn -> query($desFlight);
$qSeatsNum = $conn -> query($qrlSeatsNum);


if($qresDesFlg -> num_rows > 0){
  while($row01 = $qresDesFlg -> fetch_assoc()){
    $resDesFlg = $row01['seat_id'];
  }
}

if($qSeatsNum -> num_rows > 0){
  while($row0 = $qSeatsNum -> fetch_assoc()){
       $seatsNum = (int)$row0['free_seats_num'];
  }
}


//flights withought tickets
  $qFreeFlg = "SELECT distinct flight_id
               FROM flight
               WHERE flight_id NOT IN (SELECT flight_id
                                       FROM flight
                                       WHERE flight_id IN (SELECT flight_id
                                                           FROM ticket
                                                            WHERE ticket_id IN (SELECT ticket_id
                                                                                FROM seats)));";
  $freeFlg = $conn -> query($qFreeFlg);

  $freeFlArr = array();
  if($freeFlg -> num_rows > 0){
     while($row10 = $freeFlg -> fetch_assoc()){
           $freeFlArr[] = $row10['flight_id'];
     }
  }

  $qflown = "SELECT SUM(ps) FROM (

                  SELECT COUNT(pass_id) AS ps
                  FROM passenger
                  WHERE pass_id IN (SELECT pass_adlt_id
                                    FROM child) AND pass_id IN (SELECT pass_id
                                                                FROM ticket
                                                                WHERE flight_id = '".$flightID."') 
             UNION ALL

                  SELECT COUNT(pass_id) AS ps
                  FROM passenger
                  WHERE pass_id IN(SELECT pass_id
                                   FROM ticket
                                  WHERE flight_id = '".$flightID."')
) passenger;";


  $flown = $conn -> query($qflown);

  if($flown -> num_rows > 0){
     while($row11 = $flown -> fetch_assoc()){
         $usedFlg = (INT)$row11['SUM(ps)'];
     }
  }

  $arr1 = array();
    
   for($i = 0; $i < 400; $i++){
      $arr1[$i] = $i;
   } 
    
   $arr2 = array("A","B","C","D","E","F");
    
   $arr3 = array();
   for($i = 1; $i < count($arr1); $i++){
       for($j = 0; $j < count($arr2); $j++){
          $arr3[] = $arr1[$i].$arr2[$j];
       }
   }
  
   $b = new Seats();
    
   $seat = "";


   for($k = 0; $k < count($arr3); $k++){
         $b -> enqueue($arr3[$k]);
   }

   //echo "$usedFlg";
   if($usedFlg == "1"){
     $seat = $b -> dequeue();
   }

   else if ($usedFlg != "1"){

   for($j = 0; $j < $usedFlg-1; $j++){
         $b -> dequeue();
   }

   $seat = $b -> dequeue();
}
   $qrlArr1 = "INSERT INTO seats (seat_type, tkt_id)
               VALUES ('$seat', '$tktId');";

   $resArr = $conn -> query($qrlArr1); 

   $qrlSeatsDecrease = "UPDATE flight 
                        SET free_seats_num = free_seats_num - 1
                        WHERE flight_id = '".$flightID."';";

    
    $seatsUpdate = $conn -> query($qrlSeatsDecrease); 
    
  }


  //here

     //if with infant
    else if ($inf === 'Yes' && $cld === 'No'){
      $qrlpass2 = "INSERT INTO passenger (first_name, middle_name, last_name, phone, e_mail)
                   VALUES ('$firstName', '$middleName', '$lastName', '$phone', '$email');"; 

      $tktInsertPass2 = $conn -> query($qrlpass2);

      $sqlPID = "SELECT pass_id
                  FROM passenger
                  WHERE first_name = '".$firstName."' AND last_name = '".$lastName."' AND phone = '".$phone."' AND e_mail = '".$email."' ;";
 
       $res4 = $conn -> query($sqlPID);

       if($res4 -> num_rows > 0){
           while($row4  = $res4 -> fetch_assoc()){
                 $passID = $row4['pass_id'];
           }
       }
       else {
           echo "No results";
       }

      $qrlAdult3 = "INSERT INTO adult (adult_id,first_name, middle_name, last_name, phone_number, birth_date, gender, e_mail, infant, infant_fn, infant_mn, infant_ln, infant_db, infant_g)
                    VALUES ('$passID','$firstName', '$middleName', '$lastName', '$phone', '1990-02-02', '$gender', '$email', '1','$infFN', '$infMN', '$infLN', '2017-01-01','$infG');";
               
      $tktInsert3 = $conn -> query($qrlAdult3);

      $qrlAdult5 = "INSERT INTO  ticket (price, luggage, flight_id, agent_id, pass_id)
                     VALUES('$price', '$lugg', '$flightID', '2', '$passID');";

      $tktInsert5 = $conn -> query($qrlAdult5);

      $qTktId = "SELECT ticket_id
                  FROM ticket
                  WHERE pass_id = '".$passID."';";

       $tktRes = $conn -> query($qTktId);

       if($tktRes -> num_rows > 0){
         while($row8 = $tktRes -> fetch_assoc()){
               $tktId = $row8['ticket_id'];
         }
       }

       else {
           echo "No results";
       }


      $qFreeFlg = "SELECT distinct flight_id
               FROM flight
               WHERE flight_id NOT IN (SELECT flight_id
                                       FROM flight
                                       WHERE flight_id IN (SELECT flight_id
                                                           FROM ticket
                                                            WHERE ticket_id IN (SELECT ticket_id
                                                                                FROM seats)));";
  $freeFlg = $conn -> query($qFreeFlg);

  $freeFlArr = array();
  if($freeFlg -> num_rows > 0){
     while($row10 = $freeFlg -> fetch_assoc()){
           $freeFlArr[] = $row10['flight_id'];
     }
  }
  
  /*
  $qflown = "SELECT COUNT(ticket_id)
             FROM ticket
             WHERE flight_id = '".$flightID."';";*/


$qflown = "SELECT SUM(ps) FROM (

SELECT COUNT(pass_id) AS ps
FROM passenger
WHERE pass_id IN (SELECT pass_adlt_id
                  FROM child) AND pass_id IN (SELECT pass_id
                                              FROM ticket
                                              WHERE flight_id = '".$flightID."') 
UNION ALL

SELECT COUNT(pass_id) AS ps
FROM passenger
WHERE pass_id IN(SELECT pass_id
                 FROM ticket
         WHERE flight_id = '".$flightID."')
) passenger;";
             

  $flown = $conn -> query($qflown);


  if($flown -> num_rows > 0){
     while($row11 = $flown -> fetch_assoc()){
         $usedFlg = (INT)$row11['SUM(ps)'];
     }
  }

  //echo "$usedFlg";
  $arr1 = array();
    
   for($i = 0; $i < 400; $i++){
      $arr1[$i] = $i;
   } 
    
   $arr2 = array("A","B","C","D","E","F");
    
   $arr3 = array();
   for($i = 1; $i < count($arr1); $i++){
       for($j = 0; $j < count($arr2); $j++){
          $arr3[] = $arr1[$i].$arr2[$j];
       }
   }
  
   $b = new Seats();
    
   $seat = "";

   for($k = 0; $k < count($arr3); $k++){
         $b -> enqueue($arr3[$k]);
   }

   if($usedFlg === "1"){
     $seat = "1A";
   }

   else if($usedFlg != "1") {

   for($j = 0; $j < $usedFlg-1; $j++){
         $b -> dequeue();
   }

   $seat = $b -> dequeue();

   $qrlArr1 = "INSERT INTO seats (seat_type, tkt_id)
               VALUES ('$seat', '$tktId');";

   $resArr = $conn -> query($qrlArr1);
    }

    $qrlSeatsDecrease = "UPDATE flight 
                        SET free_seats_num = free_seats_num - 1
                        WHERE flight_id = '".$flightID."';";

    
    $seatsUpdate = $conn -> query($qrlSeatsDecrease);


 }

    else if ($inf === 'No' && $cld === 'Yes'){
      $qrlpass4 = "INSERT INTO passenger (first_name, middle_name, last_name, phone, e_mail)
                   VALUES ('$firstName', '$middleName', '$lastName', '$phone', '$email');"; 

      $tktInsertPass4 = $conn -> query($qrlpass4);

      $sqlPID = "SELECT pass_id
                 FROM passenger
                 WHERE first_name = '".$firstName."' AND last_name = '".$lastName."' AND phone = '".$phone."' AND e_mail = '".$email."' ;";
 
       $res5 = $conn -> query($sqlPID);

       if($res5 -> num_rows > 0){
           while($row5  = $res5 -> fetch_assoc()){
                 $passID = $row5['pass_id'];
           }
       }
       else {
           echo "No results";
       }


       $qrlAdult6 = "INSERT INTO adult (adult_id, first_name, middle_name, last_name, phone_number, birth_date, gender, e_mail, infant)
                     VALUES ('$passID','$firstName', '$middleName', '$lastName', '$phone', '1990-02-02', '$gender', '$email', '0');";
               
       $tktInsert6 = $conn -> query($qrlAdult6);

       $qrlChld = "INSERT INTO child (first_name, middle_name, last_name, gender, birth_date, pass_adlt_id)
                   VALUES ('$cldFN', '$cldMN', '$cldLN', '$cldG','2017-01-01', '$passID');";

       $childInsert = $conn -> query($qrlChld);


       if($cldLugg === 'oneLugg'){
          $upd = "UPDATE ticket
                  SET price = price + 45, luggage = luggage + 1
                  WHERE ticket_id = (SELECT t.ticket_id
                                     FROM (SELECT ticket_id
                                           FROM ticket
                                           WHERE pass_id = '".$passID."') as t);";

       $updateTkt = $conn -> query($upd);
  
     //}
       $qrlAdult7 = "INSERT INTO  ticket (price, luggage, flight_id, agent_id, pass_id)
                     VALUES('$price', '$lugg', '$flightID', '2', '$passID');";

       $tktInsert7 = $conn -> query($qrlAdult7);
        //$tktInsert5 = $conn -> query($qrlAdult5);
   }

       else if($cldLugg === 'twoLugg'){
          $upd = "UPDATE ticket
                  SET price = price + 95, luggage = luggage + 2
                  WHERE ticket_id = (SELECT t.ticket_id
                                     FROM (SELECT ticket_id
                                           FROM ticket
                                           WHERE pass_id = '".$passID."') as t);";

          $updateTkt = $conn -> query($upd);
       }

       else if($cldLugg === 'handOnly'){
         $qrlAdult7L = "INSERT INTO  ticket (price, luggage, flight_id, agent_id, pass_id)
                     VALUES('$price', '$lugg', '$flightID', '2', '$passID');";

         $tktInsert7L = $conn -> query($qrlAdult7L);
       }


       $qTktId = "SELECT ticket_id
                  FROM ticket
                  WHERE pass_id = '".$passID."';";

       $tktRes = $conn -> query($qTktId);

       if($tktRes -> num_rows > 0){
         while($row8 = $tktRes -> fetch_assoc()){
               $tktId = $row8['ticket_id'];
         }
       }

       else {
           echo "No results";
       }


  $qFreeFlg = "SELECT distinct flight_id
               FROM flight
               WHERE flight_id NOT IN (SELECT flight_id
                                       FROM flight
                                       WHERE flight_id IN (SELECT flight_id
                                                           FROM ticket
                                                            WHERE ticket_id IN (SELECT ticket_id
                                                                                FROM seats)));";
  $freeFlg = $conn -> query($qFreeFlg);

  $freeFlArr = array();
  if($freeFlg -> num_rows > 0){
     while($row10 = $freeFlg -> fetch_assoc()){
           $freeFlArr[] = $row10['flight_id'];
     }
  }

  /*
  $qflown = "SELECT COUNT(ticket_id)
             FROM ticket
             WHERE flight_id = '".$flightID."';";*/


  $qflown = "SELECT SUM(ps) FROM (
  
SELECT COUNT(pass_id) AS ps
FROM passenger
WHERE pass_id IN (SELECT pass_adlt_id
                  FROM child) AND pass_id IN (SELECT pass_id
                                              FROM ticket
                                              WHERE flight_id = '".$flightID."') 
UNION ALL

SELECT COUNT(pass_id) AS ps
FROM passenger
WHERE pass_id IN(SELECT pass_id
                 FROM ticket
         WHERE flight_id = '".$flightID."')
) passenger;";

  $flown = $conn -> query($qflown);

  if($flown -> num_rows > 0){
     while($row11 = $flown -> fetch_assoc()){
         $usedFlg = (INT)$row11['SUM(ps)'];
     }
  }

  //echo "$usedFlg";
  $arr1 = array();
    
   for($i = 0; $i < 400; $i++){
      $arr1[$i] = $i;
   } 
    
   $arr2 = array("A","B","C","D","E","F");
    
   $arr3 = array();
   for($i = 1; $i < count($arr1); $i++){
       for($j = 0; $j < count($arr2); $j++){
          $arr3[] = $arr1[$i].$arr2[$j];
       }
   }
  
   $b = new Seats();
    
   $seat = "";
   $seat2 = "";

   for($k = 0; $k < count($arr3); $k++){
         $b -> enqueue($arr3[$k]);
   }

   if($usedFlg === "1"){
      $seat = "1A";
      $seat2 = "1B";
   }

   else if($usedFlg != "1"){

   for($j = 0; $j < $usedFlg-2; $j++){
         $b -> dequeue();
   }

   //$b -> dequeue();
   $seat = $b -> dequeue();
   $seat2 = $b -> dequeue();

  }

   $qrlArr1 = "INSERT INTO seats (seat_type, tkt_id)
               VALUES ('$seat', '$tktId');";

   $resArr = $conn -> query($qrlArr1);

   $qrlArr2 = "INSERT INTO seats (seat_type, tkt_id)
               VALUES ('$seat2', '$tktId');";

   $resArr2 = $conn -> query($qrlArr2);


   $qrlSeatsDecrease = "UPDATE flight 
                        SET free_seats_num = free_seats_num - 2
                        WHERE flight_id = '".$flightID."';";

    
    $seatsUpdate = $conn -> query($qrlSeatsDecrease);
   
            
}

   else if($inf === 'Yes' && $cld === 'Yes') {
    $qrlpass4 = "INSERT INTO passenger (first_name, middle_name, last_name, phone, e_mail)
                   VALUES ('$firstName', '$middleName', '$lastName', '$phone', '$email');"; 

      $tktInsertPass4 = $conn -> query($qrlpass4);

      $sqlPID = "SELECT pass_id
                 FROM passenger
                 WHERE first_name = '".$firstName."' AND last_name = '".$lastName."' AND phone = '".$phone."' AND e_mail = '".$email."' ;";
 
       $res8 = $conn -> query($sqlPID);

       if($res8 -> num_rows > 0){
           while($row8  = $res8 -> fetch_assoc()){
                 $passID = $row8['pass_id'];
           }
       }
       else {
           echo "No results";
       }


     $qrlAdult8 = "INSERT INTO adult (first_name, middle_name, last_name, phone_number, birth_date, gender, e_mail, infant, infant_fn, infant_mn, infant_ln, infant_db, infant_g)
                     VALUES ('$firstName', '$middleName', '$lastName', '$phone', '1990-02-02', '$gender', '$email', '1','$infFN', '$infMN', '$infLN', '2017-01-01','$infG');";
               
     $tktInsert8 = $conn -> query($qrlAdult8);


     $qrlAdult8 = "INSERT INTO  ticket (price, luggage, flight_id, agent_id, pass_id)
                     VALUES('$price', '$lugg', '$flightID', '2', '$passID');";

     $tktInsert8 = $conn -> query($qrlAdult8);

     $qrlChld = "INSERT INTO child (first_name, middle_name, last_name, gender, birth_date, pass_adlt_id)
                   VALUES ('$cldFN', '$cldMN', '$cldLN', '$cldG','2017-01-01', '$passID');";

     $childInsert = $conn -> query($qrlChld);
      
       if($cldLugg === 'oneLugg'){
          $upd = "UPDATE ticket
                  SET price = price + 45, luggage = luggage + 1
                  WHERE ticket_id = (SELECT t.ticket_id
                                     FROM (SELECT ticket_id
                                           FROM ticket
                                           WHERE pass_id = '".$passID."') as t);";

          $updateTkt = $conn -> query($upd);
       }

       else if($cldLugg === 'twoLugg'){
          $upd = "UPDATE ticket
                  SET price = price + 95, luggage = luggage + 2
                  WHERE ticket_id = (SELECT t.ticket_id
                                     FROM (SELECT ticket_id
                                           FROM ticket
                                           WHERE pass_id = '".$passID."') as t);";

          $updateTkt = $conn -> query($upd);
        }



        $qTktId = "SELECT ticket_id
                  FROM ticket
                  WHERE pass_id = '".$passID."';";

       $tktRes = $conn -> query($qTktId);

       if($tktRes -> num_rows > 0){
         while($row8 = $tktRes -> fetch_assoc()){
               $tktId = $row8['ticket_id'];
         }
       }

       else {
           echo "No results";
       }


  $qFreeFlg = "SELECT distinct flight_id
               FROM flight
               WHERE flight_id NOT IN (SELECT flight_id
                                       FROM flight
                                       WHERE flight_id IN (SELECT flight_id
                                                           FROM ticket
                                                            WHERE ticket_id IN (SELECT ticket_id
                                                                                FROM seats)));";
  $freeFlg = $conn -> query($qFreeFlg);

  $freeFlArr = array();
  if($freeFlg -> num_rows > 0){
     while($row10 = $freeFlg -> fetch_assoc()){
           $freeFlArr[] = $row10['flight_id'];
     }
  }

  /*
  $qflown = "SELECT COUNT(ticket_id)
             FROM ticket
             WHERE flight_id = '".$flightID."';";*/


  $qflown = "SELECT SUM(ps) FROM (
  
SELECT COUNT(pass_id) AS ps
FROM passenger
WHERE pass_id IN (SELECT pass_adlt_id
                  FROM child) AND pass_id IN (SELECT pass_id
                                              FROM ticket
                                              WHERE flight_id = '".$flightID."') 
UNION ALL

SELECT COUNT(pass_id) AS ps
FROM passenger
WHERE pass_id IN(SELECT pass_id
                 FROM ticket
         WHERE flight_id = '".$flightID."')
) passenger;";

  $flown = $conn -> query($qflown);

  if($flown -> num_rows > 0){
     while($row11 = $flown -> fetch_assoc()){
         $usedFlg = (INT)$row11['SUM(ps)'];
     }
  }

  //echo "$usedFlg";
  $arr1 = array();
    
   for($i = 0; $i < 400; $i++){
      $arr1[$i] = $i;
   } 
    
   $arr2 = array("A","B","C","D","E","F");
    
   $arr3 = array();
   for($i = 1; $i < count($arr1); $i++){
       for($j = 0; $j < count($arr2); $j++){
          $arr3[] = $arr1[$i].$arr2[$j];
       }
   }
  
   $b = new Seats();
    
   $seat = "";
   $seat2 = "";

   for($k = 0; $k < count($arr3); $k++){
         $b -> enqueue($arr3[$k]);
   }

   if($usedFlg === "1"){
      $seat = "1A";
      $seat2 = "1B";
   }

   else if($usedFlg != "1"){

   for($j = 0; $j < $usedFlg-2; $j++){
         $b -> dequeue();
   }

   //$b -> dequeue();
   $seat = $b -> dequeue();
   $seat2 = $b -> dequeue();

  }

   $qrlArr1 = "INSERT INTO seats (seat_type, tkt_id)
               VALUES ('$seat', '$tktId');";

   $resArr = $conn -> query($qrlArr1);

   $qrlArr2 = "INSERT INTO seats (seat_type, tkt_id)
               VALUES ('$seat2', '$tktId');";

   $resArr2 = $conn -> query($qrlArr2);

   $qrlSeatsDecrease = "UPDATE flight 
                        SET free_seats_num = free_seats_num - 2
                        WHERE flight_id = '".$flightID."';";

    
    $seatsUpdate = $conn -> query($qrlSeatsDecrease);

        
   }
}

//session_start();

$smarty -> assign("destinationChoosen",$destinationChoosen);
$smarty -> assign("timeChoosen",$timeChoosen);
//$smarty -> assign("tktDisplay",$tktDisplay); $tktNumDisp

$conn->close();


$smarty -> display("createReservation.tpl");
?>