<div class="titulo">Mapa</div>


<?php 
//Chave Valor
$dados = array (

    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.5
);

//Imprimir o array
print_r($dados);

//Acessar os elementos (por chaves)
echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados['peso'];
echo '<br>' . $dados['outra']; // NULL
var_dump($dadoss['outra']);

//Adicionando 
$dados["salario"] = 1200;
echo '<br>' . $dados['salario'];




?>