<?php

    require_once "vendor/autoload.php";

    if(isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['senha']) && !empty($_POST['senha'])):
    
    $id = filter_input(INPUT_GET,'id');
    $cliente = [];
    
    if($id){

        $novo_usuario = new User();
        $cliente = $novo_usuario->pesquisa_edita($id);

    }else{
        header("Location: tela_inicial.php");
     }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud WER DIGITAL</title>
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
    
    <h1>Editar Usuário</h1>

    <div>
                    
                    <form action="editar_action.php" method="POST"> 
                            <div>
                            <input type="hidden" name="id_clientes" value="<?= $cliente['id_clientes'];?>">
                                <label>Nome</lavel>
                                <input type="text" name="nome" value="<?= $cliente['nome_cliente'];?>">
                            </div>
                            <div>
                                <label>Idade</lavel>
                                <input type="text" name="idade"  value="<?= $cliente['idade'];?>">
                            </div>
                            <div>
                                <label>Email</lavel>
                                <input type="text" name="email"  value="<?= $cliente['email'];?>">
                            </div>
                            <div>
                                <label>Endereço Cobrança</lavel>
                                <input type="text" name="endCobranca"value="<?= $cliente['end_cobranca'];?>">
                            </div>
                            <div>
                                <label>Endereço Entrega</lavel>
                                <input type="text" name="endEntrega" value="<?= $cliente['end_entrega'];?>">
                            </div>
                            <input type="hidden" name="id_user" value="<?= $cliente['id_usuario'];?>">
                            <div>
                                <input type="submit" value="Atualizar">
                            </div>

                    </form>
        </div>
</body>
</html>

<?php else: header("Location: index.php"); endif; ?>