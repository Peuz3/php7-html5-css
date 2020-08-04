<div class="titulo">PDO: Inserir</div>

<?php

require_once "conexao_pdo.php";

$sql = "INSERT INTO cadastro (nome, nascimento, email, site, filhos, salario) 
        VALUES(
            'Jean Paulo',
            '1976-12-23',
            'jeanpaulo@email.com',
            'http://jeanpaulo.site.com',
            3,
            3500
        )";

$conexao = novaConexao();
//print_r(get_class_methods($conexao));        

if($conexao->exec($sql)){
    $id = $conexao->lastInsertId();
    echo "Novo cadastro com id $id.";
}else{
    echo $conexao->errorCode();
}

$conexao->close();