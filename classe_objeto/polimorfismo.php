<div class="titulo">Polimorfismo</div>

<?php
abstract class Comida{
    public $peso;
}

class Arroz extends Comida{
    
}

class Feijao extends Comida{

}

class Sorvete extends Comida{

}

class Pessoa{
    public $peso;

    function __construct($peso){
        $this->peso = $peso;
    }

    //Faz com que somente as subclasses possam utilizar deste método
    public function comer(Comida $comida){
        $this->peso += $comida->peso;
    }
}

$arroz = new Arroz();
$arroz->peso = 0.85;

$pessoa = new Pessoa(73.36);

echo "Seu peso: {$pessoa->peso} kg "; 

$pessoa->comer($arroz);

echo "<br>Seu peso atual: {$pessoa->peso} kg";

