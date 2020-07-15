<?php
session_start();
print_r($_SESSION);

?>

<p>
    <b>Nome:<?= $_SESSION['nome'];?> </b><br>
    <b>E-mail:<?= $_SESSION['email'];?> </b>
</p>

<?php 

$_SESSION['email'] = 'joaopedro@gmail.com'

?>

<p>
    <a href="basico_sessao.php">Voltar</a>
</p>

<p>
    <a href="basico_sessao_limpar.php">Limpar Sessão</a>
</p>