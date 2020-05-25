<div class="titulo">Operadores Relacionais</div>

<?php

var_dump(111 == "111");
var_dump(111 === "111"); //compara os tipos int e string
var_dump(111 !== '111'); //diferença restrita
var_dump(111 != '111');


echo "<p>Relacionais If/Else</p><hr>";
$idade = 8;
if($idade <18){
    echo "Menor de idade = $idade anos de idade";
} else if($idade <=65){
    echo "Adulto = $idade anos de idade";
}else{
    echo "Terceira idade = $idade anos de idade";
}

echo "<p>Spaceship</p><hr>";
var_dump(500 <=>3); //retorna 1
var_dump(50<=>50); //retorna 0 
var_dump(5<=>50); //retorna -1 

echo "<p>Valores podem ser V ou F</p><hr>";
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");
?>

<style>
p{
    margin-bottom: 0px;
}

hr{
    margin-top: 0px;
}
</style>