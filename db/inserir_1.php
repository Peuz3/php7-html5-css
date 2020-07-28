<div class="titulo">Inserir Registro #01</div>

<?php
require_once "conexao.php";

$sql = "INSERT INTO cadastro (nome, nascimento, email,site,filhos,salario)
        VALUES ('João Pedro','1993-05-17','jp@email.com',
                    'https://joaopedro.sites.com.br', 1,5555.99)";


$conexao = novaConexao();
$resultado = $conexao->query($sql);

if ($resultado) {
    echo "Operação Efetuada Com Sucesso!";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();
