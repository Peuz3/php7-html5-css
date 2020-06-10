<div class="titulo">Membros Estáticos</div>

<?php

class A{
    public $naoStatic = "Variável de instância";
    public static $static = "Variável de classe(Estática)";

    public function mostrarA(){
        echo "Não estática: {$this->naoStatic} <br>";

        //1 Tentativa de mostrar um atributo estático
        //echo "Estática: {$this->static} <br>";

        //2 Tentativa de mostrar um atributo estático
        //echo "Estática: {self::$static} <br>";

        echo "Estática: " .  self::$static . "<br>";

    }

    //Dentro de uma função estática vc só consegue acessar membros estáticos
    public static function mostrarStaticA(){
        //echo "Não estática: {$this->naoStatic}";
       // echo "Estática: {$static}";
        echo "Estática: " .  self::$static . "<br>";


    }


}

$objetoA = new A();
$objetoA->mostrarA();
//Acessando
echo A::$static, "<br>";
//Melhor forma de mostrar um método estático
A::mostrarStaticA();



