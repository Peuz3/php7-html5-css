<div class="titulo">Visibilidade</div>

<?php

class A{
    public $publico = "Público";
    protected $protegido = "Protegido";
    private $privado = "Privado";

    public function mostrarA(){
        //Caso queira chamar a função privada da classe
        //$this->naoMostrar();
        echo "Classe A) Público = {$this->publico}<br>";
        echo "Classe A) Protegido = {$this->protegido} <br>";
        echo "Classe A) Privado = {$this->privado} <br>";
    }

    protected function vaiPorHeranca(){
        echo "Serei transmitido por herança<br>";
    }
    //Função privada serve para ser chamada dentro da própria classe
    private function naoMostrar(){
        echo "Não vou imprimir<br>";
    }
}

$a = new A();
$a->mostrarA();
echo"<br>";

class B extends A{
    public function mostrarB(){
        echo "Classe B) Público = {$this->publico}<br>";
        echo "Classe B) Protegido = {$this->protegido}<br>";
        echo "Classe B) Privado = {$this->privado}<br>";
        
        //Só pode ser acessado dentro da classe
        parent::vaiPorHeranca();
    }
}


$b = new B();
$b->mostrarA();

echo"<br>";


$b->mostrarB();
//$b->naoMostrar(); Não pode chamar um método privado, ele só deve se usado por outro método na classe
//$b->vaiPorHeranca(); Não pode ser chamado diretamente
