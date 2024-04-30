<?php 

    //recorrer un array asociativo


/* 
    $datos=array("nombre"=>"miguel", "apellido"=>"Riaco","edad"=>21); 

    $datos["pais"]="Espana"; asi se agregaa un valor en el array asociativos

    foreach($datos as $clave=>$valor){

        echo "A $clave le corresponde $valor <br>";
    } */



    //recoorer un array indexado
    $semana=array("lunes","martes","miercoles","jueves","viernes","sabado","domingo");
    
    $semana[]="festivo";//para agreggar datos al array, lo agrega en la ultima posicion

    /* for($i=0;$i<7;$i++){}  cuando se saben cuantos ellementos tiene el array*/
    /* for($i=0;$i<count($semana);$i++){  cuando no se sabe cuantos elemntos tiene el array se usa el count
        echo $semana[$i] . "<Br>";
    }

    $semana[]="festivo"; */

    //------------------------------------ordenar array----------------

    $numeros=array(10,2,31,4,78,6,7);
    sort($numeros);//para ordenar de menor a mayor

    for($i=0;$i<count($numeros);$i++){ //recorre array

        echo $numeros[$i] . "<br>";

    }
    
  
   




























?>