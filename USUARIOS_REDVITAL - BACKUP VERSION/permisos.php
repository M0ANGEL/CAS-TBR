<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>crear usuario </title>
</head>
<body>
<?php


    //la variable session mira si se regsitro y lo deja pasar en caso no
    // lodevuelve a la pagina login
    session_start();

    if(!isset($_SESSION["usuario"])){

        header("location:solicitudes.php");

    }
    ?>


<h1>Datos para solicitud cambio de bodega</h1>
<div class="login-page">
        <div class="form">
            <form class="login-form" action="sql.cambio.php" method="post">

                <input type="text"  name="usuario_sebthi" placeholder="usuario sebthi"/>
                <input type="text" name="usuario_servinte" placeholder="usuario servinte"/>
                <input type="text"  name="bodega_agregar" placeholder="bodega agregar"/>
                <input type="text" name="usuario_clonar" placeholder="usuario a clonar permisos" >

                <input type="submit" name="enviar" value="SOLICITUD DE PERMISOS" id="enviar">
               
            
            </form>
        </div>
   </div>
    
</body>
</html>