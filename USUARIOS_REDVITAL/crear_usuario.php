<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>crear usuario </title>
    <script>
        function registro(){
            alert("Registro realizado!")
            
        }
    </script>
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


<h1>Datos para solicitud de usuario nuevo</h1>
<div class="login-page">
        <div class="form">
            <form class="login-form" action="sql_crear.php" method="post">

                <input type="text"  name="nombre" placeholder="nombre completo"/>
                <input type="text" name="apellido" placeholder="apellido completos"/>
                <input type="text"  name="cedula" placeholder="cedula sin (.)"/>
                <input type="text"  name="bodega" placeholder="bodega"/>
                <input type="text"  name="cargo" placeholder="cargo"/>
                <input type="text"  name="telefono" placeholder="telefono"/>
                <hr>
                <p>usuario a clonar, usuario existente que tiene permisos que debe tener
                    el usuario a crear
                </p>
                <input type="text"  name="servinte_clonar" placeholder="usuario servinte a clonar"/>
                <input type="text"  name="cedula_clonar" placeholder="cedula de usuario a clonar"/>
                <input type="text"  name="sebthi_clonar" placeholder="usuario sebthi a clonar"/>
                <input type="submit" name="enviar" value="SOLICITAR CREACION" id="enviar" onclick="return registro()">
               
            
            </form>
        </div>
   </div>
    
</body>
</html>