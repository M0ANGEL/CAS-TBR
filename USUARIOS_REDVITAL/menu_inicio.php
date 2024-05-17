<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu_inicio.css">
    <title>menu</title>


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
    
    <h1>Creacion y manejos de permisos</h1>
        
   

    <div class="usuarios">
    <p class="usuario"><b>Bienvenid@:</b> <?php echo $_SESSION["usuario"];  ?></p>
        <button class="cerrar"><a class="cerrarTx" href="cierre_sesion.php"><b>Cerrar sesion</b></a></button>
    </div>
    


    <div>
        <div class="box">
            <h4>CREAR USUARIO NUEVO</h4>
            <hr>
            <p>para solicitar creacion de usuario  
            <b>SEBTHI/SERVINTE</b><br><br> 
             click en <b>CREAR</b>
            </p>
            <button class="boton1"><a href="crear_usuario.php">CREAR</a></button>
        </div>

        <div class="box1">
        <h4>CAMBIO DE BODEGAS</h4>
            <hr>
            <p>para solicitar cambio de bodega 
                <b>SEBTHI/SERVINTE</b><br><br>
                click en <b>BODEGA</b>
            </p>
            <button class="boton2"><a href="cambio_bodega.php">BODEGA</a></button>
        </div>

        <div class="box">
        <h4>ASIGNACION DE PERMISOS</h4>
            <hr>
            <p>para solicitar aignacion de permisos  
            <b>SEBTHI/SERVINTE</b><br><br>
            click en  <b>PERMISOS</b>
            </p>
            <button class="boton3"><a href="permisos.php">PERMISOS</a></button>

        </div>
    </div>

    <?php
        if($_SESSION["usuario"]=="admin"){
            echo "<a href='formulario_nuevos_regentes.php'>NUEVOS USUARIOS</a>";
        };
    ?>

</body>
</html>