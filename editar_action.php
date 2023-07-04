<?php
   
   require_once "vendor/autoload.php";

    $id = filter_input(INPUT_POST,'id');
    $nome = filter_input(INPUT_POST,'nome');    
    $idade = filter_input(INPUT_POST,'idade');
    $email = filter_input(INPUT_POST,'email');
    $endCobranca = filter_input(INPUT_POST,'endCobranca');
    $endEntrega = filter_input(INPUT_POST, 'endEntrega');
    $id_user = filter_input(INPUT_POST,'id_user');

    if($id && $nome && $idade && $email && $endCobranca && $endEntrega && $id_user){
        $usuario = new User();
       
        $usuario->editar($id,$nome,$idade,$email,$endCobranca,$endEntrega,$id_user);
   

    header("Location: tela_inicial.php");
    exit;
     }else{
        header("Location: tela_inicial.php");
        exit;
    }

?>