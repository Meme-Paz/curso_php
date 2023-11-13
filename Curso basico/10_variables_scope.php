<?php
    //Variables Scope
    $edad = 28;
    function persona(){
        $edad = 12;
        //global $edad;
        return $edad;
    }

    echo persona();
    echo " y $edad";

    echo '<br>';

    echo '<hr>';

    function rangos($edad){
        switch ($edad) {
            case $edad<=12:
                return 'Eres un niño';
                break;
            case $edad<=19:
                return 'Eres un adolescente';
                break;
            case $edad<=39:
                return 'Eres un joven adulto';
                break;
            case $edad<=64:
                return 'Eres un adulto de mediana edad';
                break;
            case $edad>=65:
                return 'Eres una persona mayor';
                break;
            default:
                return 'Rango incorrecto';
                break;
        }
        
    }
    echo rangos(80);
?>