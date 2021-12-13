<html>
    <head>
        <title>Index Cookies</title>
        <meta charset="utf-8">

    </head>

    <body>
        <h1>Poste de Dylan++</h1>
        <hr>
<?php
//Permet le croisement des cookies
session_start();
session_set_cookie_params(['samesite' => 'None']);


//génération cookie
$numClient = rand(0, 20);
$_SESSION['numClient']
//setcookie("numClient", $numClient, time() + 3600);
// echo ("<h3>Votre ID est :" . $numClient . "</h2>");
?>

</body>
</html>