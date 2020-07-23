<div class="titulo">Escrever Arquivo</div>

<?php
$arquivo = fopen('api/texto.txt','w');
fwrite($arquivo, "Escrevendo no arquivo\n");
$conteudo = "Segunda linha\n";
fwrite($arquivo, $conteudo);
fclose($arquivo);

$arquivo = fopen('api/texto.txt','w');
fwrite($arquivo, "Novíssimo Conteúdo");
fclose($arquivo);

$arquivo = fopen('api/texto.txt','a');
fwrite($arquivo, " Apresentado!!!\n");
fwrite($arquivo, "Posso adicionar novos contéudos sem sobrescrever");
fclose($arquivo);

ini_set("display_errors",1);
$arquivo = fopen('api/texto.txt','x'); 

$arquivo = fopen('api/texto2.txt','a');
fwrite($arquivo, "Escrevendo em arquivo novo");
fclose($arquivo);