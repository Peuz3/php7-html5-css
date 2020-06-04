<div class="titulo">Funções Anônimas</div>

<?php
//Variavel que recebe uma função
$soma = function($a, $b){
    return $a + $b;
};
$multiplicacao = function($a,$b){
    return $a * $b;
};

function divisao($a, $b){
    return $a / $b;
}

function subtracao($a, $b){
    return $a - $b;
}

echo $soma(1,2) . "<br>";

function executar($a, $b, $operacao, $funcao){
    $resultado = $funcao($a,$b);
    echo "$a $operacao $b = $resultado<br>";
}

executar(2, 3, '+', $soma);
executar(2,3,"*",$multiplicacao);
executar(9,3,"/",divisao);
executar(9,3,"-",subtracao);