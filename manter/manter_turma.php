<?php

require('conexao.php');

$id_disciplina = $_POST['id_disciplina'];
$id_professor = $_POST['id_professor'];

$sql = "INSERT INTO turma(id_disciplina, id_professor)
VALUE('$id_disciplina', '$id_professor')";


if(!mysqli_query($conexao, $sql)){
    die ("Operação Falhou!");
}

mysqli_close($conexao);

header('Location: ../cadastro_turma.php');








?>