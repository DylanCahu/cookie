<?php
//génération cookie
$numClient = rand(0,20) ;
setcookie("numClient", $numClient, time()+3600);
echo("Votre ID est :" .$numClient);
?>


