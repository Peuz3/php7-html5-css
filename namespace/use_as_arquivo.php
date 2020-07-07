<?php namespace App\Recursos\Governo\Federal;

echo "O namespace é: " .  __NAMESPACE__ . "<br>";

const IMPOSTO_FEDERAL = 53.95;

function valorProdutoFinal($valorProduto){
    return $valorProduto + IMPOSTO_FEDERAL;
}

class Governo{
    public $var;

    function func(){
        echo __NAMESPACE__ . ' ->' 
            .__CLASS__ . ' ->' . __METHOD__ . '<br>';   
    }
}

