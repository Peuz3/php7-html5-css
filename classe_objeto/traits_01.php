<div class="titulo">Traits #01</div>

<?php

trait validacao{
    public $a = "Valor a";

    public function validarString($str){
        return isset($str) && $str !== "";
    }
}

trait validacaoMelhor{
    public $b = "Valor b"; 
    private $c = "Valor privado"; 

    public function validarStringMelhor($str){
        return isset($str) && trim($str);
    }
}
   

class Usuario{
    //Chamar as traits
    use validacao, validacaoMelhor;

    public function imprimirC(){
        echo "<br>", $this->c;
    }
}

$usuario = new Usuario();
var_dump($usuario->validarStringMelhor(" "));
echo "<br>";
var_dump($usuario->validarString(" "));
echo "<br>";
echo $usuario->a , "<br>", $usuario->b;
echo $usuario->imprimirC();

