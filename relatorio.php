<?php
session_start();

if ((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('location: tela_login.php');

}
    $logado = $_SESSION['usuario'];



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Home</title>
    <style>

    .modal{
    width: 300px; 
    }
    .modal-content{
    width: 300px;
    }
    .list-group-item:hover{
    background-color: rgb(141, 138, 138)!important;
    }
    a{
    text-decoration: none;
    color: black;
    }
    h5{
      color: black;
    }
    h1{
      padding:10px;
      color:white;
    }
    body{
    background: rgb(17,42,96);
    background: linear-gradient(90deg, rgba(17,42,96,1) 0%, rgba(79,176,187,1) 100%);
    }
    table{
        background: white;
        
    }
    a:hover{
    color: black;
  
    }
    </style>
</head>
<body>

    <nav class="navbar bg-light shadow">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 h1">Controle Escolar</span>
          
          <button class="navbar-toggler" type="button"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
       </nav>
      
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">MENU</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
        <ul class="list-group list-group-flush">
            
            <li class="list-group-item"><a href="home.php">Home</a></li>

            <li class="list-group-item"><a href="cadastro_aluno.php">Cadastro de Aluno</a></li>
      
            <li class="list-group-item"><a href="cadastro_professor.php">Cadastro de Professor</a></li>

            <li class="list-group-item"><a href="cadastro_curso.php">Cadastro de Curso</a></li>
      
            <li class="list-group-item"><a href="cadastro_disciplina.php">Cadastro de Disciplina</a></li>

            <li class="list-group-item"><a href="cadastro_turma.php">Cadastro de Turma</a></li>

            <li class="list-group-item"><a href="matricula.php">Matricula de Aluno em Curso</a></li>

            <li class="list-group-item"><a href="cadastro_aluno_turma.php">Matricula de Aluno em Turma</a></li>

            <li class="list-group-item"><a href="cadastro_disciplina_curso.php">Cadastro de Disciplina em Curso</a></li>
            
            <li class="list-group-item"><a href="consultar_coordenador.php">Consultar Coordenador de Curso</a></li>
            
            <li class="list-group-item"><a href="consulta_prof_disciplina.php">Consultar de Professor de Disciplina</a></li>
            
            <li class="list-group-item"><a href="consultar_aluno_matriculado.php">Consulta de Aluno em Curso</a></li>
            
            <li class="list-group-item"><a href="consultar_aluno_matriculado_turma.php">Consulta de Alunos matriculados em Turma</a></li>
            
            
      
          
        </ul>
            </div>
            <div class="modal-footer">
                    <a href="php/sair.php">

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">SAIR DO SISTEMA</button>
                    </a>

                </div>
          </div>
          
        </div>
      </div>
      
      <div class="container">
        <h1 class="text-center">
          Faculdade Senac Curitiba Portão - 2022 <br>
          Turma:
        <?php
          require('manter/conexao.php');

           $id = $_GET['id'];
           $sql = "SELECT * FROM curso WHERE id_curso=$id";
          $result=mysqli_query($conexao,$sql);
           
           if (mysqli_num_rows($result)==1) {
            $linha=mysqli_fetch_array($result);
            $cod=$linha['id_curso'];
            $curso=$linha['nome'];
            echo $cod . " - ";
            echo $curso;
           }
         

        ?>
      
      </h1>
      <table class="table table-hover">
        <thead class="thead-dark">
            <th>N°</th>
            <th>RA</th>
            <th>CPF</th>
            <th>Nome</th>
            <th>Situação</th>
            
            
        </thead>
        <?php
        include_once("manter/conexao.php");

      $query = "SELECT aluno.nome AS nome, aluno.cpf AS cpf, aluno_turma.id_matricula AS matricula FROM aluno INNER JOIN (matricula,aluno_turma,turma) ON (aluno.cpf=matricula.id_aluno AND matricula.id_matricula=aluno_turma.id_matricula AND aluno_turma.id_turma=turma.id_turma);";

        $dados = mysqli_query($conexao, $query);
        $cont=0;
        while ($item = mysqli_fetch_array($dados)) {
          $cont++;
          
        ?>
        <tr>
            <td><?php echo $cont; ?></td>
            <td><?= $item["matricula"]?></td>
            <td><?= $item["cpf"]?></td>
            <td><?= $item["nome"]?></td>
            <td>Matriculado</td>
            
        </tr>
           
        <?php } ?>
       
   </table>
   <a href="home.php"><button type="button" class="btn btn-light">Voltar Consulta</button></a>
      </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>