<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylos.css">
    <title>Document</title>
</head>
<body>
    <!-- aqui se crea un formulario que recibe dos numeros -->
    <p>&nbsp;</p>

    <h1>CALCULADORA</h1>
    <P>Escriba dos numeros y selepcione una operacion del menu</P>
    <form name="form1"  method="post" action="opMAtematicos2.php">
        <p>
            <label for="num1"></label>
            <input type="text" name="num1" id="num1">
            <label for="num2"></label>
            <input type="text" name="num2" id="num2">
            <label for="operacion"></label>
            <select name="operacion" id="operacion">
                <option >SUMA</option>
                <option >RESTA</option>
                <option >MULTIPLICACION</option>
                <option >DIVISION</option>
                <option >MODULO</option>
                <option >INCREMENTO</option>
                <option >DECREMENTO</option>
            </select>
        </p>
        <P>
            <input type="submit" name="button" value="Enviar" onclick="prueba">
        </P>

    </form>


    <p>&nbsp;</p>
    <!-- hasta aqui el formulario -->

    <!-- aqui inica codigo php -->


    <?php
        include ("opMAtematicos2.php")

    ?>




</body>
</html>
