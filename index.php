<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud WER DIGITAL</title>
</head>
<body>
    <h2>Acesso ao Sistema</h2>
        <form action="acesso.php" method="POST">
            <div>
                <label>Login</label>
                <input type="text" name="user" id="user" placeholder="Digite seu login">
            </div>
            <div>
                <label>Senha</label>
                <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
            </div>
            <div>
            <input type="submit" value="Logar">
            </div>
            <div>
                Novo no sistema?
                <a href="cadastrarUsuario.php"> Cadastre seu usuario</a>
            </div>
        </form>
    
</body>
</html>
