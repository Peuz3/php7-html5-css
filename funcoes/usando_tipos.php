<div class="titulo">Usando Tipos</div>

<?php

function somar($a, $b){
    echo "<span> Somando $a + $b = </span>";
    return $a + $b;
}

echo somar(1,2)."<br>";
echo somar(1.75,3.72)."<br>";
echo somar(1,"4dois")."<br>";

function somarComTiposDefinidos(int $a, int $b){
    echo "<span> Somando $a + $b = </span>";
    return $a + $b;
}

echo somarComTiposDefinidos(1,2)."<br>";
echo somarComTiposDefinidos(1.75,3.72)."<br>"; //4
echo somarComTiposDefinidos(1,"4dois")."<br>";

function somarComRetornoInteiro($a, $b) :int {
    echo "<span> Somando $a + $b = </span>";
    return $a + $b;
}

echo somarComRetornoInteiro(1,2)."<br>";
echo somarComRetornoInteiro(1.75,3.72)."<br>";
echo somarComRetornoInteiro(1,"4dois")."<br>";