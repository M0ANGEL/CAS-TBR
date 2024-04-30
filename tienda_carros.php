<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php  
    include("static.php");
    /*compra_vehiculo::$descuento=50000;  al no ser privado se puede manipular*/
    /* compra_vehiculo::descuento_all(); *///da desceunto a todos

    $compra_angel=new compra_vehiculo(0,"berlina");
    $compra_angel->climatizador();
    $compra_angel->tapiceria("negro");
    $compra_angel->navegador_gps();
    echo $compra_angel->precio_final() . "<br>";

    $compra_miguel=new compra_vehiculo(0, "urbano");
    $compra_miguel->climatizador();
    $compra_miguel->tapiceria("rojo");
    echo $compra_miguel->precio_final() . "<br>";

    $compra_jake=new compra_vehiculo(0, "compacto");
    $compra_jake->climatizador();
    $compra_jake->navegador_gps();
    $compra_jake->tapiceria("negro");
    $compra_jake->llantas("plusmas");
    echo $compra_jake->precio_final();

    
    

?>
</body>
</html>