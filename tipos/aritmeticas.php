<div class="titulo"> Operações Aritméticas</div>

<?php 

echo 1 + 1, '<br>';
var_dump(1+1);
echo '<br>';
echo 1 +1.25, '<br>';
echo 10-9, '<br>';
echo 56 * 13, '<br>';
echo 7 / 4, '<br>';
echo intdiv(7/4), '<br>';
echo round(7/4), '<br>';
echo 7 % 4, '<br>';
echo 7%2, '<br>';
echo 8%2, '<br>';
echo 7/0, '<br>';
//echo intdiv(7/0); error!
echo 4**2, '<br>'; //exponencial

//Precedência de operadores
//

echo '<p>Precedência</p>';
echo '() => ** => / * % => + -', '<br>';
echo 2+3 *4, '<br>';
echo (2+3)*4, '<br>';
echo 2+3*4**2, '<br>';
echo ((2+3)+4)**2;




?>