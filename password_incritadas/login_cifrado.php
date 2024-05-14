<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    try{

        $login=htmlentities(addslashes($_POST["usuario"]));

        $contra=htmlentities(addslashes($_POST["contra"]));

        $contador=0;

        $base = new PDO("mysql:host=localhost; dbname=pruebas", "root", "");

        $base->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql="select * from usuario_pass where usuarios= :login";

        $resultado=$base->prepare($sql);

        $resultado->execute(array(":login"=>$login));

        while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

            if(password_verify($contra, $registro["password"])){

                $contador++;

            }

        }

        if($contador>0){

            echo "Usuario registrado";

        }else{

            echo "NO registrado";
        }

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