<?php
    //Funciones para texto
    $texto = "Hola mundo php <br>";

    //Convertir letras a Minusculas
    $minusculas = strtolower($texto);
    echo 'Letras en minuscula: ' . $minusculas;

    //Convertir a mayusculas
    $mayusculas = strtoupper($texto);
    echo "Letras en mayusculas: $mayusculas";

    //Primera letra mayuscula
    $primera_May = ucfirst($texto);
    echo 'Primera letra en mayuscula: '. $primera_May;

    //Primera letra de cada palabra mayuscula
    $cada_may = ucwords($texto);
    echo 'Primeras letras en mayuscula: '. $cada_may;

    //Contar caracteres
    $longitud = strlen($texto) - 5;
    echo 'Numero de caracteres: ' . $longitud;

    //Contar palabras
    $palabras = str_word_count($texto) - 1;
    echo '<br>Numero de palabras: ' . $palabras;

    echo '<hr>';

    //Convertir String en arrays

    $f1 = "2023/11/07";
    $f2 = "2023-03-31";
    $nombres = "Jose Areli Adriana Daniela Eliott";

    //explode (delimitador, string, limitador);
    $fecha_array = explode ('-', $f2);
    echo $fecha_array[1] . '<br>';

    $nombre_array = explode (' ', $nombres);
    echo $nombre_array[4] . '<br>';

    $limitador_array = explode (' ', $nombres, 3);
    echo $limitador_array[2] . '<br>';

    $limitador_array = explode (' ', $nombres, -2);
    echo $limitador_array[2];

    echo '<hr>';

    //Elevar a un exponente
    echo pow (5,3);
    echo '<br>'. pow(8,2);

    //Raiz cuadrada
    echo '<br>'. sqrt(144);

    //Numeros aleatorios
    echo '<br>'. rand(1,20);

    //Pi
    echo '<br>'. pi();

    //Redondear numeros
    echo '<br>'. floor(4.3); //Al minimo (<--)
    echo '<br>'. ceil(4.3); //Al maximo (-->)
    echo '<br>'. round(8.5); //Redondeo al numero proximo
    echo '<br>'. round(78.576, 2);//Redondear decimales a 2

    //Formatear numeros
    $can1 = 65234.83;
    $can2 = 3648.12;

    //number_format(cantidad,decimales,separador_decimal,separador_millares)
    echo number_format($can1,2,'.', ',');
?>