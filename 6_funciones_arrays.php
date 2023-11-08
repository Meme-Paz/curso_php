<?php
    //Funciones rapidas con arrays
    $Month = array('Enero<br>', 'Febrero<br>','Marzo<br>','Abril<br>','Mayo<br>','Junio<br>','Julio<br>','Agosto<br>','Septiembre<br>','Octubre<br>','Noviembre<br>','Diciembre<br>');
    echo 'Valores del Array:<br>';
    print_r($Month);
    
    //Array Chunk: Dividir el array en partes iguales
    echo '<br>Dividiendo entre cuatro elementos:<br>';
    $chunk_funcion = array_chunk($Month, 4);
    print_r($chunk_funcion);

    //Array Slice: Elimina elementos necesarios
    echo '<br>Eliminando los primeros cinco elementos:<br>';
    $slice_funcion = array_slice($Month, 5);//Si al numero le agregas un -, solo seleccionara los ultimos 5
    print_r($slice_funcion);

    //Array Slice: Elimina elementos necesarios
    echo '<br>Eliminando los ultimos cinco elementos:<br>';
    $slice_funcion2 = array_slice($Month, 0, 4);//(funcion, inicio, elementos)
    print_r($slice_funcion2);

    //Array Merge: Une dos arrays
    echo '<br>Array nuevo:<br>';
    $dias = array('Lunes<br>', 'Martes<br>', 'Miercoles<br>', 'Jueves<br>', 'Viernes<br>');
    print_r($dias);
    echo '<br>Uniendo los dos Arrays:<br>';
    $merge_funcion = array_merge($slice_funcion2, $dias);
    print_r($merge_funcion);

    //Array Pop: Eliminar el ultimo elemento
    echo '<br>Eliminando el ultimo elemento:<br>';
    array_pop($Month);
    print_r($Month);

    //Array Search: Buscar elemento
    echo '<br>Buscando un elemento del Array: ';
    $buscar = array_search('Mayo<br>',$Month);
    print_r($buscar);

    //Array Reverse: Invierte el Array
    echo '<br>Invirtiendo el Array:<br>';
    $reverso = array_reverse($Month);
    print_r($reverso);
?>

