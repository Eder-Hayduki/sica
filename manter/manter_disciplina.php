<?php

require('conexao.php');

$nome = $_POST['nome'];
$carga_horaria = $_POST['carga_horaria'];
$creditos = $_POST['creditos'];
$ementa = $_POST['ementa'];

$sql = "INSERT INTO disciplina(nome, carga_horaria, creditos, ementa)
VALUES('$nome', '$carga_horaria', '$creditos', '$ementa')";


if(!mysqli_query($conexao, $sql)){
    die ("Operação Falhou!");
}

mysqli_close($conexao);

header("Location: ../cadastro_disciplina.php");





?>