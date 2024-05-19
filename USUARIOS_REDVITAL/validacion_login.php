<?php



    try{

        //jajja vamos bien, aqui recibo el texo en minusculas strtolwer
        $usuario=strtolower(htmlentities(addslashes($_POST["usuario"])));
        $contra=htmlentities(addslashes($_POST["contra"]));

       
        //-----------------consulta admin--------------------
        require("conexionBD.php");
       /*  $base=new PDO("mysql:host=localhost; dbname=usuario_registros", "root", "");

        $base->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); */
    
        $sql1="select * from qf where usuario=:usuario";
    
        $resultado2=$base->prepare($sql1);
    
        $resultado2->execute(array(":usuario"=>$usuario));

        while($registro2=$resultado2->fetch(PDO::FETCH_ASSOC)){

            if(password_verify($contra, $registro2["contra"])){

                $contador2++;

            }

        }

        //-----------------------------consulta regentes--------------------
        
        $sql="select * from registro_usuario where usuario=:usuario";
    
        $resultado=$base->prepare($sql);
    
        $resultado->execute(array(":usuario"=>$usuario));

        while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

            if(password_verify($contra, $registro["contra"])){

                $contador++;

            }

        }

        //-------------funciones---------------------------
        
        function loginAdmin(){

            if(!$usuario==$registro2["usuario"]){
                
                header("location: login.php");
          
            }

            session_start();

            $_SESSION["usuario"]=strtolower($_POST["usuario"]);

            header("location: QF.php");

            $resultado2->closeCursor();

        }
        //-------------------------------------------

        function regentes(){

            if(!$usuario==$registro["usuario"]){
                
                header("location: login.php");
          
            }

            session_start();

            $_SESSION["usuario"]=strtolower($_POST["usuario"]);

            header("location: menu_inicio.php");

            $resultado->closeCursor();

        }

        //---------comprobar contador para llamar a las funciones

        if($contador2>0){
            loginAdmin();
        }elseif($contador>0){
            regentes();
        }else{
            header("location: login.php");
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