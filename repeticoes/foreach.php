<div class="titulo">Foreach</div>

<?php

$array = [
   1=> "Domingo",
    "Segunda",
    "Terça",
    "Quarta",
    "Quinta",
    "Sexta",
    "Sábado"
];

foreach($array as $diasSemanas){
    echo "$diasSemanas<br> ";
}

//Mostrando com o índice do array
foreach($array as $indice => $diasSemanas){
    echo "$indice => $diasSemanas<br>";
}

$matriz = [
    ['a','e','i','o','u'],
    ['b','c','d']
];

foreach($matriz as $letras){
    foreach($letras as $valorLetras){
        echo "$valorLetras";
    }

    echo "<br>";
}

//Modificando por referência de memória
$numeros = [1,2,3,4,5,6,7,8,9,10];
foreach($numeros as &$dobroNumeros){
    $dobroNumeros *= 2;
    echo "$dobroNumeros<br>";
}

print_r($numeros);


?>