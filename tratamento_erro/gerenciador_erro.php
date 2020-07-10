<div class="titulo">Erro Handler</div>

<?php

ini_set('display_errors', 1);
//echo 4 / 0  . "<br>";

//Não mostras as Warnings
error_reporting(E_ERROR);
//echo 4 / 0  . "<br>";

//Mostra tudo
error_reporting(E_ALL);
//echo 4 / 0  . "<br>";

//Não exibir nada
error_reporting(~E_ALL);
//echo 4 / 0  . "<br>";

echo "<hr>";
error_reporting(E_ALL);
echo 4 / 0 . '<br>';
include 'arquivo_inexistente';



function filtrarMensagem($errno, $errstring){
    $text = 'include';
    //$text = 'by zero';
    return !!stripos(" $errstring", $text);
}

echo "<hr>";
set_error_handler('filtrarMensagem', E_WARNING);
echo 4 /0 ;
include 'arquivo_inexistente.php';

echo "<hr>";
restore_error_handler();
include 'arquivo_inexistente';
