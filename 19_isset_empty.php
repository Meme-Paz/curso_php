<?php
    //$numero = NULL;

    $numero = 9;

    //Destruye o elimina variables
    //unset($numero);

    if (is_null($numero)) {
        echo 'Variable nula';
    } else {
        echo "Variable con valor $numero";
    }
    echo '<br>';

    //Comprueba si la variable no esta vacia
    $digito=8;

    if (empty($digito)) {
        echo 'Variable vacia';
    } else {
        echo "Variable con valor $digito";
    }

    //Comprueba si la variable esta definida y no es nula
    echo '<br>';
    $num = 20;
    if (isset($num)) {
        echo "Variable con valor $num";
    } else {
        echo "Variable vacia";
    }

?>