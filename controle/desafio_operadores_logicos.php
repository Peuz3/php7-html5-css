<div class="titulo">Desafio Operadores Lógicos</div>

<form action ="#" method = "post">
    <div>
        <label for="t1"> Trabalho 1 (Terça-Feira) </label>
        <select name= "t1" id="t1">
            <option value = "1"> Executado </option>
            <option value = "0"> Não Executado </option>
        </select>
    </div>

    <div>
        <label for="t2"> Trabalho 2 (Quinta-Feira) </label>
        <select name= "t2" id="t2">
            <option value = "1"> Executado </option>
            <option value = "0"> Não Executado </option>
        </select>
    </div>
    <button> Executar </button>
    
</form>

<style>
button, select {
    font-size: 1.8rem;
}

</style>

<?php


//var_dump(!!$_POST['t1']);
//var_dump($_POST['t2']);

echo "Relatório:";

if($_POST['t1'] ==="1" && $_POST['t2']==="1"){
    echo "<br> Comprar TV 50 Polegadas e tomar sorvete!";
} 
else if($_POST['t1']==='1' && $_POST['t2']==='0'){
    echo "<br> Comprar TV 32 Polegadas e tomar sorvete!";
} 
else if(!($_POST['t1']==='1') && $_POST['t2']==='1'){
    echo "<br> Comprar TV 32 Polegadas e tomar sorvete!";
}
else if($_POST['t1']==='0' && $_POST['t2']=== '0'){
    echo "<br> Fica em casa que é mais saudável!";
}

?>
    