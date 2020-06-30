<?php

abstract class Pessoa{
    protected $nome;
    protected $idade;
    protected $sexo;

    function __construct($nome, $idade, $sexo){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    public function __tostring(){
        return "{$this->nome} tem {$this->idade} anos e sexo {$this->sexo}";
    } 

    public function apresentarPessoa(){
        return $this . "<br>";
    }
}