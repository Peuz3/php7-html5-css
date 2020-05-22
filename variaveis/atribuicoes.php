<div class="titulo">Atribuições</div>

<?php

$title = 'Atribuições';

$numero = 10;
echo '<br>' . $numero;

$numero = $numero - 2;
echo '<br>' . $numero;

$numero = $numero - 1.5;
echo '<br>' . $numero;

$numero--;
echo '<br>' . $numero;

$numero++;
echo '<br>' . $numero;

$numero **=2;
echo '<br>' . $numero;

$numero -=6;
echo '<br>' . $numero;

$numero +=6;
echo '<br>' . $numero;

$numero *=6;
echo '<br>' . $numero;

$numero /=6;
echo '<br>' . $numero;

$numero %=6;
echo '<br>' . $numero;


//Trabalhando com valor padrão

//$variavelInexistente = 5;
echo '<br>' . $variavelInexistente;
$valor = $variavelInexistente ?? 3;
echo '<br>' . $valor;


?>