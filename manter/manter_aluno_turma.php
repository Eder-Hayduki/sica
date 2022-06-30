<?php

require('conexao.php');

$id_matricula = $_POST['id_matricula'];
$id_turma = $_POST['id_turma'];

$sql = "INSERT INTO aluno_turma(id_matricula, id_turma)
VALUES('$id_matricula', '$id_turma')";

if(!mysqli_query($conexao, $sql)){
    die ("Operação Falhou!");
}

mysqli_close($conexao);

header("Location: ../cadastro_aluno_turma.php");






?>