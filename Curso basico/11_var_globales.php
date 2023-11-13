<?php

    //Variables globales
    //$GLOBALS Variable disponible en cualquier lugar disponible
    $num1 = 9;
    $num2 = 2;
    function sumar(){
        $GLOBALS['s'] = $GLOBALS['num1'] + $GLOBALS['num2'];
    }
    sumar();
    echo $s;

    echo '<hr>';

    //Palabras especiales
    echo 'Ruta del ejercicio: ',$_SERVER['PHP_SELF'];
    echo '<br>Dirección del servidor: ',$_SERVER['SERVER_NAME'];
    //echo '<br>Ruta especifica: ',$_SERVER['HTTP_REFERER'];

    //Metodo get
    $numero = $_GET['numero'];
    echo "El numero es: $numero";
?>