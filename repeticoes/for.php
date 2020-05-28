<div class="titulo">Laço For</div>


<?php
for($contador = 1; $contador <=5; $contador++){
    echo "$contador <br>";

}

echo "<hr>";


for(;$contador <=10; $contador++){
    echo "$contador <br>";
}

echo "<hr>";


for(; $contador <=15;){
    echo "$contador <br>";
    $contador++;
}

echo "<hr>";

$array = [
    "Domingo",
    "Segunda",
    "Terça",
    "Quarta",
    "Quinta",
    "Sexta",
    "Sábado"
];

print_r($array);
echo "<br>";
echo "<hr>";
for($i = 0; $i < count($array);$i++ ){
    echo "{$array[$i]} <br>";
}

$matriz = [
    ['a','e','i','o','u'],
    ['b','c','d']
];

echo "<hr>";
//Para percorrer a matriz 2 laços for
for($i =0; $i < count($matriz); $i++){
    for($j = 0; $j < count($matriz[$i]); $j++){
        echo "{$matriz[$i][$j]} ";
    }

    echo "<br>";
}

?>