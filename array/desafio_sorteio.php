<div class="titulo">Desafio Sorteio</div>

<?php

$nomes = ["Elza", "Rapunzel", "Branca de Neve","Cinderela"];
$sorteio = array_rand($nomes);
//var_dump($sorteio);
echo 'Ganhadora: ';
echo "<h1> $nomes[$sorteio]  </h1>"

?>