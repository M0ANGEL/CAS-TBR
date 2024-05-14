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

                    //la variable session si esta registrado crea una sesion
                    //y guarda los datos
                    
                    session_start();

                    $_SESSION["usuario"]=$_POST["login"];

                    

                }else{
                    
                    echo "credenciales no validas";

                }


            }catch(Exception $e){

                die("Error : " . $e->getMessage());





            }
        }

    ?>
    

    <?php
        if(!isset($_SESSION["usuario"])){
            include("formulario.php");
        }else{
            echo "usuario: " . $_SESSION["usuario"];
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
    



</body>
</html>