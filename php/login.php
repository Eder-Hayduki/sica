<?php

session_start();

if (isset($_POST['entrar']) && !empty($_POST['usuario']) && !empty($_POST['senha'])) {
    include_once('../manter/conexao.php');
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    $sql = "SELECT * FROM `usuario` WHERE `usuario` = '$usuario' and `senha` = '$senha' ";

    $result = $conexao->query($sql);
   
    if(mysqli_num_rows($result) < 1) {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('location: ..\tela_login.php');
       
    }
    else {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
        header('location: ..\home.php');
    }
}
else {
    header('location: ..\tela_login.php');
}

?>