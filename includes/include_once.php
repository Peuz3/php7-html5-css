<div class="titulo">Include Once</div>

<?php
ini_set('display_errors',1);

include('include_once_arquivo.php');
require('include_once_arquivo.php');

//Acessando
echo "Variavel = '{$variavel}' . <br>";
//Alterando
$variavel = "Variavel Alterada";
echo "Variavel = '{$variavel}' . <br>";

include("include_once_arquivo.php");
echo "Variavel = '{$variavel}' . <br>";
$variavel = "Variavel Novamente Alterada";
echo "Variavel = '{$variavel}' . <br>";

//Não carrega novamente a variável
include_once("include_once_arquivo.php");
echo "Variavel include_once = '{$variavel}' . <br>";

require_once("include_once_arquivo.php");
echo "Variavel require_once = '{$variavel}' . <br>";


