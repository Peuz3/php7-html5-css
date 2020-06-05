<div class="titulo">Map & Filter</div>

<?php
$notas = [5.8,7.3,9.8,6.7];
$notasFinais1 = [];

foreach($notas as $nota){
    $notasFinais1[] = round($nota);
}

//Mostrando as notas arredondadas
foreach($notasFinais1 as $notaFinal){
    echo $notaFinal . " ";
}

//Utilizando o MAP
echo "<br>";
$notasFinais2 = array_map(round, $notas);

//Mostrando as notas arrendondadas
foreach($notasFinais2 as $notaFinal2){
    echo $notaFinal2 . " ";
}

// -------FILTER---------
echo "<br>";
$apenasOsAprovados1 = [];
foreach($notas as $notaFinal){
    if($notaFinal >= 7){
        $apenasOsAprovados1[] = $notaFinal;
    }
}

foreach($apenasOsAprovados1 as $aprovado){
    echo "$aprovado ";
}

//Utilizando o filter
echo "<br>";
function aprovados($nota){
    return $nota >= 7;
}

$apenasOsAprovados2 = array_filter($notas, aprovados);

foreach($apenasOsAprovados2 as $aprovado){
    echo "$aprovado ";

}

echo "<br>";
function calculoLegal($nota){
    $notaFinal = round($nota) + 1;
    return $notaFinal;
}
$notaFinal3 = array_map(calculoLegal,$notas);

foreach($notaFinal3 as $nota){
    echo "$nota ";
}
