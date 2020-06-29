<div class="titulo">Include Função</div>

<?php
echo "Carregando include_funcao.php <br>";

function carregarArquivo(){
    //Chamando o include na função
    include('include_arquivo.php');

    //Carregando a variavel
    echo $variavel . "<br>";
    echo soma(12,6) . "<br>";
}

echo "Novamente no arquivo include_funcao.php<br>";
//echo soma(1,8) . <br>;
carregarArquivo();

echo "Variavel = {$variavel}"; //null
echo "<br>" . soma(3,8);
