<?php
 session_start();

 $server = "localhost";
 $base = "crud_werdigital";
 $usuario = "root";
 $senha = "";

 global $conexao;
   
 try{

     $conexao = new PDO("mysql:dbname=".$base."; host=".$server, $usuario, $senha);

     //ativar o modo de erros
     $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 }catch(PDOException $e){
     //erro na conexão
     $error = $e->getMessage();
     echo "erro: $error";  
 }



?>