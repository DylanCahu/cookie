<?php

switch ($_GET['chooseCookie']) {
    case 'on':
        # code...
        break;
    
    case 'off':
        # code...
        break;

    default:
        # code...
        break;
}

function on(){
    //On définit deux cookies
    setcookie('user_id', '1234');
    setcookie('user_pref', 'dark_theme', time()+3600*24, '/', '', false, false);
}

function off(){
    //On modifie la valeur du cookie user_id
    setcookie('user_id', '5678');
    
    //On supprime le cookie user_pref
     setcookie('user_pref', '', time()-3600, '/', '', false, false);
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Titre principal</h1>
        <?php
            if(isset($_COOKIE['user_id'])){
                echo 'Votre ID de session est le ' .$_COOKIE['user_id']. '<br>';
            }
            if(isset($_COOKIE['user_pref'])){
                echo 'Votre thème préféré est ' .$_COOKIE['user_pref'];
            }else{
                echo 'Pas de thème préféré défini';
            }
        ?>
        <p>Choisissez</p>
        <form>
        <input type="radio" name="chooseCookie" value="on">
        <input type="radio" name="chooseCookie" value="off">
        <input type="submit" value="Envoyer">
        </form>
    </body>
</html>