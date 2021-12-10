<?php
//génération cookie
$numClient = rand(0,20) ;
setcookie("numClient", $numClient, time()+3600);
header('Location: http:172.16.126.16/cookie/');
?>


