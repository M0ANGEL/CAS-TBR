
<?php
    /* CREAR USUARIO */




    if(isset($_POST["registro"])){
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $usuarior=$_POST["usuario"];
        $contrar=$_POST["contra"];


    }




       /* PARA VALIDAR USUARIO CREADO */ 


    if(isset($_POST["enviado"])){
        $contra=$_POST["contra"];
        $usuario=$_POST["usuario"];
    }

    switch($usuario){

        case "angel":
           
            if($contra==$contrar){
                echo "INICIANDO SECION";
            }else{
                echo "CONTRASEÑA O USARIO INCORRECTO";
            }
        break;



        default:
            echo "USUARIO NO EXISTE";
    }

?>
