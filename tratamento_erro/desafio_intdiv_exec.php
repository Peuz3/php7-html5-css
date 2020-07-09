<div class="titulo">Desafio intdiv</div>

<?php

use App\Math\MathIntDivException as AritmeticaException;

require_once ('desafio_intdiv.php');

use function \App\Math\intdiv;

try{
    echo "Resultado: " . intdiv(8 , 3) . "<br>";
    
} catch(AritmeticaException $e){
    echo "Erro encontrado: {$e->getMessage()}" ."<br>";
}

try{
    echo "Resultado: " . intdiv(8 , 0) . "<br>";
} catch(AritmeticaException $e){
    echo "Erro encontrado: {$e->getMessage()}" ."<br>";
}

echo "Resultado: " . intdiv(8 , 2) . "<br>";
echo "Resultado: " . \intdiv(8 , 3) . "<br>";

