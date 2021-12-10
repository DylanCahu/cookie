<?php

if(isset($_GET['chooseCookie'])){
    switch ($_GET['chooseCookie']) {
        case 'on':
            on();
            break;
    
        case 'off':
            off();
            break;

        default:
            # code...
            break;
}
}
function on(){
    //On définit deux cookies
    setcookie('numclient', $_SERVER['REMOTE_ADDR']);
    setcookie('expediteur', 'Dylan++');
}

function off(){
    //On modifie la valeur du cookie user_id
    setcookie('numclient', '');
    setcookie('expediteur', '');
}


?>
<!DOCTYPE html>
<html>
    <head>
        <title>php</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h1>Site cookies Dylan++.php</h1>
        <?php
            // if(isset($_COOKIE['user_id'])){
            //     echo 'Votre ID de session est le ' .$_COOKIE['user_id']. '<br>';
            // }
            // if(isset($_COOKIE['user_pref'])){
            //     echo 'Votre thème préféré est ' .$_COOKIE['user_pref'];
            // }else{
            //     echo 'Pas de thème préféré défini';
            // }

            if(isset($_COOKIE['numclient'])){
                echo 'Votre numclient est : ' .$_COOKIE['numclient']. '<br>';
            }else{
                echo 'Pas de coockie Client <br/>';
            }
            if(isset($_COOKIE['expediteur'])){
                echo 'Envoyé par ' .$_COOKIE['expediteur'];
            }else{
                echo 'Pas de coockie expediteur';
            }

        ?>
        <p>Choisissez :</p>
        <form>
        <input type="radio" name="chooseCookie" value="on">On
        <input type="radio" name="chooseCookie" value="off">Off
        <br/><br/><input type="submit" value="Envoyer">
        <br/><br/><br/>
        <form action="172.16.136.25/Sio2/cookie/"><input type="submit" value="Aller sur la page JS"></form>
        </form>
    </body>
</html>