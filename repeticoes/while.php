<div class="titulo">While / Do While</div>

<?php

const VALOR_LIMITE = 10;
$contador = 0;

while($contador <= VALOR_LIMITE){
    echo "while $contador <br>";
    $contador++;
}

$contador = 0;

do{
    echo "do-while $contador<br>";
    $contador++;
} while($contador < VALOR_LIMITE);



?>