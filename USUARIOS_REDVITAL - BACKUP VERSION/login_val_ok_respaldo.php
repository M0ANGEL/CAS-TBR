<?php



    try{

        //jajja vamos bien, aqui recibo el texo en minusculas strtolwer
        $usuario=strtolower(htmlentities(addslashes($_POST["usuario"])));

        echo $usuario;

        
    
        $contra=htmlentities(addslashes($_POST["contra"]));

       

        $contador=0;

        $base=new PDO("mysql:host=localhost; dbname=usuario_registros", "root", "");

        $base->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
        $sql="select * from registro_usuario where usuario=:usuario";
    
        $resultado=$base->prepare($sql);
    
        $resultado->execute(array(":usuario"=>$usuario));

        //costo pero lo logre, aqui puedo condicionar si le usuario es incorrecto
        if(!$usuario==$registro["usuario"]){
            header("location: login.php");
      
        } 
        
        

        while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

            if(password_verify($contra, $registro["contra"])){

                $contador++;

            }

        }
       

        $numero_registro=$resultado->rowCount();

        if($numero_registro!=0){

            //la variable session si esta registrado crea una sesion
            //y guarda los datos
            
            session_start();

            $_SESSION["usuario"]=strtolower($_POST["usuario"]);

            if($contador>0){
                
    
                header("location: menu_inicio.php");
    
            }else{
    
                header("location: login.php"); 
            }
    
            $resultado->closeCursor(); 

        }

        




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