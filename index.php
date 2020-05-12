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

    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3> Módulo 01</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=ola">
                                Olá, PHP
                            </a> 
                        </li>

                        <li>
                            <a href="exercicio.php?dir=basico&file=html">
                               Integração HTML
                            </a> 
                        </li>

                        <li>
                            <a href="exercicio.php?dir=basico&file=css">
                               Integração CSS
                            </a> 
                        </li>

                        <li>
                            <a href="exercicio.php?dir=basico&file=comentarios">
                               Comentários PHP
                            </a> 
                        </li>

                        <li>
                            <a href="exercicio.php?dir=basico&file=desafio">
                               Desafio 
                            </a> 
                        </li>
                    </ul>
                </div>               
            </nav>
            <!--Fim da nav modulos-->
        </div>
        <!--Fim da div conteudo-->
    </main>

    <footer class="rodape">
        COD3R & ALUNOS ₢ <?= date('Y');?>
    </footer>
</body>

</html>