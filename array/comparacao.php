<div class="titulo">Comparação Arrays</div>

<?php
$array1 = ['nome'=>'Erica', 'idade'=>26];
$array2 = ['nome'=>'Erica', 'idade'=>26];
var_dump($array1==$array2); //true
var_dump($array1===$array2); //true

$array3 = ['idade'=>26,'nome'=>'Erica' ];
echo '<br>';
var_dump($array1 == $array3); // true
var_dump($array1 === $array3); // false - a ordem muda a comparação dos arrays
var_dump($array1 !== $array3); //true

echo '<br>';
$array4 = ['idade'=>'26','nome'=>'Erica' ];
var_dump($array3 == $array4);
var_dump($array3===$array4);

?>