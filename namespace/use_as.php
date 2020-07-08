<?php namespace App\Recursos\Governo\Estadual; ?>
<div class="titulo">Use/As</div>

<?php
echo "O namespace é: " .  __NAMESPACE__ . "<br>";

require_once('use_as_arquivo.php');

function valorProdutoFinal($valorProduto){
    return $valorProduto +  10;
}

class Governo{
    public $var;

    function func(){
        echo __NAMESPACE__ . ' ->' 
            .__CLASS__ . ' ->' . __METHOD__ . '<br>';   
    }
}

echo "Imposto Federal: R$ " . \App\Recursos\Governo\Federal\IMPOSTO_FEDERAL . '<br>'; //absoluto

//Relativo - pDE estou no contexto do use
use const \App\Recursos\Governo\Federal\IMPOSTO_FEDERAL;
echo "R$ " .  IMPOSTO_FEDERAL . '<br>'; 

//Alias
use App\Recursos\Governo\Federal as govFederal;
echo valorProdutoFinal(50) . '<br>';

echo govFederal\valorProdutoFinal(50) . '<br>';

//Utilizando use com função
//Conflito de nomes das funções
use function App\Recursos\Governo\Federal\valorProdutoFinal as valorFinal;
echo "R$ " . valorFinal(60) . '<br>';

//Acessando a classe Estadual
$estadual = new Governo();
$estadual->func();

//Acessando a classe Federal
$federal = new  \App\Recursos\Governo\Federal\Governo();
$federal->func();

//Acessando a classe federal com Alias já definido
$federal2 = new govFederal\Governo();
$federal2->func();

use \App\Recursos\Governo\Federal\Governo as FederalAlias;
$federal3 = new FederalAlias();
$federal3->func();