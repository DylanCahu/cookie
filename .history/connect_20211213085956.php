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
session_set_cookie_params(['samesite' => 'None']);
session_start();



//génération cookie
$numClient = rand(0, 20);
$_SESSION['numClient']=$numClient;
echo ("<h3>Votre ID est :" . $_SESSION['numClient'] . "</h2>");
//setcookie("numClient", $numClient, time() + 3600);
// echo ("<h3>Votre ID est :" . $numClient . "</h2>");
?>

</body>
</html>