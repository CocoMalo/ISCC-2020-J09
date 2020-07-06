<!DOCTYPE html>
<html>
    <head>
    </head>

    <body>
        <?php
            $_FILES ["image_1.jpeg"] ["jpeg"];
            $_FILES ["image_1.jpg"] ["jpg"];
            $_FILES ["image_1.png"] ["png"];
        ?>
    
    <form action= "contact-form.php" method="post">
    <p>
        <input type="text" name="Titre"/>
        <input type="text" e_mail="Description"/>
    </p>

        <?php
            $_SESSION ["Titre"];
            $_SESSION ["Description"];
            $_SESSION ["image"];
        ?>
    </body>
</html>