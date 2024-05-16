<?php  
    include("conexion.php");
   
    $id=$_GET["id"];
    $base->query("delete from datos_usuario where id='$id'");

    header("location: index.php");
    

?>