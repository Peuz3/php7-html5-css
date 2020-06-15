<div class="titulo">Desafio Erros</div>

<?php
interface  Template{
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template{
    function metodo3(){
        echo "Estou funcionando método 1<br>";
    }

    public function metodo1(){
        //implementa o código
    }
}

class Classe extends ClasseAbstrata{
    function __construct($parametro){

    }
    
    public function metodo1(){
        echo "Estou funcionando método 1 da classe<br>";
        //parent:: metodo1();
    }

    public function metodo2($parametro){
        echo "Estou funcionando método 2 da classe com o parametro: {$parametro}<br>";
       // parent:: metodo2($parametro);
    }
    
    public function metodo3(){
        echo "Estou funcionando método 3 da classe<br>";
        //parent::metodo3();
    }    
}

$exemplo = new Classe("Eu");
$exemplo->metodo3();


