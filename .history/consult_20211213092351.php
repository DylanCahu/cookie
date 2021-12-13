<!DOCTYPE html>
<html>
    <head>
        <title>JS</title>
        <meta charset="utf-8">

    </head>

    <body>
        <h1>Poste de Dylan++</h1>
</br>
<a href="/Cookies/index.html">Accueil</a>
        <hr>
<?php

$tabhead = getallheaders();
var_dump($tabhead);

if (isset($_COOKIE['numClient'])) {
    echo "<h3>Votre ID cookie est: " . $_COOKIE['numClient'] . "</br> ";
    $id = $_COOKIE['numClient'];} else {echo "Pas d'ID cookie sur ce site !</br>";
    $id = 0;}

if (isset($_SESSION['numClient'])) {
    echo "<h3>Votre ID session est: " . $_SESSION['numClient'] . "</br> ";
    $id = $_SESSION['numClient'];} else {echo "Pas d'ID session sur ce site !</br>";
    $id = 0;}

?>

    </body>
</html>
