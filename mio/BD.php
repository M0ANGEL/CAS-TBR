<?php
$servidor="localhost";
$usuario="root";
$contras="";
$tabla="pruebas";

$conexion= mysqli_connect($servidor,$usuario,$contras,$tabla);

$usua=mysqli_real_escape_string($conexion,$_POST["usuario"]);
$contra=mysqli_real_escape_string($conexion,$_POST["contra"]);

$sql="select * from usuarios where usuario = '$usua' and pasword ='$contra'";

$resultado=mysqli_query($conexion,$sql);


while($fila=mysqli_fetch_row($resultado)){

    echo "bienvenido $usua <br><br> estos son tus datos: <br>";

    

}


mysqli_close($conexion); //cerrar cpnexion para qu no consuma recursos

?>

