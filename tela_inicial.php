<?php
   
    require_once "vendor/autoload.php";
   

   if(isset($_SESSION['id_usuario']) && !empty($_SESSION['id_usuario'])):     
           
            
            $dados = [];  
            $id_usuario = $_SESSION['id_usuario'];  
              
            $usuario = new User();
         
            $dados = $usuario->pesquisar($id_usuario);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
        <nav>
            <ul>
                <li><a href="tela_inicial.php" >Home </a></li>
                <li><a href="cadastrar_clientes.php" >Cadastrar Clientes </a></li>
                <li><a href="logout.php" >Sair </a></li>
              
            </ul>
        </nav>
    </header>

    <h1>Clientes Cadastrados</h1>

    <table border="1px" width="1200">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome Cliente</th>
                                <th>Idade</th>
                                <th>Email</th>
                                <th>Endereço Entrega</th>
                                <th>Endereço Cobrança</th>
                                <th>Nome Usuário</th>
                                <th>Ações</th>
                            </tr>
                        </thead>

                        <?php
                            foreach($dados as $usuario):
                        ?>
                        <tr>
                            <td><?=$usuario['id_clientes'];?></td>
                            <td><?=$usuario['nome_cliente'];?></td>
                            <td><?=$usuario['idade'];?></td>
                            <td><?=$usuario['email'];?></td>
                            <td><?=$usuario['end_cobranca'];?></td>
                            <td><?=$usuario['end_entrega'];?></td>
                            <td><?=$usuario['nome_usuario'];?></td>
                            <td><a href="editar.php?id=<?=$usuario['id_clientes'];?>">Editar</a>
                            <a href="deletar.php?id=<?=$usuario['id_clientes'];?>">Excluir</a></td>
                            

                        </tr>
                        <?php endforeach; ?>
                       
</body>
</html>


<?php  else: header("Location: index.php");  endif; ?>
