<div class="titulo">Operações</div>

<?php

$dados1 = [

    "nome" => "José",
    "idade"=> 28
];

$dados2 = [
    "naturalidade"=> "Fortaleza"
];

//União de arrays
$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos);
echo '<br>' . count($dadosCompletos);

echo '<br>';
$indice = array_rand($dadosCompletos);//escolhe de forma randomica
echo "$indice = $dadosCompletos[$indice]";
echo "<br>{$dadosCompletos['idade']}"; //interpolação
echo '<br>';
echo "${dadosCompletos['idade']}";//outra forma de interpolação

//Retirar elemento do array
unset($dadosCompletos["nome"]);
echo '<br>';
print_r($dadosCompletos);

$impares = [1,3,5,7,9];
$pares = [0,2,4,6,8];
echo '<br>';
//Não fará a união de forma correta e mostrará somente os elemento pares
$decimais = $pares + $impares;
print_r($decimais);

//Resolvendo o problema acima
$decimais = array_merge($pares,$impares);
echo '<br>';
print_r($decimais);

//Ordenação
sort($decimais);
echo '<br>';
print_r($decimais);


?>