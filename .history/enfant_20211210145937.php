<!DOCTYPE html>
<html>
    <head>
        <title>Index Cookies</title>
        <meta charset="utf-8">
        <style>
body	{	font-family	:	Arial	;
		}
</style>
    </head>
    
    <body>
        <h1>Page enfant de Dylan++</h1>
        <hr>
        <?php

session_start();

if (isset($_COOKIE['numClient'])) {
    echo "<h3>Votre ID est: " . $_COOKIE['numClient'] . " </br>";
    $id = $_COOKIE['numClient'];} 
else {echo "Pas d'ID, BOUUUH !</br>";
    $id = 0;}
if (isset($_GET['id'])) {
        echo "<h3>Votre ID est: " . $_GET['id'] . "</br> ";
        $id = $_GET['id'];} 
    else {echo "Pas d'ID, BOUUUH !</br>";
        $id = 0;}
?>

    </body>
</html>
