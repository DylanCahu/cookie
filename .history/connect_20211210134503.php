<?php
//génération cookie
$numClient = rand(0,20) ;
setcookie("numClient", $numClient, time()+3600);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>JS</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Poste de Dylan++</h1>
        <hr>


        
        <textarea value="recevoir(texte)"></textarea>
    </body>
</html>

