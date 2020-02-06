<?php
    echo 'Hello PHP';

    //Ejericicios de arreglos
    $arreglo = [

        'keyStr1' => 'lado',
        0 => 'ledo',

        'keyStr2' => 'lido',
        1 => 'lodo',
        2 => 'ludo'
        
    ];

    //Escribe el código necesario para generar la cadena final usando el arreglo dado
    $cadenaFinal = '<br>';
    foreach($arreglo as $cadena){
        $cadenaFinal = $cadenaFinal . $cadena . ', ';
    }
    echo $cadenaFinal;

    //Escribe cadena al reves
    $cadenaFinalAlRevesArray = array();
    foreach($arreglo as $cadena){
        array_unshift($cadenaFinalAlRevesArray, $cadena);
    }

    $cadenaFinalAlReves = '<br>';
    foreach($cadenaFinalAlRevesArray as $palabra){
        $cadenaFinalAlReves = $cadenaFinalAlReves . $palabra .', ';
    }
    echo $cadenaFinalAlReves;

    //Crear arreglo multidimensional con paises y ciudades y luego imprimirlo
    $paises = [
        'El Salvador' => ['Ataco','Santa ana', 'San salvador'],
        'Mexico' => ['Monterrey','Queretaro', 'Guadalajara'],
        'Colombia' => ['Bogota','Cartagena', 'Medellin'],
    ];

    $nombrePaises = '<br>';
    foreach($paises as $pais => $ciudades){
        $nombrePaises = $nombrePaises. $pais . ': ';

        //Agregando otro foreach para recorrer array dentro de array
        foreach($ciudades as $ciudad){
            $nombrePaises = $nombrePaises . $ciudad . ' ';
        }

        $nombrePaises = $nombrePaises . '<br>';
    }
    echo $nombrePaises;

    //Escribe el código necesario para encontrar los 3 números más grandes y los 3 números más bajos de la siguiente lista:
    $valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];
    rsort($valores);

    echo '<br>';
    $losPrimeros3Mayores = array_slice($valores, 0, 3);
    //var_dump($losPrimeros3Mayores);
    $numerosMayores = '';
    foreach($losPrimeros3Mayores as $numeroActual){
        $numerosMayores = $numerosMayores . $numeroActual .' ';
    }
    echo $numerosMayores;

    sort($valores);
    echo '<br>';
    $losPrimeros3Menores = array_slice($valores, 0, 3);
    //var_dump($losPrimeros3Mayores);
    $numerosMenores = '';
    foreach($losPrimeros3Menores as $numeroActual){
        $numerosMenores = $numerosMenores . $numeroActual .' ';
    }
    echo $numerosMenores;

?>