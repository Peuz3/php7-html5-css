<?php

require_once('pessoa.php');


class Usuario extends Pessoa{
    protected $login;

    function __construct($nome, $idade,$sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
    } 

    public function apresentar(){
        return "Seu login: @{$this->login}, " 
        .  parent:: apresentarPessoa();
    }
}


