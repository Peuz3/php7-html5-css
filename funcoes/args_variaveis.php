<div class="titulo">Argumentos Variáveis</div>

<?php
//Função com argumentos limitados
function soma($a, $b){
    return $a + $b;
}
echo soma(1,5,10,23). "<br>";//Soma os dois primeiros
echo soma(15,13) . "<br>";
echo soma(150,12) . "<br>";

//Utilizando argumentos variáveis
function somaCompleta(...$numeros){
    $soma = 0;
    foreach($numeros as $num){
        $soma += $num;
    }

    return $soma;
}

echo somaCompleta(1,5,10,23). "<br>"; //Soma todos os números
echo somaCompleta(14,6). "<br>";
echo somaCompleta(100,60). "<br>";

$array = [2,3,6];
echo "<br>" . somaCompleta(...$array);

function membros($titular, ...$dependentes){
    echo "Titular: $titular <br>";
    if($dependentes){
        foreach($dependentes as $dep){
            echo "Dependente: $dep <br>";
        }
    }
}

echo "<br>";
membros("Marcela", "Drica", "Manuela", "Marta");

echo "<br>";
membros("Jonas Gabriel");

echo "<br>";
membros("Marcela", "Drica");

