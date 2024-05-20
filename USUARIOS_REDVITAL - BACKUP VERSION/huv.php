<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="huv.css">
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
/* session_start();

if(!isset($_SESSION["usuario"])){

    header("location:login.php");

} */

//--------------------consulta-----------------------
require("conexionBD.php");

$resultadoCr=$base->query("select * from usuarios_crear where confirmar=1")->fetchAll(PDO::FETCH_OBJ);


?>
 <!-- ----------------------------------barra menu------------------------------ -->

<header>
        <div class="usuarios">
            <!-- <p class="usuario"><b>Usuario:</b> <php echo $_SESSION["usuario"];  ?></p> 
 -->
        </div>

        <label for="" class="icon"></label>
        <h1>Resepcion de usuario Redvital</h1>
    </header>
        

    <div id="container-menu" >
        <div class="btn-ol"> <span>&#9776;</span></div>
        <div class="cont-menu">
            
            <nav>
                <a class="cerrarTx" href="cierre_sesion.php"><b>Cerrar sesion</b></a>
                <a class="cerrarTx"  id="boton-me" onclick="mostrarCrear();"><b>Solcitudes de Crear</b></a>
                <a class="cerrarTx"  id="boton-me" onclick="mostrarPermisos();"><b>Solcitudes de Permisos</b></a>
                <a class="cerrarTx" id="boton-me" onclick="mostrarBodega();"><b>Solcitudes de Bodega</b></a>
                <a class="cerrarTx" href=""><b>Cambiar contraseña</b></a>
            </nav>
            
        </div>
    </div>

    <!-- ----------------------------------barra menu------------------------------ -->



    <!------------------------------------crear---------------------------- -->

<div id="crear">
    <form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <table>
                <!-- aqui tenemos los nombres de arriba nombre cedula ETC -->
                <tr >
                    <td class="primera_fila"></td>
                    <td class="primera_fila"><b>C3edula</b></td>
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
                
                
                foreach($resultadoCr as $personaCr):?>
                    <!-- un bucle para que se repita las lineas igual que la cantidad de usuarios de
                    la basse de datos -->
                    

                    <tr> <!-- linea de cogido de registro -->
                    
                        <td ><input type="hidden" name="id" value="<?php echo $personaCr->id?>"></td>
                        <td ><?php echo $personaCr->cedula ?></td> 
                        <td ><?php echo $personaCr->nombre ?></td>
                        <td ><?php echo $personaCr->apellido ?></td>
                        <td ><?php echo $personaCr->bodega ?></td>
                        <td ><?php echo $personaCr->telefono ?></td>
                        <td >#####</td>                    
                        <!-- boton -->
                        <td><a href="codigos_Y.php?id=<?php echo $personaCr->id?>&
                                    cedula=<?php echo $personaCr->cedula?> &
                                    nombre=<?php echo $personaCr->nombre?> &
                                    apellido=<?php echo $personaCr->apellido?> &
                                    bodega=<?php echo $personaCr->bodega?> &
                                    telefono=<?php echo $personaCr->telefono?>">
                            <input class="confi" type="button" name="as" value="Confirmar" onclick="return registro()">
                        </a></td>
                    </tr> 
                    
            <?php endforeach;  ?>
            
        </table>
    </form>
</div>

 <!------------------------------------fin crear----------------------------------------- -->

  <!------------------------------------permisos---------------------------- -->

<!-- consulta permisos -->
<?php $resultadoP=$base->query("select * from permisos")->fetchAll(PDO::FETCH_OBJ);   ?>

<div id="permisos">
    <form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <table>
                <!-- aqui tenemos los nombres de arriba nombre cedula ETC -->
                <tr >
                    <td class="primera_fila"></td>
                    <td class="primera_fila"><b>Usuario Servinte</b></td>
                    <td class="primera_fila"><b>Bodegaagregar</b></td>
                    <td class="primera_fila"><b>Usuario clonar</b></td>
                    <td class="primera_fila"><b>Confirmacion</b></td>
                    <td class="sin">&nbsp;</td>
                    <td class="sin">&nbsp;</td>
                    <td class="sin">&nbsp;</td>
                </tr>


            <?php 
                
                
                foreach($resultadoP as $personaP):?>
                    <!-- un bucle para que se repita las lineas igual que la cantidad de usuarios de
                    la basse de datos -->
                    

                    <tr> <!-- linea de cogido de registro -->
                    
                        <td ><input type="hidden" name="id" value="<?php echo $personaP->id?>"></td>
                        <td ><?php echo $personaP->usuario_servinte ?></td> 
                        <td ><?php echo $personaP->bodega_agregar?></td>
                        <td ><?php echo $personaP->usuario_clonar ?></td>
                        
                        <td >#####</td>                    
                        <!-- boton -->
                       <!--  <td><a href="codigos_Y.php?id=<php echo $persona->id?>&
                                    cedula=<php echo $persona->cedula?> &
                                    nombre=<php echo $persona->nombre?> &
                                    apellido=<php echo $persona->apellido?> &
                                    bodega=<php echo $persona->bodega?> &
                                    telefono=<php echo $persona->telefono?>">
                            <input class="confi" type="button" name="as" value="Confirmar" onclick="return registro()">
                        </a></td> -->
                    </tr> 
                    
            <?php endforeach;  ?>
            
        </table>
    </form>
</div>


   <!------------------------------------fin permisos---------------------------- -->

   <!------------------------------------bodega---------------------------- -->

   <!-- consulta bodega -->
    <?php $resultadoB=$base->query("select * from bodega")->fetchAll(PDO::FETCH_OBJ);   ?>

<div id="bodega">
   <form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <table>
            <!-- aqui tenemos los nombres de arriba nombre cedula ETC -->
            <tr >
                <td class="primera_fila"></td>
                <td class="primera_fila"><b>Usuario Servinte</b></td>
                <td class="primera_fila"><b>Bodega actual</b></td>
                <td class="primera_fila"><b>Bodega nueva</b></td>
                <td class="primera_fila"><b>Confirmacion</b></td>
                <td class="sin">&nbsp;</td>
                <td class="sin">&nbsp;</td>
                <td class="sin">&nbsp;</td>
            </tr>


        <?php 
            
            
            foreach($resultadoB as $personaB):?>
                <!-- un bucle para que se repita las lineas igual que la cantidad de usuarios de
                la basse de datos -->
                

                <tr> <!-- linea de cogido de registro -->
                   
                <td ><input type="hidden" name="id" value="<?php echo $personaB->id?>"></td>
                        <td ><?php echo $personaB->usuario_servinte ?></td> 
                        <td ><?php echo $personaB->bodega_actual ?></td>
                        <td ><?php echo $personaB->bodega_nueva ?></td>   

                     <!-- boton -->
                    <!-- <td><a href="codigos_Y.php?id=<?php echo $persona->id?>&
                                  cedula=<php echo $persona->cedula?> &
                                  nombre=<php echo $persona->nombre?> &
                                  apellido=<php echo $persona->apellido?> &
                                  bodega=<php echo $persona->bodega?> &
                                  telefono=<php echo $persona->telefono?>">
                        <input class="confi" type="button" name="as" value="Confirmar" onclick="return registro()">
                    </a></td> -->
                </tr> 
                
        <?php endforeach;  ?>
        
        </table>
    </form>
</div>

   <!------------------------------------fin bodega---------------------------- -->





<script src="huv.js"></script>
</body>
</html>