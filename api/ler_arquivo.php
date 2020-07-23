<div class="titulo">Ler Arquivo</div>

<?php
//Lendo por byte
$arquivo = fopen("api/texto.txt",'r');
echo fread($arquivo, 10) . "<br>";
echo fread($arquivo,10);
fclose($arquivo);

echo "<hr>";
$arquivo = fopen("api/texto.txt",'r');
$tamanho = filesize("api/texto.txt");
echo "Tamanho do arquivo: {$tamanho} bytes" , "<br>";
echo fread($arquivo, $tamanho);
fclose($arquivo);

echo "<hr>";
$arquivo = fopen("api/texto.txt",'r');
echo fgets($arquivo) . "<br>";
echo fgets($arquivo) . "<br>";
var_dump(fgets($arquivo)) . "<br>";
fclose($arquivo);

echo "<hr>";
//Lendo até o final do arquivo
$arquivo = fopen("api/texto.txt", "r");
while(!feof($arquivo)){
    echo fgets($arquivo) . "<br>";
}

fclose($arquivo);

//Lendo por caractere
echo "<hr>";
$arquivo = fopen("api/texto.txt", "r");
while(!feof($arquivo)){
    echo fgetc($arquivo);
}

fclose($arquivo);

//Lendo e escrevendo no arquivo ao mesmo tempo
echo "<hr>";
$arquivo = fopen("api/texto.txt", "r+");
echo fgets($arquivo) , "<br>";
echo fgets($arquivo) , "<br>";
fwrite($arquivo, "Adicionando infos no arquivo enquanto lê");
fclose($arquivo);

