<?php

require_once "vendor/autoload.php";

$id = filter_input(INPUT_GET, 'id');

    if($id){
       $usuario = new User();
       $usuario->deletar($id);
    }

    header("Location: tela_inicial.php");

?>