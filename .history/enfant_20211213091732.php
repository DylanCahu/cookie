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

$tabhead = getallheaders();
var_dump($tabhead);

session_start();

if (isset($_COOKIE['numClient'])) {
    echo "<h3>Votre ID est: " . $_COOKIE['numClient'] . " </br>";
    $id = $_COOKIE['numClient'];} else {echo "Pas d'ID cookie sur ce site !</br>";
    $id = 0;}
if (isset($_SESSION['numClient'])) {
    echo "<h3>Mon ID est " . $_SESSION['numClient'] . " </br>";
    $id = $_SESSION['numClient'];} else {echo "Pas d'ID session sur ce site !</br>";
    $id = 0;}
if (isset($_GET['id'])) {
    echo "<h3>Votre ID est " . $_GET['id'] . "</br> ";
    $id = $_GET['id'];} else {echo "Vous n'avez pas passé d'ID!</br>";
    $id = 0;}

?>

    </body>
</html>
