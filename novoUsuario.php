<?php

require_once "vendor/autoload.php";


$login = $_POST['login'];
$senha = md5($_POST['senha']);
$nome_usuario= $_POST['nome'];


$usuario = new User();
$usuario->cadastrarUsuario($login,$senha,$nome_usuario);

header("Location: index.php");

?>