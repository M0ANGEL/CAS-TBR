<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="qf.css">
    <title>Document</title>
    <script>
        function registro(){
            alert("Por favor confirmar nuevamente")
            
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

//--------------------consulta-----------------------
require("conexionBD.php");

$resultado=$base->query("select * from usuarios_crear where confirmar=0")->fetchAll(PDO::FETCH_OBJ);



?>
 <!-- ----------------------------------barra menu------------------------------ -->

<header>
        <div class="usuarios">
            <p class="usuario"><b>Usuario:</b> <?php echo $_SESSION["usuario"];  ?></p> 

        </div>

        <label for="" class="icon"></label>
        <h1>Creacion y manejos de permisos</h1>
    </header>
        

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
                <a class="cerrarTx" href=""><b>Cambiar contraseña</b></a>
            </nav>
            
        </div>
    </div>

    <!-- ----------------------------------barra menu------------------------------ -->


<form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <table>
            <!-- aqui tenemos los nombres de arriba nombre cedula ETC -->
            <tr >
                <td class="primera_fila"></td>
                <td class="primera_fila"><b>Cedula</b></td>
                <td class="primera_fila"><b>Nombre</b></td>
                <td class="primera_fila"><b>Apellido</b></td>
                <td class="primera_fila"><b>Bodega</b></td>
                <td class="primera_fila"><b>Telefono</b></td>
                <td class="primera_fila"><b>SL Regente</b></td>
                <td class="primera_fila"><b>Confirmacion</b></td>
                <td class="sin">&nbsp;</td>
                <td class="sin">&nbsp;</td>
                <td class="sin">&nbsp;</td>
            </tr>


        <?php 
            
            
            foreach($resultado as $persona):?>
                <!-- un bucle para que se repita las lineas igual que la cantidad de usuarios de
                la basse de datos -->
                

                <tr> <!-- linea de cogido de registro -->
                   
                    <td ><input type="hidden" name="id" value="<?php echo $persona->id?>"></td>
                    <td ><?php echo $persona->cedula ?></td> 
                    <td ><?php echo $persona->nombre ?></td>
                    <td ><?php echo $persona->apellido ?></td>
                    <td ><?php echo $persona->bodega ?></td>
                    <td ><?php echo $persona->telefono ?></td>
                    <td >#####</td>                    
                     <!-- boton -->
                    <td><a href="codigos_Y.php?id=<?php echo $persona->id?>&
                                  cedula=<?php echo $persona->cedula?> &
                                  nombre=<?php echo $persona->nombre?> &
                                  apellido=<?php echo $persona->apellido?> &
                                  bodega=<?php echo $persona->bodega?> &
                                  telefono=<?php echo $persona->telefono?>">
                        <input class="confi" type="button" name="as" value="Confirmar" onclick="return registro()">
                    </a></td>
                </tr> 
                
        <?php endforeach;  ?>
        
    </table>
</form>


<script src="menu.js"></script>
</body>
</html>