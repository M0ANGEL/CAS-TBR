<?php


//---------------variables que almacenan datos del formulario--------------------
$servinte=$_POST["doc_servinte"];
$codigo=$_POST["codigo"];
$medicamento=$_POST["medicamento"];
$cantidad=$_POST["cantidad"];

//---------------------------------------------------------------------------------

try{
    
    //conexion a la base de datos sql
    $base = new PDO("mysql:host=localhost; dbname=pruebas", "root","");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

    $base->exec("set character set utf8");

    //consulata
    $sql = "insert into medica (doc_servinte, codigo, medicamento, cantidad) values 
    (:se,:co,:me,:ca) "; /* (:)es para marcador */

    //se prepara la ocnsulta
    $resultado=$base->prepare($sql);

    //se ejecuta la ocnsulata guardada en sql
    $resultado->execute(array(":se"=>$servinte,":co"=>$codigo,":me"=>$medicamento,":ca"=>$cantidad));


    //mensaje si guardo el registro
    echo "registro guardado";

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