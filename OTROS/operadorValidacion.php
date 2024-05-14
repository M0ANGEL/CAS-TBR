<link rel="stylesheet" href="stylos.css">
<?php
    //el pos permite que uando se de click en enviar ejecute el codigo
    if(isset($_POST["enviado"])){

        $usuario=$_POST["nombre_usuario"];
        $edad=$_POST["edad_usuario"];

        if($usuario=="juan" && $edad >= 18){
            echo"<p class='validado'>puesdes entrar</p>";
        }else{
            echo "<p class='no_validado'>no puedes entar</p>";
        }
        
    }
   
    ?>