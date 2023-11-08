<?php
    //Ciclo While
    $numero = 1;
    while ($numero <= 10) {
        echo "$numero, ";
        $numero = $numero+1;
    }

    echo '<hr>';

    //Ciclo do while
    $num = 1;
    do {
        echo $num, ' ';
        $num++; //Abreviacion $numero = $numero+1;
    } while ($num <= 10);

    echo '<hr>';

    //Cliclo for
    
    for ($i=1; $i <=10 ; $i++) { 
        if ($i%2==0) {
            echo "$i, ";
        }
    }
?>