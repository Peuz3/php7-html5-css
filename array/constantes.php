<div class="titulo">Constantes</div>

<?php

const FRUTAS = ['laranja','abacaxi'];
//FRUTAS[0] = 'banana'; error

echo FRUTAS[0];

const CARROS = ["Fiat"=> "Uno", "Ford"=>"Fiesta"];
echo '<br>' . CARROS['Fiat'];


//Outra forma de definir o array
define('CIDADES', array('Belo Horizonte','Recife'));
echo '<br>' . CIDADES[1];


?>