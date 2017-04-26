<?php

require 'D:\Wamp\wamp\www\Airline\libs\Smarty.class.php';

$smarty = new Smarty();

$smarty -> template_dir = 'D:\Wamp\wamp\www\Airline\libs\templates';
$smarty -> compile_dir = 'D:\Wamp\wamp\www\Airline\libs\templates_c';

$title = "Ticket List";

$smarty -> assign("title", $title);

session_start();
$tktNum = $_SESSION['tktNumAM'];
$tktDest = $_SESSION['tktDestAM'];
$tktDate = $_SESSION['tktDateAM'];
$tktFullName = $_SESSION['tktFullNAmeAM'];
$tktBDay = $_SESSION['tktBDAM'];
$tktPhone = $_SESSION['tktPhoneAM'];
$tktEmail = $_SESSION['tktEmailAM'];
$tktLuggAmt = $_SESSION['tktLuggAM'];
$seat = $_SESSION['tktSeatAM'];

$tktFullNameDepAM = $_SESSION['tktFullNameDepAM'];
$tktPhoneDepAM = $_SESSION['tktPhoneDepAM'];

$tktFullNameArrAM = $_SESSION['tktFullNameArrAM'];
$tktPhoneArrAM = $_SESSION['tktPhoneArrAM'];

$totPrs = $_SESSION['tktPriceAM'];


$smarty -> assign("tktNum", $tktNum);
$smarty -> assign("tktDest", $tktDest);
$smarty -> assign("tktDate", $tktDate);

$smarty -> assign("tktFullName", $tktFullName);
$smarty -> assign("tktBDay", $tktBDay);
$smarty -> assign("tktPhone", $tktPhone);
$smarty -> assign("tktEmail", $tktEmail);
$smarty -> assign("tktLuggAmt", $tktLuggAmt);
$smarty -> assign("seat", $seat);

$smarty -> assign("tktFullNameDepAM", $tktFullNameDepAM);
$smarty -> assign("tktPhoneDepAM", $tktPhoneDepAM);

$smarty -> assign("tktFullNameArrAM", $tktFullNameArrAM);
$smarty -> assign("tktPhoneArrAM", $tktPhoneArrAM);

$smarty -> assign("totPrs", $totPrs);

$smarty -> display("ticketListAM.tpl");


?>