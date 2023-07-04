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
        <h1>Cadastrar Usuário</h1>
        <div>
            <form action="novoUsuario.php" method="POST">

                <div>
                        <label>Nome</lavel>
                        <input type="text" name="nome" placeholder="Digite seu nome" >
                </div>
                <div>
                        <label>Login</lavel>
                        <input type="text" name="login" placeholder="Digite seu login">
                </div>
                <div>
                        <label>Senha</lavel>
                        <input type="password" name="senha" placeholder="Digite sua senha">
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