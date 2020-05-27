<div class="titulo">Array</div>


<?php

$lista = array(1,2,3.4,"texto");
var_dump($lista);
echo '<br>';
print_r($lista);

//Modificando o array
$lista[0] = 123456789;

echo '<br>Acessando os elementos do array: ';
echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];
echo '<br>';
var_dump($lista[4]);//Null

//Melhor maneira de acessar um texto
//Lembrando que o acento gráfico conta 2 índices

$texto = 'Esse é um texto de teste';
echo '<br>' . $texto[0];
echo '<br>' . $texto[2];
echo '<br>' . $texto[11];

//Melhor maneira de acessar
echo '<br>' . mb_substr($texto,10,1);

?>