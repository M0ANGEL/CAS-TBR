<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table{
            width: 300px;
            margin: auto;
            background-color: aquamarine;
            border: 2px solid blue;
            padding: 5px;
        }
        
        td{
            text-align: center;
        }

        #boton{
            background-color: blue;
            border-radius: 15px;
            color: white;
        }
    </style>
</head>
<body>
    
    <form action="registros_PDO.php" method="post">

        <table><tr><td>
            Doc_Servinte</td><td>
            <input type="text" name="doc_servinte"></td></tr>

            <tr><td>Codigo</td><td>
            <input type="text" name="codigo"></td></tr>

            <tr><td>Medicamento</td><td>
            <input type="text" name="medicamento"></td></tr>

            <tr><td>Cantidad</td><td>
            <input type="text" name="cantidad"></td></tr>

            <tr><td colspan="2"><input id="boton" type="submit" name="enviando" value="enviar">
            </td></tr>
        </table>
    </form>

</body>
</html>