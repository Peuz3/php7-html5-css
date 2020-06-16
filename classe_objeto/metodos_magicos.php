<div class="titulo">Métodos Mágicos</div>

<?php
class Pessoa{
    public $nome;
    public $idade;

    //Métodos Mágicos

    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;

    }

    function __destruct(){
        echo "<br>Fim!";
    }

    public function __tostring(){
        return "{$this->nome} tem {$this->idade} anos";
    } 

    public function apresentar(){
        echo $this . "<br>";
    }

    public function __get($atrib){
        echo "Lendo um atributo não declarado: {$atrib}<br>";
    }

    public function __set($atrib, $valor){
        echo "Alterando atributo não declarado: {$atrib}/{$valor}";

    }

    public function __call($metodo, $params){
        echo "Tentando executar método {$metodo}, ";
        echo "com parâmetros: ";
        print_r($params);
    }
}

echo "Informações: <br>";
$pessoa = new Pessoa("Mara", 26); //__construct
$pessoa->apresentar(); //chama o método sem o __call
$pessoa->nome = "Lena";
$pessoa->idade = 32;
echo $pessoa; //tostring

echo "<br>";
echo "Utilizando get e set: <br>";
$pessoa->nomeDoMeio; //_get
$pessoa->nomeCompleto = "Mara Leona Bispo"; //__set

echo "<br>";
echo "Chamando método não existente no objeto: <br>";
$pessoa->gerarCPF(91464700001); //__call

$pessoa = null;
