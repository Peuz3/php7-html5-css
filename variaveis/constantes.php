<div class="titulo">Constantes</div>

<?php

//Definindo constantes
define('TAXA_DE_JUROS',5.9);
echo TAXA_DE_JUROS;

const NOVA_TAXA = 2.5;
echo "<br>" . NOVA_TAXA;

CONST NOVISSIMA_TAXA = 3.5 + 1.2;
echo '<br>' . NOVISSIMA_TAXA;

ECHO '<br> Versão do PHP: ' . PHP_VERSION;

echo '<br> Linha: ' . __LINE__;
echo '<br> Url do Arquivo: ' . __FILE__;
echo '<br> Diretório: ' . __DIR__;

?>