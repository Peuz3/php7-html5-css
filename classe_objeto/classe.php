<div class="titulo">Primeira Classe</div>

<?php
//Construindo a primeira classe em PHP

class Cliente {
    //Atributos da classe
    public $nome = "Anônimo";
    public $idade = 18;

    //Método(função) da classe
    public function apresentar(){
        echo "Nome: {$this->nome} Idade: {$this->idade}<br>";
    }
}

$cliente = new Cliente();
$cliente->nome = "Ana Paula";
$cliente->idade = 27;
$cliente->apresentar();

$cliente2 = new Cliente();
$cliente2->nome= "João Pedro";
$cliente2->idade =  30;
$cliente2->apresentar();