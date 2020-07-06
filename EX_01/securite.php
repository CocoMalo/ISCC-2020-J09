<?php
    include "conexion.php"

session_start ($_SESSION) ;

        $_SESSION ['login'] = "Identifiant" ;
        $_SESSION ["password"] = 2020 ;
?>

<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8"/>
    </head>

    <body>
    <?php
        
        if ($_SESSION = "j") {
            echo "<p> Mauvais couple identifiant / mot de passe.";
            echo "<a href= "connexion.php"> Connexion </a> </p> ";
         }

        else {
             echo "$_SESSION ["id"] = "include "conexion.php";
             echo "Login : "
          }
        
    ?>
    </body>
</html>