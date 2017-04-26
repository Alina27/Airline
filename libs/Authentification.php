<?php

if(count($_POST) > 0) {
	$conn = mysql_connect("localhost", "root", "Alina_DB");
	mysql_select_db("airline", $conn);

	$result = mysql_query("SELECT * FROM agent WHERE e_mail= '".$_POST["uname"]. "' AND password = '".$_POST["psw"]."'");

	$count = mysql_num_rows($result);

	if($count == 0){
		header("Location: flightlist.php");//here change !!!
			}
	else {
		header("Location: agentPage.php");
        //$lastName = mysql_query("SELECT last_name FROM agent WHERE e_mail= '".$_POST["uname"]. "' AND password = '".$_POST["psw"]."'");
	}
}

?>