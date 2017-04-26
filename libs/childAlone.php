<?php

require 'D:\Wamp\wamp\www\Airline\libs\Smarty.class.php';
require 'D:\Wamp\wamp\www\Airline\libs\Seats.php';

$smarty = new Smarty();

$smarty -> template_dir = 'D:\Wamp\wamp\www\Airline\libs\templates';
$smarty -> compile_dir = 'D:\Wamp\wamp\www\Airline\libs\templates_c';

$title = "Child Traveling Alone";
$smarty -> assign("title",$title);


session_start();
$price = $_SESSION["radioPP"];
$smarty -> assign("price", $price);

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
		$flightID = $row2["flight_id"];
	}
  }
  else {
		echo "No results";
 }

 if(count($_POST) > 0) {

 	$firstName = $_POST['fName'];
 	$middleName = $_POST['sName'];
 	$lastName = $_POST['lName'];
    $gender = $_POST['gender'];
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

    $outfName = $_POST['outfName'];
    $outsName = $_POST['outsName'];
    $outLName = $_POST['outlName'];
    $outPhoneNum = $_POST['outPhone'];

    $arrfName = $_POST['arrfName'];
    $arrsName = $_POST['arrsName'];
    $arrLName = $_POST['arrlName'];
    $arrPhoneNum = $_POST['arrPhone'];


    $qrl_1 = "INSERT INTO passenger (first_name, middle_name, last_name, phone, e_mail)
                            VALUES ('$firstName', '$middleName', '$lastName', '$phone', '$email');"; 

    $passInsrt = $conn -> query($qrl_1);

    $sqlPID = "SELECT pass_id
                  FROM passenger
                  WHERE first_name = '".$firstName."' AND last_name = '".$lastName."' AND phone = '".$phone."' AND e_mail = '".$email."' ;";
 
    $res1 = $conn -> query($sqlPID);

       if($res1 -> num_rows > 0){
           while($row1  = $res1 -> fetch_assoc()){
                 $passID = $row1['pass_id'];
           }
       }
       else {
           echo "No results";
       }
         
    $qrlCL = "INSERT INTO child_alone (cl_id, last_name, middle_name, first_name, phone_num, birth_date, 
                                       last_name_d, first_name_d, phone_num_d, last_name_a, first_name_a, phone_num_a, e_mail, gender) 
              VALUES ('$passID', '$lastName', '$middleName', '$firstName', '$phone', '2015-04-02', '$outLName',
                      '$outfName', '$outPhoneNum', '$arrLName', '$arrLName', '$arrPhoneNum', '$gender', '$email')";
    
    $chl_alone = $conn -> query($qrlCL);

    $qrlchltAlnTkt = "INSERT INTO  ticket (price, luggage, flight_id, agent_id, pass_id)
                     VALUES('$price', '$lugg', '$flightID', '2', '$passID');";

    $chltAlnTkt = $conn -> query($qrlchltAlnTkt);


 



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

 $qrfir = "SELECT MAX(ticket_id)+1
         FROM ticket;";

 $fir = $conn -> query($qrfir);

 if($fir -> num_rows > 0){
     while($row31 = $fir -> fetch_assoc()){
         $tic = (INT)$row31['MAX(ticket_id)+1'];
     }
  }
$smarty -> assign("tic",$tic);
$smarty -> assign("destinationChoosen",$destinationChoosen);
$smarty -> assign("timeChoosen",$timeChoosen);

$conn->close();

$smarty -> display("childAlone.tpl");
?>