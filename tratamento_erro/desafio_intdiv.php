<?php 
namespace App\Math;

class MathIntDivException extends \Exception{
    public function __construct($message, $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}

function intdiv($a, $b){
    if($a == 0 || $b == 0){
        throw new MathIntDivException ("Divisão por zero");
    }
    elseif($a % $b > 0){
        throw new MathIntDivException ("Resultado não inteiro");
    }
    return $a / $b;
}



