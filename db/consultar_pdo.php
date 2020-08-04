<div class="titulo">PDO: Consultar</div>

<?php
require_once "conexao_pdo.php";

$conexao = novaConexao();
$sql = "SELECT * FROM cadastro";
//PDO::FETCH_NUM
//PDO::FETCH_ASSOC
//PDO::FETCH_CLASS
//PDO::FETCH_BOTH
$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);

print_r($resultado);

echo "<hr>";

// $sql = "SELECT * FROM cadastro LIMIT ? OFFSET ?";
$sql = "SELECT * FROM cadastro LIMIT :quantidade OFFSET :inicio";

$stmt = $conexao->prepare($sql);

$stmt->bindValue(":quantidade", 3, PDO::PARAM_INT);
$stmt->bindValue(":inicio", 3, PDO::PARAM_INT);

if ($stmt->execute()) {
    $resultado = $stmt->fetchAll();
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo);
}


echo "<hr>";

$sql = "SELECT * FROM  cadastro WHERE id = :id";
$stmt = $conexao->prepare($sql);
$stmt->bindValue(':id', 2);
// if ($stmt->execute([1])) {
if ($stmt->execute()) {
    $resultado = $stmt->fetch();
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo);
}

$conexao->close();
