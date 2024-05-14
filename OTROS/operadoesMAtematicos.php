<?php

    

    if(isset($_POST["button"])){
        $num1 = $_POST["num1"];  /* el metodo post es una variable super global que permite capturar lo que el usuario escribe */
        $num2 = $_POST["num2"];
        $operacion=$_POST["operacion"];

        calcular($operacion);

    }
    

    function calcular($calculo) {
        if(!strcmp("SUMA", $calculo)){

            global $num1;  /* para que la variable sea global  */
            global $num2;

            $resultados=$num1+$num2;

            echo "El resultado es: $resultados" ;
        }

        if(!strcmp("RESTA", $calculo)){

            global $num1;
            global $num2;
            $resultados=$num1-$num2;

            echo "El resultado es: $resultados";
        }

        if(!strcmp("MULTIPLICACION", $calculo)){

            global $num1;
            global $num2;
            $resultados=$num1*$num2;

            echo "El resultado es: $resultados";
        }

        if(!strcmp("DIVISION", $calculo)){

            global $num1;
            global $num2;
            $resultados=$num1/$num2;

            echo "El resultado es: $resultados";
        }

        if(!strcmp("MODAL", $calculo)){

            global $num1;
            global $num2;
            $resultados=$num1%$num2;

            echo "El resultado es: $resultados" ;
        }

        if(!strcmp("INCREMENTO", $calculo)){

            global $num1;
            $num1 ++;
            $resultados=$num1;

            echo "El resultado es: $resultados" ;
        }

        if(!strcmp("DECREMENTO", $calculo)){

            global $num1;
            $num1--;
            $resultados=$num1;

            echo "El resultado es: $resultados" ;
        }
    }



?>

