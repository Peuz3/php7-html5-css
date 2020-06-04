<div class="titulo">Closure & Callable</div>

<?php
//Callable - o que pode ser chamado
$soma1 = function($a,$b){
    return $a + $b;
};

function soma2($a,$b){
    return $a + $b;
}

echo $soma1(2,3) . "<br>";
echo (is_callable($soma1) ? "Sim" : "Não") . "<br>";

echo soma2(3,4) . "<br>";
echo (is_callable(soma2)? "Sim" : "Não") . "<br>";

function executar($a, $b, $operacao, Closure $funcao){
    $resultado = $funcao($a,$b);
    echo "$a $operacao $b = $resultado<br>";
}


var_dump($soma1);
echo "<br>";

executar(20,300,"+", $soma1);
executar(20,30,"+", soma2); //não funciona pq a função não é uma closure

