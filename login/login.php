<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>




    <style>

        h1{
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

<h1>Introduce tus datos</h1>
<form action="comprueba_login.php" method="post">
    <table>
        <tr><td class="izq">Login:</td><td class="der">
        <input type="text" name="login"></td></tr>

        <tr><td class="izq">password</td><td class="der">
        <input type="password" name="password"></td></tr>

        <tr><td colspan="2"><input id="boton"  type="submit" value="LOGIN"></td></tr>
    </table>




</form>
</body>
</html>