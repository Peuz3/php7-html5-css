<div class="titulo">Desafio Recursão</div>

<?php

$array = [1,2,[3,4,5],6,[7,[8,9]],10];

echo "Array: [1,2,[3,4,5],6,[7,[8,9]],10] <br>";

function imprimirArray($array, $nivel = '>'){
    
    foreach($array as $elemento){
       
        if(is_array($elemento)){
            
            imprimirArray($elemento, $nivel . $nivel[0]);

        }else{
            echo "$nivel $elemento <br>";
        }
    }
}

$a = [1,23,2];

imprimirArray($array);
imprimirArray($a);

//tentar o fatorial
echo "Trabalhando com fatorial recursivo: <br>";
function fatorial($fatorial){
    if($fatorial <=1){
        $fatorial = $fatorial;
    } else{
      $fatorial *=  fatorial($fatorial - 1);
      
    }

    return $fatorial;
}


echo "Resultado: " . fatorial(7);