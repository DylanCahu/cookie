<!DOCTYPE html>
<html>
    <head>
        <title>Index Cookies</title>
        <meta charset="utf-8">
        <style>
            body	{	font-family	:	Arial	;}
        </style>
    </head>

    <body>
        <h1>Page parent de Dylan++</h1>
</br>
<a href="/Cookies/index.html">Accueil</a>
<hr>

<?php

$tabhead = getallheaders();
var_dump($tabhead);

session_start();

if (isset($_COOKIE['numClient'])) {
    echo "<h3>Votre ID cookie est: " . $_COOKIE['numClient'] . "</br> ";
    $id = $_COOKIE['numClient'];} else {echo "Pas d'ID cookie sur ce site !</br>";
    $id = 0;}

if (isset($_SESSION['numClient'])) {
    echo "<h3>Votre ID session est: " . $_SESSION['numClient'] . "</br> ";
    $id = $_SESSION['numClient'];} else {echo "Pas d'ID session sur ce site !</br>";
    $id = 0;}

?>
        <iframe weight=500 heigth=500  src="http://172.16.126.17/Cookies/enfant.php?id=<?php echo $id; ?>">
    </body>
</html>