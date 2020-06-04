<div class="titulo">Argumentos & Retorno</div>

<?php
function obterMensagem(){
    return "Seja bem-vindo";
}
//Não aparace nada na tela
obterMensagem();
$mensagem = obterMensagem();
echo $mensagem;
echo "<br>", obterMensagem();
echo "<br>";

var_dump(obterMensagem());

function obterMensagemComNome($nome){
    return "Seja Bem-Vindo, {$nome}";
}

echo "<br>", obterMensagemComNome("João");
echo "<br>", obterMensagemComNome("Erica");

function soma($a, $b){
    return $a + $b;
}
$x = 32;
$y = 25;
echo "<br>", soma(5,3);
echo "<br>", soma(165,389);
echo "<br>", soma($x,$y);

function trocarValor($a, $novoValor){
    $a = $novoValor;
}

$variavel = 10;
trocarValor($variavel, 15);
echo "<br>", $variavel;

function trocarValorDeVerdade(&$a, $novoValor){
    $a = $novoValor;
}

trocarValorDeVerdade($variavel, 500);
echo "<br>", $variavel;
