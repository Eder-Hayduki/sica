<?php

require("../manter/conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$genero = $_POST['genero'];
$data_nascimento = $_POST['data_nascimento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$endereco = $_POST['endereco'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];



$sql = "INSERT INTO usuario(nome, email, telefone, genero, data_nascimento, cidade, estado, endereco, usuario, senha) 
values ('$nome', '$email', '$telefone', '$genero', '$data_nascimento', '$cidade', '$estado', '$endereco', '$usuario', '$senha')";

header('location: ..\tela_login.php');

if(!mysqli_query($conexao, $sql)){
    die ("Operação Falhou!");
}

mysqli_close($conexao);






?>