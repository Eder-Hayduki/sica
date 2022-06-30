<?php

require('conexao.php');

$nome = $_POST['nome'];
$duracao = $_POST['duracao'];
$coordenador = $_POST['coordenador'];
$nivel = $_POST['nivel'];
$modalidade = $_POST['modalidade'];

$sql = "INSERT INTO curso(nome, duracao, coordenador, modalidade)
VALUE('$nome', '$duracao', '$coordenador', '$modalidade')";

if(!mysqli_query($conexao, $sql)){
    die ("Operação Falhou!");
}

mysqli_close($conexao);

header("Location: ../cadastro_curso.php");


?>