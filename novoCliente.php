<?php

require_once "vendor/autoload.php";

$nome= $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$endCobranca = $_POST['endCobranca'];
$endEntrega = $_POST['endEntrega'];
$id_usuario = $_SESSION['id_usuario'];

$usuario = new User();
$usuario->cadastrarClientes($nome,$idade,$email,$endCobranca,$endEntrega,$id_usuario);

header("Location: tela_inicial.php");

?>