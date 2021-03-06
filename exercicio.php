<?php
session_start();

if($_COOKIE['usuario']){
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}

if(!$_SESSION['usuario']){
    header('Location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="recursos\css\estilo.css">
    <link rel="stylesheet" href="recursos\css\exercicio.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500;600&display=swap" rel="stylesheet">
    <title>Exercícios</title>

</head>

<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercícios</h2>
    </header>

    <nav class="navegacao">
        <span class="usuario">Usuário: <?=$_SESSION['usuario'];?></span>        
        <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a>
        <a href="index.php">Voltar</a>
        <a href="logout.php" class="vermelho">Sair</a>
    </nav>
    <!--Fim da nav navegacao-->

    <main class="principal">
        <div class="conteudo">
            <?php           
         
           include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
           
           ?>
        </div>
        <!--Fim da div conteudo-->

    </main>

    <footer class="rodape">
        COD3R & ALUNOS ₢ <?= date('Y');?>
    </footer>
</body>

</html>