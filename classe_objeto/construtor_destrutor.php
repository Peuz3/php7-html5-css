<div class="titulo">Construtor & Destrutor</div>

<?php

class Pessoa{
    public $nome;
    public $idade;
    public $sexo;

    //Construtor
    function __construct($nome, $idade, $sexo = "M"){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    //Destrutor
    function __destruct(){
        echo "Chamando o destrutor";
    }

    public function apresentarPessoa(){
        return "Nome: {$this->nome}, Idade: {$this->idade} anos, Sexo: {$this->sexo}";
    }
}

$pessoa = new Pessoa("Erica", 27, "F");
echo $pessoa->apresentarPessoa(), "<br>";

$pessoa2 = new Pessoa("João", 16);
echo $pessoa2->apresentarPessoa(), "<br>";

var_dump($pessoa2);
echo "<br>";

//Chamando o destrutor
unset($pessoa2);

echo "<br>";
var_dump($pessoa2);