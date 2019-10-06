<?php

    $altura = 1.80;
    $peso = 75;
    $resultado = $peso / $altura**2;

    echo "Peso: $peso <br>";
    echo "altura $altura <br>";
    echo "Com base na tabela do IMC você está: ";
    switch($resultado){
        case $resultado <18.5:
            echo "Abaixo do peso";
            break;
        case $resultado>=18.6 && $resultado<=24.9:
            echo "Peso ideal";
            break;
        case $resultado>=25.0 && $resultado<=29.9:
            echo "Levemene acima do peso";
            break;
        case $resultado>=30.0 && $resultado<=34.9:
            echo "Obesidade grau I";
            break;
        case $resultado>=35.0 && $resultado<=39.9:
            echo "Obesidade grau II(severa)";
            break;
        case $resultado>40:
            echo "Obesidade grau III(mórbida)";
            break;
    }

?>