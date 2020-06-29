<div class="titulo">Include</div>

<?php
$valor = 15.02;
$taxaImportacao = 5.25;

echo "Estou no include.php <br>";
include ('include_arquivo.php');
//include ('include_arquivo.php');

echo "Total: R$" . soma($valor,$taxaImportacao);
echo "<br>O conteúdo da variável é: {$variavel}";