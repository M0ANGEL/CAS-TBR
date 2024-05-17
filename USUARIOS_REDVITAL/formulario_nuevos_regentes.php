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

    header("location:login.php");

}
?>


<h1>Registro de regentes</h1>
<div class="login-page">
        <div class="form">
            <form class="login-form" action="nuevos_regentes.php" method="post">

                <input type="text"  name="nombre" placeholder="nombre"/>
                <input type="text" name="apelldio" placeholder="apellido"/>
                <input type="text"  name="cedula" placeholder="cedula sin (.)"/>
                <input type="text"  name="usuario" placeholder="usuario"/>
                <input type="password"  name="contra" placeholder="contraseña"/>
                <input type="submit" name="enviar" value="CREAR" id="enviar">
               
            
            </form>
        </div>
   </div>
    
</body>
</html>