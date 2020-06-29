<div class="titulo">Include vs Require</div>

<?php
//Mostrar o erros
ini_set("display_errors",1);
//Include
echo "Carregando um arquivo inexistente include...<br>";
include("validacaoCPF.php");
echo "Continuo funcionado...<br>";
//Require
echo "Carregando um arquivo inexistente com require...<br>";
require("validacaoCPF.php");
echo "Continuo funcionando???"; //não :D


