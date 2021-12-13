<!DOCTYPE html>
<html>
    <head>
        <title>JS</title>
        <meta charset="utf-8">

    </head>
    
    <body>
        <h1>Poste de Dylan++</h1>
        <hr>
<?php

 $tabhead=getallheaders();

    if(isset($_COOKIE['numClient']))
    echo "<h3>Votre ID est: " .$_COOKIE['numClient'] ." " ;
    else echo "Pas d'ID, BOUUUH !"
?>

    </body>
</html>
