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

// if (isset($_COOKIE['numClient'])) {
//     echo "<h3>Votre ID est: " . $_COOKIE['numClient'] . " ";
// } else {
//     echo "Pas d'ID, BOUUUH !"
//     ;
// }

session_start();

if (isset($_SESSION['numClient'])) {
    echo "<h3>Votre ID est: " . $_SESSION['numClient'] . " ";
} else {
    echo "Pas d'ID, BOUUUH !";
}

?>

    </body>
</html>
