<?php
    $frutas = array('Manzanas<br>', 'Naranjas<br>','Peras<br>','Sandias<br>','Uvas');
    echo "Array inicial: <br>";
    print_r($frutas);
    
    echo "<br><br>Fruta anterior: ", $frutas[2];

    //Cambiar variables
    $frutas[2] = 'Melones<br>';
    echo "Fruta nueva: ", $frutas[2];

    echo "<br>Array final: <br>";
    print_r($frutas);

    echo '<hr>';

    $Meses = array('Enero', 'Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
    for ($i=0; $i < count($Meses); $i++) { 
        if ($Meses[$i] == 'Marzo') {
            echo $Meses[$i],': Comienza la primavera<br>';
        } elseif ($Meses[$i] == 'Junio') {
            echo $Meses[$i],': Comienza el verano<br>';
        } elseif ($Meses[$i] == 'Septiembre') {
            echo $Meses[$i],': Comienza el otoño<br>';
        } elseif ($Meses[$i] == 'Diciembre') {
            echo $Meses[$i],': Comienza el invierno<br>';
        } else {
            echo $Meses[$i], '<br>';
        }        
    }

    echo '<hr>';

    echo '<br>Penultimo elemento:', $Meses[count($Meses)-2];
        
    $Month = array('Enero<br>', 'Febrero<br>','Marzo<br>','Abril<br>','Mayo<br>','Junio<br>','Julio<br>','Agosto<br>','Septiembre<br>','Octubre<br>','Noviembre<br>','Diciembre<br>');
    echo '<br>Elementos ordenados afabeticamente ascendente:<br>';
    asort($Month);
    print_r($Month);
    echo '<br>Elementos ordenados afabeticamente descendente:<br>';
    arsort($Month);
    print_r($Month);
    echo '<br>Moviendo el numero de elemento:<br>';
    rsort($Month);
    print_r($Month);

?>