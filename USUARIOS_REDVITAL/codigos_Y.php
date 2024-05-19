<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="qf.css">
    <title>Document</title>

</head>
<body>

    <?php 
    
    session_start();

    if(!isset($_SESSION["usuario"])){

        header("location:login.php");

    }

    include("conexionBD.php");


    //aqui si no se da en el bodon de actualizar lee este codigo

    if(!isset($_POST["confi"])){

        $id=$_GET["id"];
        $cedula=$_GET["cedula"];
        $nombre=$_GET["nombre"];
        $apellido=$_GET["apellido"];
        $bodega=$_GET["bodega"];
        $telefono=$_GET["telefono"];
        

        //cuanddo se pulsa se ejecuta la cosula
    }else{
        //aqui estamos guardadon los datos que se actualizaran
        $id=$_POST["id"];
        $confirma=1;
        

        //aqui se prepara la consulata
        $sql="UPDATE usuarios_crear set confirmar=:cc where id=:miid";

        //aqui se almacena en resultado la base que es la consulta y prepare que la prepara con la consulta sql
        $resultado=$base->prepare($sql);

        //aqui en resultado vamos a ek metodo exceute que le ejcuta, en array vamos a dar los valores que estan en los marcadores :etc
        $resultado->execute(array(":miid"=>$id, ":cc"=>$confirma ));

       header("location: QF.php");

    }

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
                <a class="cerrarTx" href=""><b>##</b></a>
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
                            <td ><input type="hidden" name="id" value="<?php echo $id?>"></td>
                            <td ><?php echo $cedula ?></td> 
                            <td ><?php echo $nombre ?></td>
                            <td ><?php echo $apellido ?></td>
                            <td ><?php echo $bodega ?></td>
                            <td ><?php echo $telefono ?></td>
                            <td >#####</td>
                             <!-- boton -->
                            <td ><input class="confi" type="submit" name="confi" value="CONFIRMAR"></td>
                        </tr> 
                        
                <?php endforeach;  ?>
                
            </table>
        </form>
        
      
</body>
</html>


