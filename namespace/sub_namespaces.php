<?php namespace App; ?>
<div class="titulo">Sub-Namespaces</div>

<?php

echo "O namespace é: " .  __NAMESPACE__ . "<br>";
const CONSTANTE = 123;

namespace App\Principal;
echo "O seu namespace é: " .  __NAMESPACE__ . "<br>";
const CONSTANTE = 456;

namespace App\Principal\Especifico;
echo "O seu namespace é: " .  __NAMESPACE__ . "<br>";
const CONSTANTE = 789;

//Mostrando as constantes
echo CONSTANTE  . '<br>';//789
echo constant('\\'. __NAMESPACE__ . '\CONSTANTE') . '<br>';//789
echo \App\CONSTANTE . '<br>';//123
echo \App\Principal\CONSTANTE . '<br>';//456
echo \App\Principal\Especifico\CONSTANTE . '<br>';//789
