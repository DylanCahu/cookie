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
if (isset($_COOKIE['numClient'])) {
    echo "<h3>Votre ID est: " . $_COOKIE['numClient'] . " ";
    $id = $_COOKIE['numClient'];} 
else {echo "Pas d'ID, BOUUUH !";
    $id = 0;}
if (isset($_GET['id'])) {
        echo "<h3>Votre ID est: " . $_GET['id'] . " ";
        $id = $_COOKIE['id'];} 
    else {echo "Pas d'ID, BOUUUH !";
        $id = 0;}
?>
    </body>
</html>
