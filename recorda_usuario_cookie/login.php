<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>




    <style>

        h1, h2{
            text-align: center;
        }

        table{
            width: 25%;
            background-color: aqua;
            border: 2px solid red;
            margin: auto;
        }

        .izq{text-align: right;}

        .der{
            text-align: left;
        }
        td{
            text-align: center;
            padding: 10px;
        }

        #boton{
            background-color: blue;
            color: aliceblue;
            border-radius: 15px;
            text-align: center;
            font-size: 20px;
            padding: 15px;
        }
    </style>
</head>
<body>

    <?php

        $autenticar=false;

        if(isset($_POST["enviar"])){

            try{
                //conexion a base de datos
                $base = new PDO("mysql:host=localhost; dbname=pruebas","root","");

                $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                //consulta sql
                $sql="select * from usuario_pass where usuarios=:login and password=:pas";

                //preparacio de la consulta
                $resultado=$base->prepare($sql);

                //se recibe lo que vienne del formulario
                $usuario=htmlentities(addslashes($_POST["login"]));
                $contra=htmlentities(addslashes($_POST["password"]));

                $resultado->bindValue(":login", $usuario);
                $resultado->bindValue(":pas",$contra);


                //se ejcuta la consulta
                $resultado->execute();


                //aqui si hay registros el rowcount tendra un valor 1 y si no 0
                $numero_registro=$resultado->rowCount();

                if($numero_registro!=0){
                    
                    //si la consulata es exitosa el valor de la variable cambia hacer verdaer
                    $autenticar=true;

                    //aqui se valida que la casilla checkbox fue activada
                    if(isset($_POST["recordar"])){

                        //la casilla al ser activada se crea una cookies
                       
                        setcookie("nombre_usuario" , $_POST["login"], time() + 86400);

                    }
                    

                    

                }else{
                    
                    echo "credenciales no validas";

                }


            }catch(Exception $e){

                die("Error : " . $e->getMessage());





            }
        }

    ?>
    

    <?php
        
        if($autenticar==false){
            if(!isset($_COOKIE["nombre_usuario"])){
                include("formulario.php");
            }
        }

        if(isset($_COOKIE["nombre_usuario"])){
            echo "Hola: " . $_COOKIE["nombre_usuario"] . "!";
        }else if($autenticar==true){
            echo "Hola: " . $_POST["login"] . "!";
 
        }
    ?>
    <h2>contenido de la web</h2>
    <table  >
        <tr>
            <td><img src="imagenes/th (1).jpeg" width="300" height="160" alt=""></td>
            <td><img src="imagenes/th (2).jpeg" width="300" height="160" alt=""></td>
        </tr>
        <tr>
            <td><img src="imagenes/th (3).jpeg" width="300" height="160" alt=""></td>
            <td><img src="imagenes/th.jpeg" width="300" height="160" alt=""></td>
        </tr>
    </table>

    <?php

        if($autenticar==true || isset($_COOKIE["nombre_usuario"])){

            include("pagina.extras.html");

        } 


    ?>
    



</body>
</html>