<?php
    //Funciones
    function mestizo($nombre, $apellido, $dios){
        echo "¡Bienvenido $nombre $apellido hij@ de $dios!<br>";
    }

    mestizo('Percy', 'Jackson', 'Poseidon');
    mestizo('Annabet', 'Chase', 'Atenea');
    mestizo('Niko', 'Di Angelo', 'Hades');

    echo '<hr>';

    function suma($n1, $n2){
        $suma = $n1 + $n2;
        return "$n1 + $n2 = $suma";
    }
    $resultado = suma(2,9);
    echo $resultado;
?>