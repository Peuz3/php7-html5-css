<?php
session_start();
if(!$_SESSION['usuario']){
    header('Location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="recursos\css\estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500;600&display=swap" rel="stylesheet">
    <title>Curso PHP</title>

</head>

<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice de Exercícios</h2>
    </header>

    <nav class="navegacao">
       <span class="usuario">Usuário: <?=$_SESSION['usuario'];?></span>
       <a href="logout.php" class="vermelho">Sair</a>
    </nav>
    <!--Fim da nav navegacao-->

    <main class="principal">
        <div class="conteudo">

            <?php require_once("menu.php"); ?>

        </div>
        <!--Fim da div conteudo-->
    </main>

    <footer class="rodape">
        COD3R & ALUNOS ₢ <?= date('Y');?>
    </footer>
</body>

</html>