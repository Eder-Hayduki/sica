<?php

require('conexao.php');

$id_aluno = $_POST['id_aluno'];
$id_curso = $_POST['id_curso'];

$sql ="INSERT INTO matricula(id_aluno, id_curso)
VALUES('$id_aluno', '$id_curso')";


if(!mysqli_query($conexao, $sql)){
    die ("Operação Falhou!");
}

mysqli_close($conexao);

header('Location: ../matricula.php');





?>