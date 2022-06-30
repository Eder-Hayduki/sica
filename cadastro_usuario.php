<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro_usuario.css">
    <title>Cadastro Usuários</title>
</head>
<body>
    <div class="tela_login">
        <h1>Cadastro de Usuário</h1>
      
        <form action="php/salvar_usuario.php" method="post" class="formulario">

            <input type="text" name="nome" id="nome" placeholder="Nome*" required>
    
            <br><br>

            <input type="email" name="email" id="email" placeholder="Email*" required>
    
            <br><br>

            <input type="tel" name="telefone" id="telefone" placeholder="Telefone*" required>
    
            <br><br>

            <input type="text" name="genero" id="genero" placeholder="Genero*" required>
    
            <br><br>

            <label for="nascimento" class="nascimento">Data de Nascimento</label><br>
            <input type="date" name="data_nascimento" id="data_nascimento" placeholder="Data de Nascimento*" required>
    
            <br><br>
            
            <input type="text" name="cidade" id="cidade" placeholder="Cidade*" required>
            <br><br>

            <input type="text" name="estado" id="estado" placeholder="Estado*" required>
            <br><br>

            <input type="text" name="endereco" id="endereco" placeholder="Endereço*" required>
            <br><br>
        
        <input type="text" name="usuario" id="usuario" placeholder="Usuário*" required>

        <br><br>

        
        <input type="password" name="senha" id="senha" placeholder="Senha*" required>
        <br><br>

        <input type="submit" value="Cadastrar" name="cadastrar" id="cadastrar">

        </form>
    
    </div>
   
</body>
</html>