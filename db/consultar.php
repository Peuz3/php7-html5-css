<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Consultar Registros</div>

<?php

require_once "conexao.php";

$sql = "SELECT * FROM cadastro";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

$registros = [];

if($resultado->num_rows > 0){
    //Array chave valor
    while($row = $resultado->fetch_assoc()){
        $registros[] = $row;

    }
}elseif($conexao->error){
    echo "Erro: " . $conexao->error;
}

//print_r($registros);

$conexao->close();
?>

<table class="table table-hover table-striped table-bordered">
    <thead>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-mail</th>
        <th>Site</th>
        <th>Filhos</th>
        <th>Salário</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro) : ?>
            <tr>
                <td><?=$registro['nome'] ?></td>
                <td><?= date('d/m/Y', strtotime($registro['nascimento'])) ?></td>
                <td><?=$registro['email'] ?></td>
                <td><?=$registro['site'] ?></td>
                <td><?=$registro['filhos'] ?></td>
                <td><?=$registro['salario'] ?></td>
            </tr>

        <?php endforeach ?>

    </tbody>
</table>

<style>
    table > * {
        font-size: 1.2rem;
    }
</style>