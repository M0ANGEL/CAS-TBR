   
<?php


//---------------variables que almacenan datos del formulario--------------------
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$cedula=$_POST["cedula"];
$bodega=$_POST["bodega"];
$usua=$_POST["usuario"];
$contra=$_POST["contra"];



//PARA ENCRITAR CONTRASEÑA USAMOS LA FUNCION PASSWORD_HASH,  la cual pide dos parametros, que vamos a encritar
//y la sal en defaul
$pass_cifrado=password_hash($contra, PASSWORD_DEFAULT);


//---------------------------------------------------------------------------------

try{
    
    //conexion a la base de datos sql
    $base = new PDO("mysql:host=localhost; dbname=usuario_registros", "root","");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $base->exec("set character set utf8");
    //ok

    //consulata
    $sql = "insert into registro_usuario(nombre, apellido, cedula, bodega, usuario, contra) values (:nombre, :apellido, :cedula,:bodega, :usuario ,:contra)"; /* (:)es para marcador */

    //se prepara la ocnsulta
    $resultado=$base->prepare($sql);

    //se ejecuta la ocnsulata guardada en sql
    $resultado->execute(array(":nombre"=>$nombre,":apellido"=>$apellido,":cedula"=>$cedula,":bodega"=>$bodega,":usuario"=>$usua,":contra"=>$pass_cifrado));

    
    //cerrar tabla virtual
    $resultado->closeCursor();

    header("location:formulario_nuevos_regentes.php");

    
    

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