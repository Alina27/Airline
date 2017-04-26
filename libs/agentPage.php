<?php

error_reporting(E_ALL & ~E_DEPRECATED);
require 'D:\Wamp\wamp\www\Airline\libs\Smarty.class.php';
//require 'D:\Wamp\wamp\www\Airline\libs\loginForm.php';
//include_once 'D:\Wamp\wamp\www\Airline\libs\loginForm.php';
$smarty = new Smarty();
//$agg = new AgentDAO("localhost", "root", "Alina_DB","airline");

$smarty -> template_dir = 'D:\Wamp\wamp\www\Airline\libs\templates';
$smarty -> compile_dir = 'D:\Wamp\wamp\www\Airline\libs\templates_c';

$title = "Agent Page";
$smarty -> assign("title",$title);

$servername = "localhost";
$username = "root";
$password = "Alina_DB";
$dbname = "airline";

$conn = new mysqli($servername, $username, $password,$dbname);

if($conn ->connect_error){
   die("Connection failed: ".$conn ->connect_error);
}

session_start();
$sql = $_SESSION['name'];
$sql_id = $_SESSION['id'];
$sql_phone = $_SESSION['phoneNum'];
$sql_email = $_SESSION['email'];
$sql_skype = $_SESSION['skypeID'];


$result = $conn->query($sql);


if($result -> num_rows > 0){
	while($row = $result->fetch_assoc()){
		$lastName = $row['last_name']." ".$row['first_name'];
	}
  }
  else {
		echo "No results";
	}

$resultID = $conn->query($sql_id);
if($resultID -> num_rows > 0){
	while($row2 = $resultID->fetch_assoc()){
		  $id = $row2['agent_id'];
	}
  }
  else {
		echo "No results";
	};

$resultPhone = $conn->query($sql_phone);
if($resultPhone -> num_rows > 0){
	while($row3 = $resultPhone->fetch_assoc()){
		  $phoneNum = $row3['phone_num'];
	}
  }
  else {
		echo "No results";
	};



$resultEmail = $conn->query($sql_email);
if($resultEmail -> num_rows > 0){
	while($row4 = $resultEmail->fetch_assoc()){
		  $email = $row4['e_mail'];
	}
  }
  else {
		echo "No results";
	};

$resultSkypeID = $conn->query($sql_skype);
if($resultSkypeID -> num_rows > 0){
	while($row5 = $resultSkypeID->fetch_assoc()){
		  $skypeID = $row5['skype_id'];
	}
  }
  else {
		echo "No results";
	};

if(isset($_POST['search'])){
if(count($_POST) > 0){

	$sqlFind = "SELECT ticket_id
	            FROM ticket
	            WHERE ticket_id = '".$_POST['search']."'";
   /*
	$sqlDest = "SELECT departure, arriving 
                FROM flightlist
                WHERE flightlist_id IN (SELECT flightlist_id
                                        FROM flight
                                        WHERE flight_id IN (SELECT flight_id
                                                            FROM ticket
											                WHERE ticket_id = '".$_POST['search']."'));";*/

   $sqlDest = "SELECT departure, arriving
FROM ((flightlist INNER JOIN flight
ON flight.flight_id = flightlist.flightlist_id)
INNER JOIN ticket 
ON ticket.flight_id = flightlist.flightlist_id)
WHERE ticket_id = '".$_POST['search']."';";

    $sqlDate = "SELECT date_format(realDepartureDate, '%M %Y, %d')
                FROM flight
                WHERE flight_id IN (SELECT flight_id
                                    FROM ticket
					                WHERE ticket_id = '".$_POST['search']."');";
    /* 
    $sqlFullName = "SELECT first_name, middle_name, last_name
                    FROM adult
                    WHERE pass_id IN (SELECT pass_id
                    	              FROM ticket
                    	              WHERE ticket_id = '".$_POST['search']."');"; */

    $sqlFullName = "SELECT first_name, middle_name, last_name
                    FROM passenger
                    WHERE pass_id IN (SELECT pass_id
                    	              FROM ticket 
                    	              WHERE ticket_id = '".$_POST['search']."');";
    /*
    $sqlBDay = "SELECT birth_date
                FROM adult
                WHERE pass_id IN (SELECT pass_id
                    	          FROM ticket
                    	           WHERE ticket_id = '".$_POST['search']."');";*/

    $sqlBDay = "SELECT birth_date
                FROM adult 
                WHERE adult_id NOT IN(SELECT pass_id
                                      FROM passenger
							                        WHERE pass_id NOT iN (SELECT pass_id
                                                            FROM ticket
                                                            WHERE ticket_id = '".$_POST['search']."'));";
    
    $sqlemail = "SELECT e_mail
                 FROM passenger
                 WHERE pass_id IN (SELECT pass_id
                    	           FROM ticket
                    	           WHERE ticket_id = '".$_POST['search']."');";
   // $sqlemail = "";

    $sqlLuggAmt = "SELECT luggage
                   FROM ticket
                   WHERE ticket_id = '".$_POST['search']."'";
    /*
    $sqlInfTF = "SELECT infant
                 FROM adult
                 WHERE pass_id IN (SELECT pass_id
                    	           FROM ticket
                    	           WHERE ticket_id = '".$_POST['search']."');";*/

    $sqlInfTF = "SELECT infant
                 FROM adult
                 WHERE adult_id IN (SELECT pass_id
                    	           FROM ticket
                    	           WHERE ticket_id = '".$_POST['search']."');";


    $sqlInfName = "SELECT infant_fn, infant_mn, infant_ln 
                   FROM adult
                   WHERE adult_id IN (SELECT pass_id
                    	             FROM ticket
                    	             WHERE ticket_id = '".$_POST['search']."');";

    $sqlInfName = "SELECT infant_fn, infant_mn, infant_ln 
                   FROM adult
                   WHERE adult_id IN (SELECT pass_id
                    	             FROM ticket
                    	             WHERE ticket_id = '".$_POST['search']."');";
   
    $sqlInfD =   "SELECT infant_db 
                  FROM adult
                  WHERE adult_id IN (SELECT pass_id
                    	            FROM ticket
                    	            WHERE ticket_id = '".$_POST['search']."');";

    $sqlInfG = "SELECT infant_g 
                FROM adult
                WHERE adult_id IN (SELECT pass_id
                    	          FROM ticket
                    	          WHERE ticket_id = '".$_POST['search']."');";

    $sqlChl = "SELECT first_name,middle_name,last_name
               FROM child
               WHERE pass_id IN (SELECT pass_id
                                 FROM ticket AS t
                                 WHERE t.ticket_id = '".$_POST['search']."');";

   $sqlChlBD = "SELECT birth_date
                FROM child
                WHERE pass_id IN (SELECT pass_id
                                  FROM ticket AS t
                                  WHERE t.ticket_id = '".$_POST['search']."');";

//Child Info

   //1) child exist

    $qslChlExist = "SELECT * 
                    FROM child
                    WHERE pass_adlt_id IN (SELECT pass_id
                                           FROM ticket 
                                            WHERE ticket_id = '".$_POST['search']."');";
  // child full name

    $qslChldFullName = "SELECT last_name, middle_name, first_name
                        FROM child
                        WHERE pass_adlt_id IN (SELECT pass_id
                                               FROM ticket
                                               WHERE ticket_id = '".$_POST['search']."');";

  // child BD

    $qslChldDB = "SELECT birth_date
                  FROM child
                  WHERE pass_adlt_id IN (SELECT pass_id
                                         FROM ticket
                                         WHERE ticket_id = '".$_POST['search']."');";
  

    $qslChldGender = "SELECT gender
                      FROM child
                      WHERE pass_adlt_id IN (SELECT pass_id
                                             FROM ticket
                                             WHERE ticket_id = '".$_POST['search']."');";
    
    $sqlTotalPrice = "SELECT price
                      FROM ticket
                      WHERE ticket_id = '".$_POST['search']."'";

    $sqlPassSear = "SELECT seat_type
                    FROM seats
                    WHERE tkt_id = '".$_POST['search']."';";


	$findRess = $conn -> query($sqlFind);
	$findDest = $conn -> query($sqlDest);
	$findDate = $conn -> query($sqlDate);
	$findFullName = $conn -> query($sqlFullName);
	$findBDay = $conn -> query($sqlBDay);
	$findEmail = $conn -> query($sqlemail);
	$findLuggAmt = $conn -> query($sqlLuggAmt);
	$findInfTF = $conn -> query($sqlInfTF);
	$findInfName = $conn -> query($sqlInfName);
	$findInfDB = $conn -> query($sqlInfD);
	$findInfG = $conn -> query($sqlInfG);

	//$findChl = $conn -> query($sqlChl);
    $childExs = $conn -> query($qslChlExist);
    $childFullName = $conn -> query($qslChldFullName);
    $childDB = $conn -> query($qslChldDB);
    $childGender = $conn -> query($qslChldGender);

	$findChlBD = $conn -> query($sqlChlBD);
	$totalPrice = $conn -> query($sqlTotalPrice);

	$findSeat = $conn -> query($sqlPassSear);
	$findSecondSeat = $conn -> query($sqlPassSear);

	if($findRess -> num_rows > 0){

      while($row1 = $findRess -> fetch_assoc()){
		 $_SESSION['tktNum'] = $row1['ticket_id']; 
	  }

    while($row2 = $findDest -> fetch_assoc()){
		 $_SESSION['tktDest'] = $row2['departure']." - ".$row2['arriving'];
	  }

	  while($row3 = $findDate -> fetch_assoc()){
		 $_SESSION['tktDate'] = $row3["date_format(realDepartureDate, '%M %Y, %d')"];
	  }

	  while($row4 = $findFullName -> fetch_assoc()){
		 $_SESSION['tktFullName'] = $row4["first_name"]." ".$row4["middle_name"]." ".$row4["last_name"];
	  }

	  while($row5 = $findBDay -> fetch_assoc()){
		 $_SESSION['tktBDay'] = $row5["birth_date"];
	  }

	  while($row6 = $findEmail -> fetch_assoc()){
		 $_SESSION['tktEmail'] = $row6["e_mail"];
	  }

	  while($row7 = $findLuggAmt -> fetch_assoc()){
		 $_SESSION['tktLuggAmt'] = $row7["luggage"];
	  }

	  while($row8 = $findInfTF -> fetch_assoc()){
		 $_SESSION['tktInfTF'] = $row8["infant"];
	  }

	  while($row9 = $findInfName -> fetch_assoc()){
		 $_SESSION['tktInfName'] = $row9["infant_fn"]." ".$row9["infant_mn"]." ".$row9["infant_ln"];
	  }

	  while($row10 = $findInfG -> fetch_assoc()){
		 $_SESSION['tktInfG'] = $row10["infant_g"];
	  }

	  while($row14 = $findSeat -> fetch_assoc()){
	  	 $_SESSION['passSeat'] = $row14['seat_type'];
	  }

	  while($row15 = $findInfDB -> fetch_assoc()){
	  	 $_SESSION['infDB'] = $row15['infant_db'];
	  }
       /*
      if($findChl -> num_rows == 0){
      	$_SESSION['tktCld'] = "Passenger flies withought children";
      }
      else {
           while($row11 = $findChl -> fetch_assoc()){
		         $_SESSION['tktCld'] = $row11["first_name"]." ".$row11["middle_name"]." ".$row11["last_name"];
	       }
	} */

	if($childExs -> num_rows == 0){
		//$_SESSION['tktCld'] = "Passenger flies withought children";
		$_SESSION['chldFullName'] = "Passenger travels without children";
		$_SESSION['chldBD'] = "";
        $_SESSION['chldGender'] = "";
        $_SESSION['chldSeat'] = "";
	}
	else if($childExs -> num_rows > 0){
		while($row16 = $childFullName -> fetch_assoc()){
			$_SESSION['chldFullName'] = $row16['last_name']." ".$row16['middle_name']." ".$row16['first_name'];
		}
		while($row17 = $childDB -> fetch_assoc()){
			$_SESSION['chldBD'] = $row17['birth_date'];
		}
		while($row18 = $childGender -> fetch_assoc()){
			$_SESSION['chldGender'] = $row18['gender'];
		}
		
		$arr123 = array();
		while($row19 = $findSecondSeat -> fetch_assoc()){
            $arr123[] = $row19['seat_type'];
			$_SESSION['chldSeat'] = reset($arr123);
 		}
	}

	  while($row13 = $totalPrice -> fetch_assoc()){
		 $_SESSION['tktTotalPrice'] = $row13["price"];
	  }

		header("Location: ticketList.php");
	}
	else {
		header("Location: flightstatus.php");
	}
}
}

else if(isset($_POST['searchAM'])){
  if(count($_POST) > 0){
//childAlone Info
  $sqlTktNumberAM = "SELECT ticket_id
                     FROM ticket
                     WHERE ticket_id = '".$_POST['searchAM']."';";


  $sqlTktDestAM = "SELECT departure, arriving 
                   FROM flightlist
                   WHERE flightlist_id IN (SELECT flightlist_id
                                           FROM flight
                                           WHERE flight_id IN (SELECT flight_id
                                                               FROM ticket
                                                               WHERE ticket_id = '".$_POST['searchAM']."'));";      

  $sqlDateAM = "SELECT date_format(realDepartureDate, '%M %Y, %d')
                FROM flight
                WHERE flight_id IN (SELECT flight_id
                                    FROM ticket
                                    WHERE ticket_id = '".$_POST['searchAM']."');";       




  $sqlFullNameAM = "SELECT first_name, middle_name, last_name
                    FROM passenger
                    WHERE pass_id IN (SELECT pass_id
                                      FROM ticket 
                                      WHERE ticket_id = '".$_POST['searchAM']."');";

  $sqlBDayAM = "SELECT birth_date
                FROM child_alone 
                WHERE cl_id IN(SELECT pass_id
                               FROM passenger
                               WHERE pass_id iN (SELECT pass_id
                                                 FROM ticket
                                                 WHERE ticket_id = '".$_POST['searchAM']."'));";
    
  $sqlemailAM =  "SELECT e_mail
                  FROM passenger
                  WHERE pass_id IN (SELECT pass_id
                                    FROM ticket
                                    WHERE ticket_id = '".$_POST['searchAM']."');";

  $sqlphoneAM =  "SELECT phone
                  FROM passenger
                  WHERE pass_id IN (SELECT pass_id
                                    FROM ticket
                                    WHERE ticket_id = '".$_POST['searchAM']."');";
   

  $sqlLuggAmt = "SELECT luggage
                 FROM ticket
                 WHERE ticket_id = '".$_POST['searchAM']."'";


  $sqlAMSeat = "SELECT seat_type
                FROM seats
                 WHERE tkt_id = '".$_POST['searchAM']."';";


  $sqlFNDepAM = "SELECT last_name_d, first_name_d
                 FROM child_alone 
                 WHERE cl_id IN(SELECT pass_id
                                FROM passenger
                                WHERE pass_id iN (SELECT pass_id
                                                  FROM ticket
                                                  WHERE ticket_id = '".$_POST['searchAM']."'));";

 $sqlPhoneDepAM = "SELECT phone_num_d
                   FROM child_alone 
                   WHERE cl_id IN(SELECT pass_id
                                  FROM passenger
                                  WHERE pass_id iN (SELECT pass_id
                                                    FROM ticket
                                                    WHERE ticket_id = '".$_POST['searchAM']."'));";


 $sqlFNArrAM = "SELECT last_name_a, first_name_a
                 FROM child_alone 
                 WHERE cl_id IN(SELECT pass_id
                                FROM passenger
                                WHERE pass_id iN (SELECT pass_id
                                                  FROM ticket
                                                  WHERE ticket_id = '".$_POST['searchAM']."'));";

 $sqlPhoneArrAM = "SELECT phone_num_a
                   FROM child_alone 
                   WHERE cl_id IN(SELECT pass_id
                                  FROM passenger
                                  WHERE pass_id iN (SELECT pass_id
                                                    FROM ticket
                                                    WHERE ticket_id = '".$_POST['searchAM']."'));";

 $sqlTotalPriceAM = "SELECT price
                     FROM ticket
                     WHERE ticket_id = '".$_POST['searchAM']."'";


  
  $resTktNumberAM = $conn -> query($sqlTktNumberAM);
  $resTktDestAM = $conn -> query($sqlTktDestAM);
  $resTktDateAM = $conn -> query($sqlDateAM);

  $resTktFullNameAM = $conn -> query($sqlFullNameAM);
  $resTktBDAM = $conn -> query($sqlBDayAM);
  $resTktEmailAM = $conn -> query($sqlemailAM);
  $resTktPhoneAM = $conn -> query($sqlphoneAM);
  $resTktLuggAM = $conn -> query($sqlLuggAmt);
  $resTktSeatAM = $conn -> query($sqlAMSeat);

  $resTktFullNameDepAM = $conn -> query($sqlFNDepAM);
  $resTktPhoneDepAM = $conn -> query($sqlPhoneDepAM);

  $resTktFullNameArrAM = $conn -> query($sqlFNArrAM);
  $resTktPhoneArrAM = $conn -> query($sqlPhoneArrAM);

  $resTktTotalPriceAM = $conn -> query($sqlTotalPriceAM);

  if($resTktNumberAM -> num_rows > 0){
      while($row20 = $resTktNumberAM -> fetch_assoc()){
         $_SESSION['tktNumAM'] = $row20["ticket_id"];
      }

      while($row21 = $resTktDestAM -> fetch_assoc()){
         $_SESSION['tktDestAM'] = $row21["departure"]." - ".$row21["arriving"];
      }
      
      while($row22 = $resTktDateAM -> fetch_assoc()){
         $_SESSION['tktDateAM'] = $row22["date_format(realDepartureDate, '%M %Y, %d')"];
      }

      while($row23 = $resTktFullNameAM -> fetch_assoc()){
         $_SESSION['tktFullNAmeAM'] = $row23["first_name"]." ".$row23["middle_name"]." ".$row23["last_name"];
      }

      while($row24 = $resTktBDAM -> fetch_assoc()){
         $_SESSION['tktBDAM'] = $row24["birth_date"];
      }

      while($row25 = $resTktEmailAM -> fetch_assoc()){
         $_SESSION['tktEmailAM'] = $row25["e_mail"];
      }

      while($row26 = $resTktPhoneAM -> fetch_assoc()){
         $_SESSION['tktPhoneAM'] = $row26["phone"];
      }

      while($row27 = $resTktLuggAM -> fetch_assoc()){
         $_SESSION['tktLuggAM'] = $row27["luggage"];
      }

      while($row28 = $resTktSeatAM -> fetch_assoc()){
         $_SESSION['tktSeatAM'] = $row28["seat_type"];
      }

      while($row29 = $resTktFullNameDepAM -> fetch_assoc()){
         $_SESSION['tktFullNameDepAM'] = $row29["last_name_d"]." ".$row29["first_name_d"];
      }

      while($row30 = $resTktPhoneDepAM -> fetch_assoc()){
         $_SESSION['tktPhoneDepAM'] = $row30["phone_num_d"];
      }

      while($row31 = $resTktFullNameArrAM -> fetch_assoc()){
         $_SESSION['tktFullNameArrAM'] = $row31["last_name_a"]." ".$row31["first_name_a"];
      }

      while($row32 = $resTktPhoneArrAM -> fetch_assoc()){
         $_SESSION['tktPhoneArrAM'] = $row32["phone_num_a"];
      }

      while($row33 = $resTktTotalPriceAM -> fetch_assoc()){
         $_SESSION['tktPriceAM'] = $row33["price"];
      }

  }

  header("Location: ticketListAM.php");
  }
  else {
    header("Location: flightstatus.php");
  } 

 }

$conn->close();

$smarty -> assign("lastName",$lastName);
$smarty -> assign("id",$id);
$smarty -> assign("phoneNum",$phoneNum);
$smarty -> assign("email",$email);
$smarty -> assign("skypeID",$skypeID);

// Database
/*
mysql_connect("localhost", "root","Alina_DB");
mysql_select_db("airline");
//$connection = mysqli_connect('localhost', 'root', 'Alina_DB', 'airline');

$sql_query = "SELECT last_name FROM agent WHERE e_mail = 'harperlee@gmail.com' AND password = 'finch123'";
//$sql_query  = $connection, "SELECT last_name FROM agent WHERE e_mail = 'annalee@gmail.com' AND password = 'lee123'";
$result_set = mysql_query($sql_query);

session_start();
$result_set2 = mysql_query($_SESSION['name']) or die(mysql_error());


if(mysql_num_rows($result_set) > 0) {

   while($row = mysql_fetch_row($result_set))
         $id = $row[0];

}

if(mysql_num_rows($result_set2) > 0) {

   while($row2 = mysql_fetch_row($result_set2))
         $phone = $row2[0];

}
 */


$smarty -> display("agentPage.tpl");

?>


