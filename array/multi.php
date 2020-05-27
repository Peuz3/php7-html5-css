<div class="titulo">Multidimensionais</div>

<?php

//Trabalhando com Arrays Multidimensionais
$dados = [

//Primeiro array
    [
        "nome" => "Roberto",
        "idade" => 26,
        "naturalidade" => "São Paulo"

    ],
// Segundo array

    [
        "nome" => "Maria",
        "idade" => 25,
        "naturalidade" => "Bahia"

    ],

];
//Imprime todos os elementos do array multi
print_r($dados);
//Imprime elemento do array
echo '<br>' . $dados[0]['idade']; //idade de Roberto
echo '<br>' . $dados[1]['idade']; //idade de Maria


//Add elementos no array multi
$dados[] = [
    
    "nome" => "Florinda",
    "idade" => 30,
    "naturalidade" => "Cidade do México"

];

echo '<br>';
print_r($dados);
echo '<br>' . $dados[2]['idade']; //idade de Florinda

//Add atributos nos arrays
$dados[2]['vizinho'] = "Chaves";
echo '<br>';
print_r($dados[2]);

//Removendo elementos - não reodernado
unset($dados[1]);
echo '<br>';
print_r($dados);
var_dump($dados[1]);//null



?>