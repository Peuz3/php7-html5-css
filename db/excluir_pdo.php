<div class="titulo">PDO: Excluir</div>

<?php
require_once "conexao_pdo.php";

$conexao = novaConexao();

$sql = "DELETE FROM cadastroou WHERE id = :id";

$stmt = $conexao->prepare($sql);
$stmt->bindValue("id",14);

if ($stmt->execute()) {
    echo "Excluído com sucesso!";
} else {
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo);
}