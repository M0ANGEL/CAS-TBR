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

    /* consulta para ver nombre del regente */





    ?>
     <!--------------------------------------barra menu----------------------- -->          
    <header>
        <div class="usuarios">
            <p class="usuario"><b>Usuario:</b> <?php echo $_SESSION["usuario"];  ?></p> 

        </div>

        <label for="" class="icon"></label>
        <h1>Creacion y manejos de permisos</h1>
    </header>
        
    <!-- <input type="checkbox" id="btn-menu">
     -->
    <div id="container-menu" >
        <div class="btn-ol"> <span>&#9776;</span></div>
        <div class="cont-menu">
            
            <nav>
                <a class="cerrarTx" href="cierre_sesion.php"><b>Cerrar sesion</b></a>
                <a class="cerrarTx" href=""><b>Usuarios pendientes</b></a>
                <a class="cerrarTx" href=""><b>Solicitud por area</b></a>
                <?php
                    if($_SESSION["usuario"]=="admin"){
                    echo "<a class='cerrarTx' href='formulario_nuevos_regentes.php'><b>Nuevos regentes</b></a><br>";
                    echo "<a class='cerrarTx' href='formulario_registro_qf.php'><b>Nuevos QF</b></a>";
                    };
                    ?>
                <a class="cerrarTx" href=""><b>##</b></a>
                <a class="cerrarTx" href=""><b>##</b></a>
                <a class="cerrarTx" href=""><b>##</b></a>
            </nav>
            
        </div>
    </div>

    <!-- -------------------------------fin barra menu--------------------------------------------- -->











  

    
    


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

        <div class="box">
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

  




        <script src="menu.js"></script>
</body>
</html>