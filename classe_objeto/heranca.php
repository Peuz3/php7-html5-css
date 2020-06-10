<div class="titulo">Herança</div>

<?php

class Pessoa {
    public $nome;
    public $idade;    

    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo "Fim: Pessoa";
    }

    public function apresentar(){
        return "Nome: {$this->nome}, Idade: {$this->idade} anos";
    }
}

class Usuario {
    public $login;

    function __construct($nome, $idade, $login){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->login = $login;
    }

    function __destruct(){
        echo "Fim: Usuário";
    }

    public function apresentar(){
        return "Login: @{$this->login}" ;
        parent:: apresentar();
    }
}

$pessoa = new Pessoa("Marcela Luna", 18);
echo $pessoa->apresentar(), "<br>";

$usuario = new Usuario("Bart Mark", 56, "bart_mark");
echo $usuario->apresentar(), "<br>";

unset($pessoa);
echo "<br>";
unset($usuario);