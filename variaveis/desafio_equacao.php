<div class="titulo"> Desafio Equação</div>

<?php
//Resolução da fração A
$numeradorA = pow(6 *(3+2),2);
$denominadorA = 3 * 2;

$fracaoA = $numeradorA / $denominadorA;
echo "Resultado da fração A: " . $fracaoA;

echo '<br>';

//Resolução da fração B
$numeradorB = (1-5) * (2-7);
$fracaoB = pow($numeradorB / 2,2);

echo "Resultado da fração B: " .$fracaoB;

echo '<br>';
//Junção das frações
$equacaoFracao = pow($fracaoA - $fracaoB,3);
echo "Resultado FINAL: " . $equacaoFracao / pow(10,3);

echo '<br>';
//Resultado final









?>