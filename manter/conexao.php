<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "sica";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conexao) {
    die("Não foi possivel conectar ao banco de dados!!!
    Erro detectado: ". mysqli_error());
}

?>