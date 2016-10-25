<?php

$browser =  $_SERVER['HTTP_USER_AGENT'] ;

$index = 0 ; 
$today = date("F j, Y, g:i a");    
$ip = !empty($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];

print_r($browser) ; 
if(isset($_GET['i']))
{
    $index = $_GET['i'] ; 
    
}

$servername = "mysql4.000webhost.com";
$username = "a6582074_a";
$password = "123123qwe";

// Create connection
$conn = new mysqli($servername, $username, $password , "a6582074_a");

$query = "INSERT INTO `visits` (`UserIp` , `Date` ,`Reference` , `Device`) VALUES ('$ip' , '$today' , '$index' , '$browser')" ; 

$conn->query($query) ; 

$conn->close() ; 

header("Location:index.html") ; 

exit() ; 


?>