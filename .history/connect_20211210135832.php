<html>
    <head>
        <title>Index Cookies</title>
        <meta charset="utf-8">

    </head>
    
    <body>
        <h1>Poste de Dylan++</h1>
        <hr>
<?php
//génération cookie
$numClient = rand(0,20) ;
setcookie("numClient", $numClient, time()+3600);
echo("Votre ID est :" .$numClient);
?>

</body>
