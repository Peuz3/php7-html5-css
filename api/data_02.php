<div class="titulo">Datas #02</div>

<?php
$formatoData1 = 'D, d \d\e M \d\e Y';
$formatoData2 = '%A, %d de %B de %Y';
$formatoDataHora = '%A, %d de %B de %Y - %H:%M:%S';


$agora = new DateTime();

// print_r($agora);
// echo "<br>";

echo $agora->format($formatoData1) . "<br>";

setlocale(LC_TIME, 'portuguese.utf-8');
echo strftime($formatoData2, $agora->getTimestamp()) . "<br>";

$dataFixa = new DateTime('1993-05-17 18:55:00');
echo strftime($formatoDataHora, $dataFixa->getTimestamp()) . "<br>";

$amanha = new DateTime("+2 day");
echo strftime($formatoData2, $amanha->getTimestamp()) . "<br>";

$amanha->modify('+6 day');
echo strftime($formatoData2, $amanha->getTimestamp()) . "<br>";

$amanha->setDate(2012,9,1);
echo strftime($formatoDataHora, $amanha->getTimestamp()) . "<br>";

$dataPassada = new DateTime('2000-05-17');
$dataFutura = new DateTime('2030-11-22');
$outrData = new DateTime('2030-11-22');

echo($amanha > $dataPassada ? 'Maior' : 'Menor') . '<br>';
echo($amanha > $dataFutura ? 'Maior' : 'Menor') . '<br>';
echo($dataFutura == $outrData ? 'Igual' : 'Diferente') . '<br>';
echo($dataFutura === $outrData ? 'Igual' : 'Diferente') . '<br>';

echo 'TimeZone: ';

$timeZone = new DateTimeZone('America/Bahia');
$agora = new DateTime(null, $timeZone);
echo $agora->format('d/M/Y H:i:s');





