<?php

require('conexao.php');

$id_curso = $_POST['id_curso'];
$id_disciplina = $_POST['id_disciplina'];

try {
    $sql = "INSERT INTO curso_disciplina(id_curso, id_disciplina)
    VALUES('$id_curso', '$id_disciplina')";
    
    if(!mysqli_query($conexao, $sql)){
        die ("Operação Falhou!");
    }
    
    mysqli_close($conexao);
    
    header("Location: ../cadastro_disciplina_curso.php");
} catch (Exception $e) {
    echo  "erro: ";
    /* , $e->getMessagem(); */

}







?>