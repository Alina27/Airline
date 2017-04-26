<?php

require 'D:\Wamp\wamp\www\Airline\libs\Smarty.class.php';

$smarty = new Smarty();

$smarty -> template_dir = 'D:\Wamp\wamp\www\Airline\libs\templates';
$smarty -> compile_dir = 'D:\Wamp\wamp\www\Airline\libs\templates_c';

$title = "Ticket List";

$smarty -> assign("title", $title);

session_start();
$tktNum = $_SESSION['tktNum'];
$tktDest = $_SESSION['tktDest'];
$tktDate = $_SESSION['tktDate'];
$tktFullName = $_SESSION['tktFullName'];
$tktBDay = $_SESSION['tktBDay'];
$tktEmail = $_SESSION['tktEmail'];
$tktLuggAmt = $_SESSION['tktLuggAmt'];
$infTF = $_SESSION['tktInfTF'];
$seat = $_SESSION['passSeat'];

/*
$childFullName = $_SESSION['tktCld'];
$smarty -> assign("childFullName", $childFullName);

$childBD = $_SESSION['tktCldBD'];
$smarty -> assign("childBD", $childBD);*/

$childFullName = $_SESSION['chldFullName'];
$childBD = $_SESSION['chldBD'];
$childGender = $_SESSION['chldGender'];
$chldSeat = $_SESSION['chldSeat'];
               
$smarty -> assign("childFullName", $childFullName);
$smarty -> assign("childBD", $childBD);
$smarty -> assign("childGender", $childGender);
$smarty -> assign("chldSeat", $chldSeat);

if($infTF === '0'){
	$infantFullName = "Passenger travels without infant";
	$infantBD = "";
	$infantG = "";
	$smarty -> assign("infantFullName", $infantFullName);
	$smarty -> assign("infantBD", $infantBD);
	$smarty -> assign("infantG", $infantG);
}
 else if($infTF === '1'){
	$infantFullName = $_SESSION['tktInfName'];
	//$infantBD = $_SESSION['tktInfDB'];
	$infantBD = $_SESSION['infDB'];
	$infantG  = $_SESSION['tktInfG'];
	$smarty -> assign("infantFullName", $infantFullName);
	$smarty -> assign("infantBD", $infantBD);
	$smarty -> assign("infantG", $infantG);
}

$totalPrice = $_SESSION['tktTotalPrice'];
$smarty -> assign("totalPrice", $totalPrice);


$smarty -> assign("tktNum", $tktNum);
$smarty -> assign("tktDest", $tktDest);
$smarty -> assign("tktDate", $tktDate);
$smarty -> assign("tktFullName", $tktFullName);
$smarty -> assign("tktBDay", $tktBDay);
$smarty -> assign("tktEmail", $tktEmail);
$smarty -> assign("tktLuggAmt", $tktLuggAmt);
$smarty -> assign("seat", $seat);


$smarty -> display("ticketList.tpl");

?>