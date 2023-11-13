<?php    
    $numero = $_POST['numero'];
    for ($i=10; $i >=1 ; $i--) { 
        echo "$numero x $i = " . $i*$numero . "<br>";
    }
?>