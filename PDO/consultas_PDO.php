
<?php
$buscar=$_POST["doc_servinte"];
$codigo=$_POST["codigo"];

try{
    

    $base = new PDO("mysql:host=localhost; dbname=pruebas", "root","");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

    $base->exec("set character set utf8");

    //consulata
    $sql = "select doc_servinte, codigo, medicamento, cantidad, remision,
    fecha, entrega, bodega, elaboro from medicas where doc_servinte = :co_se and codigo=:co_di"; /* (:)es para marcador */

    $resultado=$base->prepare($sql);

    $resultado->execute(array(":co_se"=>$buscar, ":co_di"=>$codigo));

    while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

        "<hr>";

        echo "doc_servinte: " . $registro['doc_servinte'] . "<br>";
        echo "codigo: " . $registro['codigo'] . "<br>";
        echo "medicamento: " . $registro['medicamento'] . "<br>";
        echo "Cantidad: " . $registro['cantidad'] . "<br>";
        echo "remision: " . $registro['remision'] . "<br>";
        echo "fecha: " . $registro['fecha'] . "<br>";
        echo "entrega: " . $registro['entrega'] . "<br>";
        echo "bodega: " . $registro['bodega'] . "<br>";
        echo "elaboro: " . $registro['elaboro'] . "<br>";

    }

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