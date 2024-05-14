<style>
        h1{
            text-align: center;
        }
        table{
            background-color: #ffc;
            padding: 5px;
            border: #666 5px solid;
        }

        .no_valido{
            font-size: 18px;
            color: #ffc;
            font-weight: bold;
        }

        .valido{
            font-size: 18px;
            color: red;
            font-weight: bold;
        }
</style>


<!-- funcios swirch -->
<?php
    if(isset($_POST["enviado"])){

        $edad=$_POST["edad_usuario"];
        $nombre=$_POST["nombre_usuario"];

        /* esto es un switch para varias opciones */

        switch($nombre){

            case $nombre=="juan" && $edad==18:
                echo "puedes ingresar. Juan";
                break;
            case $nombre=="angel" && $edad<=18:
                echo "puedes ingresar. angel";
                break;
            case "miguel":
                echo "puedes ingresar. miguel";
                break;
            default:
                echo "no existe";
        
        }

        /* if($edad<0){
            echo "digita edad valida";
    
    
        }else if($edad <=18){                                       
            echo "eres menor de edad";

        }else if($edad<=40){
            echo "eres joven";

        }else if($edad<=65){
            echo "ers maduro";

        }else if($edad<=100){
            echo "cuidate";
        }else{
            echo "ya estas muero";
        } */



    }




?>