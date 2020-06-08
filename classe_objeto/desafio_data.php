<div class="titulo">Desafio Classe Data</div>

<?php

class Data{
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentarData(){
        return "{$this->dia} / {$this->mes} / {$this->ano}";
    }
}

$data = new Data();
echo "Data padrão: " . $data->apresentarData() . "<br>";

$dataMeuAniversario = new Data();
$dataMeuAniversario->dia = 17;
$dataMeuAniversario->mes = 5;
$dataMeuAniversario->ano = 1993;


echo "Meu aniversário: " . $dataMeuAniversario->apresentarData();


