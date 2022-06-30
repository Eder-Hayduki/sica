<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/login.css">
    <title>Tela de Login</title>

</head>
<body>
    <div class="tela_login">
        <h2>Login</h2>
        <form action="php/login.php" method="post">
        
        <input type="text" name="usuario" id="usuario" placeholder="Usuário*" required>

        <br><br>

        
        <input type="password" name="senha" id="senha" placeholder="Senha*" required>
        <br><br>

        <a class="link_cadastro" href="cadastro_usuario.php">Não tenho cadastro. <span>Clique aqui</span></a><br><br>
        <input type="submit" value="Entrar" name="entrar" id="entrar">
        </form>
    </div>

</body>
</html>