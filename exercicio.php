<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="recursos\css\estilo.css">
    <link rel="stylesheet" href="recursos\css\exercicio.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500;600&display=swap" rel="stylesheet">
    <title>Exercícios</title>

</head>

<body class = "exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercícios</h2>
    </header>

    <nav class="navegacao">
            <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a>
            <a href="index.php" class="vermelho">Voltar</a>
        </nav><!--Fim da nav navegacao--> 

    <main class="principal">
        <div class="conteudo">
           <?php           
         
           include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
           
           ?> 
        </div> <!--Fim da div conteudo-->      
        
    </main>

    <footer class="rodape">
        COD3R & ALUNOS ₢ <?= date('Y');?>
    </footer>
</body>

</html>