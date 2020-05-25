<div class="titulo">Desafio PI</div>

<?php

echo pi();
$pi = 3.14;
$piErrado = 2.08;


echo "<br>";
echo $pi - pi();

echo "<br>";
echo $piErrado - pi();


if($pi - pi() <=0.01){
    echo "<br>Praticamente iguais!";
}else{
    echo "<br>Valor errado!";
}


?>