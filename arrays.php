<?php 
    //dos clases de aray
    //arrays indexados

    //echo $mis_numeors[2];

    //arrays asociativos

    //echo $mis_numeors["valor2"];

    //--------------------------------------------------------------------------
    //ejemplos arrays indexados
    $diaSemanas[]="lunes";
    $diaSemanas[]="martes";
    $diaSemanas[]="miercoles";
    $diaSemanas[]="jueves";
    $diaSemanas[]="viernes";
    $diaSemanas[]="sabado";
    $diaSemanas[]="domingo";


    //echo $diaSemanas[0];


    //-----------otra forma

    /* $semana=array("lunes","martes","miercoles","jueves","viernes","sabado","domingo");
    echo $semana[6]; */

    //--------------------------------------------------------------------------------
    //arrays asociativos


    //no repetir nombre de array igual que una v
     $datos=array("nombre"=>"miguel", "apellido"=>"Riaco","edad"=>21); 

    /* $datos="angel"; */

    //para ver si es un array para no poner ese nombre en una variable


    if (is_array($datos)){
        echo "esto ya esta como array rey";
    }else{
        echo "esta libre para usar";
    }
    



?>