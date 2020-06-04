<div class="titulo">Desafio Palíndromo</div>

<?php

function palindromo($palavra){
    //Colocando em minuscula
    $palavra = strtolower($palavra);
    
    if($palavra == strrev($palavra)){
        return 'Sim, é um palíndromo';
    } else{
        return 'Não, é um palíndromo';
    }
}
echo palindromo("ana") . "<br> ";
echo palindromo("arara") . "<br> ";
echo palindromo("abccba") . "<br> ";
echo palindromo("bola") . "<br> ";
echo "<br>";

//OUTRA FORMA DE FAZER
function palindromoComFor($palavra){
    $ultimoIndice = strlen($palavra) - 1;
    for($i = 0; $i <=$ultimoIndice; $i++){
        if($palavra[$i] !== $palavra[$ultimoIndice-$i]){
            return 'Não';
        }
    }

    return 'Sim';
}

echo palindromoComFor("ana") . " ";
echo palindromoComFor("arara") . " ";
echo palindromoComFor("abccba") . " ";
echo palindromoComFor("bola") . " ";