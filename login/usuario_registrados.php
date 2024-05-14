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
    echo "Hola: " . $_SESSION["usuario"] .  "<br><br>";

    ?>

    <h3>link menu</h3>
    <ul>
        <li><a href="usuario_registrados2.php">pagina 2</a></li>
        <li><a href="usuario_registrados3.php">pagina 3</a></li>
        <li><a href="usuario_registrados4.php">pagina 4</a></li>
        <li><a href="cierre.login.php">cerrar secion</a></li>
        <li>fin menu</li>
    </ul>
</body>
</html>