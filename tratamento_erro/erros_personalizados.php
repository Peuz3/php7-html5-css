<div class="titulo">Erros Personalizados</div>

<?php
class FaixaEtariaException extends Exception
{
    public function __construct(
        $message,
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
function calcularTempoAposentadoria($idade)
{
    if ($idade < 18) {
        throw new FaixaEtariaException(
            'Ainda está muito longe'
        );
    }
    if ($idade > 70) {
        throw new FaixaEtariaException(
            'Já deveria estar aposentado'
        );
    }

    return 70 - $idade;
}


$idadesAvaliadas = [15, 14, 18, 19, 25, 26, 27, 30, 50, 60, 78, 90, 85];

foreach ($idadesAvaliadas as $idade) {
    try {
        $tempoRestante = calcularTempoAposentadoria($idade);
        echo "Idade: $idade, Faltam: $tempoRestante anos<br>";
    } catch (FaixaEtariaException $e) {
        echo "Não foi possível calcular {$idade} anos <br>";
        echo "Motivo: {$e->getMessage()} <br>";
    }
}


