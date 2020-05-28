<div class="titulo">Desafio For</div>


<!--
Desafio Laço For
Mostrar as seguintes cerquilhas abaixo:
    1- Utilizando o laço com incremento $i++
    2- Sem utilizar o incremento
 #
 ##
 ###
 ####
 #####
 -->   
<?php
$cerquilha = array(
    "#",
    "##",
    "###",
    "####",
    "#####"
);

for($i= 0; $i <count($cerquilha); $i++){
    echo "<br> {$cerquilha[$i]}";
} 

echo "<hr>";

$impressao = '';
for($cont = 1; $cont <=5; $cont++){
    $impressao .= '#';
    echo "$impressao<br>";
}

echo "<hr>";

for($impressao2 = '#';$impressao2 !="######";$impressao2 .="#"){
    echo "$impressao2<br>";
}


?>