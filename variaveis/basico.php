<div class="titulo">Variáveis</div>

<?php

$numero = 13;
echo $numero, '<br>';
var_dump($numero);

echo '<br>';
$a = 15;
$b = 9;
$soma = $a + $b;
echo $soma;
$somaBeta = 0;
echo '<br>';
//Saber se a variável está setada
echo isset($somaBeta);

echo '<br>';
unset($somaBeta);
var_dump($somaBeta);


echo '<br>';
$variavel = 500;
echo $variavel;
echo '<br>';
$variavel = "Agora sou uma string";
echo $variavel;

//Nomes de variaveis
$var = "valida";
$var2 = "valida";
$VAR3 = "valida";
$_var_4 = "valida";
$vár5 = "valida" //Evitar acentos
//$6var Inválida
//$%var7 Invalida
//$var8% Invalida 




?>