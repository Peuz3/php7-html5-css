<?php namespace contexto; ?>

<div class="titulo">Exemplo Básico</div>

<?php
echo "O seu namespace é: " .  __NAMESPACE__ . "<br>";

const TAXA = 15.03;
//Contexto
define('contexto\TAXA_IMPORTACAO', 22.45);

//Raiz
define('TAXA_IMPORTACAO',2.79);

//Outra forma de criar uma constante 
define(__NAMESPACE__ . '\TAXA2',8.78);

//Constante de outro namespace
define('governo_federal\IMPOSTO',10.17);

function produtoComTributos($valorProduto){
    $valorProduto += TAXA  + TAXA_IMPORTACAO + \TAXA_IMPORTACAO + \governo_federal\IMPOSTO;
    return $valorProduto;
}

function strpos($str, $text){
    echo "Buscando o texto '{$text}' em '{$str}'<br>";
    return "Esta função pertençe ao namespace: " . __NAMESPACE__ ;
}

echo "Valor da Taxa: R$ " .  TAXA . "<br>";
echo "Valor da Taxa de Importação: R$ " . TAXA_IMPORTACAO . '<br>';
echo "Valor de outra Taxa de Importação: R$ " . \TAXA_IMPORTACAO . '<br>';
echo "Valor do imposto Governo Federal R$ " . \governo_federal\IMPOSTO . '<br>';
echo "Produto com Tributos: R$ " . produtoComTributos(2999.99);
echo '<br>';
echo strpos('Na voz ativa o objeto direto indica o ser passivo','objeto') . '<br>';
echo 'Função da API PHP Resultado:'
     . \strpos('Na voz ativa o objeto direto indica o ser passivo','objeto') . '<br>';