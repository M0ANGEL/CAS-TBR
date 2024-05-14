<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php


        //la variable session mira si se regsitro y lo deja pasar en caso no
        // lodevuelve a la pagina login
        session_start();

        if(!isset($_SESSION["usuario"])){

            header("location:login.php");

        }
    ?>
    
    <h1> Bienvenido Usuario</h1>


    <?php
    echo "usuario: " . $_SESSION["usuario"] .  "<br><br>";
    echo "Estas en la pagina 1"
    ?>

    <a href="usuario_registrados.php">menu</a>
    <li><a href="cierre.login.php">cerrar secion</a></li>
</body>
</html>