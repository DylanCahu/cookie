<html>
    <head>
        <title>Index Cookies</title>
        <meta charset="utf-8">

    </head>

    <body>
        <h1>Poste de Dylan++</h1>
</br>
<a href="/Cookies/index.html">Accueil</a>
        <hr>
<?php
//Permet le croisement des cookies
session_set_cookie_params(['samesite' => 'None']);
session_start();

//génération cookie
$arr_cookie_options = array (
    'expires' => time() + 60*60*24*30,
    'path' => '/',
    'domain' => '.example.com', // leading dot for compatibility or use subdomain
    'secure' => true,     // or false
    'httponly' => true,    // or false
    'samesite' => 'None' // None || Lax  || Strict
    ); 

$numClient = rand(0, 20);

setcookie("numClient", $numClient, $arr_cookie_options);
echo ("<h3>Votre ID cookie est :" . $_COOKIE['numClient'] . "</h2>");

$_SESSION['numClient']=$numClient;
echo ("<h3>Votre ID session est :" . $_SESSION['numClient'] . "</h2>");

?>

</body>
</html>