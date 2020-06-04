<div class="titulo">Função & Escopo</div>

<?php
//Declarando uma função
function imprimirMensagem(){
    echo "Olá, minha Função. ";
    echo "Até a próxima! <br>";
}

//Chamando-a
imprimirMensagem();
imprimirMensagem();
imprimirMensagem();

//Entendo Escopo
$variavel = 1;

function trocarValor(){
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocarValor();
echo "Durante: $variavel <br>";

//Troca o valor da variavel com a palavra reservada global
function trocarValorDeVerdade(){
    global $variavel;
    $variavel = 3;
    echo  "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocarValorDeVerdade();
echo "Durante: $variavel <br>";