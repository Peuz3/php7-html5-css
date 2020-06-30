<div class="titulo">Require & Return</div>

<?php
$valorRetorno = require('return_usado.php');
echo "$valorRetorno<br>";
echo "$variavelRetornada<br>";

//Pasta usada no momento

echo "URL = " . __DIR__ .  "<br>";

//URL absoluta
$valorRetorno2 = require(__DIR__ . '/return_nao_usado.php');
echo "$valorRetorno2<br>"; //retorna 1 se verdadeiro
echo "$variavelDeclarada<br>"; //acessando a variavel do arquivo
