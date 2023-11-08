<?php
    //Arreglos, vectores, arrays
    $Meses = array('Enero, ', 'Febrero, ','Marzo, ','Abril');
    var_dump($Meses); //Tipo de caracter
    echo '<br>';
    print_r($Meses); //Posiciones y valor

    echo '<hr>';

    $string = 'Esmeralda';
    $Numero = 80;
    var_dump($string);
    var_dump($Numero);
    echo "<br>Mes: ", $Meses[2];

    echo '<hr>';

    //Array Asociativo
    $Contacto = array('Nombre' => 'Jose', 'Apellido' => 'Garcia', 'Edad' => 23);
    print_r($Contacto);

    echo "<br> Mi novio es: ", $Contacto['Nombre']; 

    echo '<hr>';

    for ($i=0; $i < count($Meses); $i++) { 
        echo $Meses[$i], ' ';
    }
?>