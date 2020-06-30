<div class="titulo">Desafio Require/Include</div>

<?php
require_once("usuario.php");


$usuario = new Usuario("Pedro", 18, "M", "pedro123456");
echo $usuario->apresentar();