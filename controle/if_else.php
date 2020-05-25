<div class="titulo">If Else</div>


<?php

if(true)
{

     echo "Serei impresso?<br>";
}

if(false)
{

    echo "Verdadeiro<br>";
}
else
{
    echo "Falso<br>";
}




if(false){
    echo "Parte 1 <br>";
}else if(true){
    echo "Parte 2 <br>";
}else{
    echo "Último passo";
}
$a = 5;
$b = 3;

$soma = $a + $b;

if($soma >= 7){
    echo "Aprovado<br>";
}else{
    echo "Reprovado<br>";
}


echo "Fim<br>";
?>