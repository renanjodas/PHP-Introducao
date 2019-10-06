<?php

    $tabuada = 4;
    $contador = 1;
    $resultado = 0;

    while($contador <=9){
        $resultado = $contador * $tabuada;
        echo "$contador * $tabuada = $resultado <br>" . PHP_EOL;
        $contador++
    }

?>