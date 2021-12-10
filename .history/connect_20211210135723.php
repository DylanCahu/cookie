<?php
//génération cookie
$numClient = rand(0,20) ;
setcookie("numClient", $numClient, time()+3600);
header('Location: /Cookies/');
echo($numClient));
?>


