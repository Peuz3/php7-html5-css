<div class="titulo">Sessão</div>

<?php

session_start();

print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome']){
    $_SESSION['nome'] = "João Pedro";
    
}

if(!$_SESSION['email']){
    $_SESSION['email'] = 'jp@email.com';
}

?>

<p>
    <a href="/sessao/basico_sessao_alterar.php">Alterar Sessão</a>
</p>