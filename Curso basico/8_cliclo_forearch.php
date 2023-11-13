<?php
    //Ciclo forearch
    $Personajes = array('Percy' => 'Poseidon', 
    'Annabeth' => 'Atenea', 'Niko' => 'Hades', 
    'Clarisse' => 'Ares', 'Luke' => 'Hermes');

    foreach ($Personajes as $hijo => $padre) {
        echo $hijo,' es hijo de ',$padre,'<br>';
    }
?>