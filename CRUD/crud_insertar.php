<?php  
    include("conexion.php");


    $nombre=$_GET["nombre"];
    $apellido=$_GET["apellido"];
    $cedula=$_GET["cedula"];




    //consulata
    $sql = "insert into datos_usaurio (nombre, apellido, cedula) values 
    (:nombre,:apellido,:cedula) "; /* (:)es para marcador */

    //se prepara la ocnsulta
    $resultado=$base->prepare($sql);

    //se ejecuta la ocnsulata guardada en sql
    $resultado->execute(array(":nombre"=>$nombre,":apellido"=>$apellido,":cecdula"=>$cedula));



    //cerrar tabla virtual
    $resultado->closeCursor();

    header("location: index.php");





?>