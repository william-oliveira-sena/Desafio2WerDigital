<?php

    require_once "vendor/autoload.php";

if(isset($_SESSION['id_usuario']) && !empty($_SESSION['id_usuario'])):
?>

<!DOCTYPE html>
<html lang="pt-br">
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
    <h1>Cadastrar Clientes</h1>
        <div>
            <form action="novoCliente.php" method="POST">

                <div>
                        <label>Nome</lavel>
                        <input type="text" name="nome" placeholder="Digite seu nome" >
                </div>
                <div>
                        <label>Idade</lavel>
                        <input type="text" name="idade" placeholder="Digite sua idade">
                </div>
                <div>
                        <label>Email</lavel>
                        <input type="text" name="email" placeholder="Digite seu email">
                </div>
                <div>
                        <label>Endereço Cobrança</lavel>
                        <input type="text" name="endCobranca" 
                        placeholder="Digite o endereço de cobrança">
                </div>
                <div>
                        <label>Endereço Entrega</lavel>
                        <input type="text" name="endEntrega" placeholder="Digite o endereço de entrega">
                </div>
                <div>
                          <input type="reset"  value="Limpar">
                          <input type="submit" value="Cadastrar">
                     </div>

            </form>
        </div>
    
</body>
</html>
<?php else: header("Location: index.php"); endif; ?>