<div class="titulo">Datas #01</div>

<?php
//Mostra a quantidade de segundo do marco zero até o exato momento
//01/01/1970(Marco)
echo time() . "<br>";
echo date("D,  M  Y H:i A") . "<br>";

echo utf8_encode(strftime("%A, %d de %B de %Y", time())) . "<br>";


//setlocale(LC_TIME, 'Brazil' , 'pt_BR.utf-8'); 
//setlocale(LC_TIME, 'pt_BR.utf-8', 'portuguese-brazilian');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.UTF-8', 'pt_BR.utf-8', 'portuguese'); 


echo strftime("%A, %d de %B de %Y", time()) . "<br>";

$amanha = time() + (24 * 60 * 60);
echo utf8_encode(strftime("%A, %d, de %B de %Y", $amanha)) . "<br>";

$proximaSemana = strtotime("+1 week");
echo utf8_encode(strftime("%A, %d de %B de %Y",$proximaSemana)) . "<br>";

$proximosAnos = strtotime("+6 year");
echo utf8_encode(strftime("%A, %d de %B de %Y",$proximosAnos)) . "<br>";

$dataFixa = mktime(15,30,50,1,25,1975);
echo utf8_encode(strftime("%A, %d, de %B de %Y - %H:%M:%S", $dataFixa));

