<div class="titulo">Argumento Padrão</div>

<?php

function saudacao($nome = "Senhor(a)", $sobrenome = "Cliente"){
    return "Bem-vindo(a), $nome $sobrenome! <br>";
}

echo saudacao(); //Mostrará o valor padrão
echo saudacao(null); //mostra somente Cliente
echo saudacao(null,null); //mostra somento o Bem vindo
echo saudacao("King", "Ragnar");

function anotarPedido($comida, $bebida = "Água"){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida<br>";
    
}

anotarPedido('Pizza', 'Coca-cola');
anotarPedido("Hamburguer");
anotarPedido("Brigadeiro");