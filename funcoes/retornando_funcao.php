<div class="titulo">Retornando Função</div>

<?php
function soma($a){
    return function($b) use ($a){
        return $a + $b;
    };
}

echo soma(10)(2);


function nome($nome){
    return function($banco) use ($nome){
        return "Sr(a), $nome , seja muito bem-vindo(a) ao $banco";
    };
}
echo "<br>";
echo nome("João Pedro")("BB");

function calculoMercadoria($valor){
    return function($imposto, $taxa = 5.25) use ($valor){
        $valorCalculado = 0;
        $valorCalculado += ($valor + (($imposto/100) * $taxa)); 
        return $valorCalculado;
    };
}


echo "<br>";
$valor = 1200;
echo "Valor da Mercadoria: R$ $valor <br>"
    . "Valor c/ imposto & taxa: R$ " . calculoMercadoria($valor)(22);
