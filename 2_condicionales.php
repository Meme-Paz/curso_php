<?php
    //Condicionales
    $num1 = 12;
    $num2 = 12;

    if ($num1>$num2) {
        echo "$num1 es mayor que $num2";
    }
    elseif ($num1<$num2) {
        echo "$num1 es menor que $num2";
    }
    else {
        echo "Son el mismo numero";
    }

    echo '<hr>';

    $familia = 'Jose';
    switch ($familia) {
        case 'Claudia':
            echo "$familia es mi madre";
            break;
        case 'Jorge':
            echo "$familia es mi padre";
            break;
        case 'Oscar':
            echo "$familia es mi hermano";
            break;
        case 'Jose':
            echo "$familia es mi novio picioso <3";
            break;
        default:
            echo "No conozco a $familia";
            break;
    }
    
?>