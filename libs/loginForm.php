<?php
require 'D:\Wamp\wamp\www\Airline\libs\Smarty.class.php';

$smarty = new Smarty();

$smarty -> template_dir = 'D:\Wamp\wamp\www\Airline\libs\templates';
$smarty -> compile_dir = 'D:\Wamp\wamp\www\Airline\libs\templates_c';

$title = "Agent LogIn Page";
$smarty -> assign("title",$title);


 //$_SESSION['id'] = 0;
// Database
if(count($_POST) > 0) {
	$conn = mysql_connect("localhost", "root", "Alina_DB");
	mysql_select_db("airline", $conn);

	$result = mysql_query("SELECT * FROM agent WHERE e_mail= '".$_POST["uname"]. "' AND password = '".$_POST["psw"]."'");
	session_start();
	$_SESSION['name'] = "SELECT last_name, first_name FROM agent WHERE e_mail= '".$_POST["uname"]. "' AND password = '".$_POST["psw"]."'";
    $_SESSION['id'] = "SELECT agent_id FROM agent WHERE e_mail= '".$_POST["uname"]. "' AND password = '".$_POST["psw"]."'";
    $_SESSION['phoneNum'] = "SELECT phone_num FROM agent WHERE e_mail= '".$_POST["uname"]. "' AND password = '".$_POST["psw"]."'";
    $_SESSION['email'] = "SELECT e_mail FROM agent WHERE e_mail= '".$_POST["uname"]. "' AND password = '".$_POST["psw"]."'";
    $_SESSION['skypeID'] = "SELECT skype_id FROM agent WHERE e_mail= '".$_POST["uname"]. "' AND password = '".$_POST["psw"]."'";

	//$_SESSION['id'] = mysql_query("SELECT agent_id FROM agent WHERE e_mail= '".$_POST["uname"]. "' AND password = '".$_POST["psw"]."'");


	$count = mysql_num_rows($result);

	if($count == 0){
		header("Location: flightlist.php");//here change !!!
			}
	else {
		header("Location: agentPage.php");
	}
}

$smarty -> display("loginForm.tpl");
?>