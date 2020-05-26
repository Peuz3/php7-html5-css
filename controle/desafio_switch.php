<div class="titulo">Desafio Switch</div>

<form action = "#" method = "post">

    <input type="text" name= "param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metro</option>
        <option value="c-fahrenheit">C > Fahrenheit</option>
        <option value="fahrenheit-c">Fahrenheit > C</option>


    </select>

    <button>Calcular</button>

</form>

<style>

    form > * {
        font-size: 1.8rem;
    }
</style>

<?php

$valor = $_POST['param'];
$conversao = $_POST['conversao'];


if(isset($conversao)){
   
    switch($conversao){
        case 'km-milha':
          $valorConvertido =  $valor / 1.609;
          $mensagem = "$valor Km(s) =  $valorConvertido  Milha(s)";  
         
        break;
    
        case 'milha-km' :
            $valorConvertido = $valor * 1.609;
            $mensagem = "$valor Milhas(s) = $valorConvertido Km(s)";  
        break;
    
        case 'metro-km':
            $valorConvertido = $valor/ 1000;
            $mensagem = "$valor Metro(s) = $valorConvertido Km(s)";  
        break;
    
        case 'km-metro':
            $valorConvertido = $valor * 1000;
            $mensagem = "$valor Km(s) = $valorConvertido Metro(s)";  
        break;

        case 'c-fahrenheit':
            $valorConvertido = ($valor * 9/5) + 32;
            $mensagem = "$valor C =  $valorConvertido Fahrenheit";         
        break;

        case 'fahrenheit-c':
            $valorConvertido = ($valor - 32) * 5/9;
            $mensagem = "$valor Fahrenheit =  $valorConvertido C "; 
        break;

    
        default :
            echo "Tente novamente!";
        break;
        
    }
    echo "<p>$mensagem</p>";

}





?>