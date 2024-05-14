<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php


//---------------variables que almacenan datos del formulario--------------------
$usua=$_POST["usuario"];
$contra=$_POST["contra"];

//PARA ENCRITAR CONTRASEÑA USAMOS LA FUNCION PASSWORD_HASH,  la cual pide dos parametros, que vamos a encritar
//y la sal en defaul
$pass_cifrado=password_hash($contra, PASSWORD_DEFAULT);


//---------------------------------------------------------------------------------

try{
    
    //conexion a la base de datos sql
    $base = new PDO("mysql:host=localhost; dbname=pruebas", "root","");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

    $base->exec("set character set utf8");

    //consulata
    $sql = "insert into usuario_pass (usuarios, password) values 
    (:usua,:contra) "; /* (:)es para marcador */

    //se prepara la ocnsulta
    $resultado=$base->prepare($sql);

    //se ejecuta la ocnsulata guardada en sql
    $resultado->execute(array(":usua"=>$usua,":contra"=>$pass_cifrado));


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










</body>
</html>