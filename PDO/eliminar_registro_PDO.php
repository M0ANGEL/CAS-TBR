<?php


//---------------variables que almacenan datos del formulario--------------------
$servinte=$_POST["doc_servinte"];


//---------------------------------------------------------------------------------

try{
    
    //conexion a la base de datos sql
    $base = new PDO("mysql:host=localhost; dbname=pruebas", "root","");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

    $base->exec("set character set utf8");

    //consulata
    $sql = "delete from medica where doc_servinte = :se";
    //se prepara la ocnsulta
    $resultado=$base->prepare($sql);

    //se ejecuta la ocnsulata guardada en sql
    $resultado->execute(array(":se"=>$servinte));


    //mensaje si guardo el registro
    echo "registro eliminado";

    //cerrar tabla virtual
    $resultado->closeCursor();
    

}catch(Exception $e){

    //die("Error--: " . $e->getMessage());
    $e->getCode(); //para ver la linea en la que esta el error

    if($e->getCode()=="42S02"){
        echo "tabla no existe";
    }

}finally{

    $base=null;

}

?>