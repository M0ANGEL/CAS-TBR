<?php


//---------------variables que almacenan datos del formulario--------------------
$cedula=$_POST["cedula"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$bodega=$_POST["bodega"];
$cargo=$_POST["cargo"];
$telefono=$_POST["telefono"];
$servinte_clonar=$_POST["servinte_clonar"];
$cedula_clonar=$_POST["cedula_clonar"];
$sebthi_clonar=$_POST["sebthi_clonar"];



//PARA ENCRITAR CONTRASEÑA USAMOS LA FUNCION PASSWORD_HASH,  la cual pide dos parametros, que vamos a encritar
//y la sal en defau


//---------------------------------------------------------------------------------

try{
    
    //conexion a la base de datos sql
    $base = new PDO("mysql:host=localhost; dbname=usuario_registros", "root","");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $base->exec("set character set utf8");
    //ok

    //consulata
    $sql = "insert into usuarios_crear(cedula, nombre, apellido, bodega, cargo, telefono,servinte_clonar, cedula_clonar,sebthi_clonar) values 
    (:cedula, :nombre, :apellido, :bodega, :cargo, :telefono, :servinte, :cedula, :sebthi)"; /* (:)es para marcador */

    
    //se prepara la ocnsulta
    $resultado=$base->prepare($sql);
    
    
    //se ejecuta la ocnsulata guardada en sql
    $resultado->execute(array(":cedula"=>$cedula_clonar,":nombre"=>$nombre,":apellido"=>$apellido,":bodega"=>$bodega,":cargo"=>$cargo,
    ":telefono"=>$telefono ,":servinte"=>$servinte_clonar,":sebthi"=>$sebthi_clonar));
    echo "tes";
    header("location: crear_usuario.php");
    
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