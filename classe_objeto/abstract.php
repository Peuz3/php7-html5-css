<div class="titulo">Classe Abstrata</div>

<?php

abstract class Abstrata{
    public abstract function metodo1();
    abstract protected function metodo2($parametro);
}

abstract class FilhaAbstrata extends Abstrata{
    public function metodo1(){
        echo "Executando médoto 1 <br>";
    }

    abstract public function metodo3();
}

class Concreta extends FilhaAbstrata{
    public function metodo1(){
        return "Executando método 1 extendido" . parent:: metodo1();

    }

    protected function metodo2($parametro){
        return "Executando o método 2 com parâmetro {$parametro}";
    }

    public function metodo3(){
        return "Executando o método 3<br>" . $this->metodo2('interno');
        
    }
}

$concreta = new Concreta();
echo $concreta->metodo1(), "<br>";
echo $concreta->metodo3();

echo "<br>";
echo "<br>";
var_dump($concreta);


echo "<br>";
echo "<br>";
var_dump($concreta instanceof Concreta);
var_dump($concreta instanceof FilhaAbstrata);
var_dump($concreta instanceof Abstrata);