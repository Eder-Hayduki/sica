<?php
//Validando usuário logado
session_start();

if ((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('location: tela_login.php');

}
    $logado = $_SESSION['usuario'];

   
    require('./manter/conexao.php');

    if(isset($_POST['btnCadastrar'])) {
    
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $complemento = $_POST['complemento'];
    $cep = $_POST['cep'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $telefone = $_POST['telefone'];
    
    
    $sql = "INSERT INTO aluno(nome, cpf, endereco, complemento, cep, bairro, cidade, estado, telefone)
    VALUES('$nome', '$cpf', '$endereco', '$complemento', '$cep', '$bairro', '$cidade', '$estado', '$telefone')";
    
    
    if(!mysqli_query($conexao, $sql)){
        die ("Operação Falhou!");
    }
    
    mysqli_close($conexao);

    $_SESSION['mensagem'] = "Aluno inserido!!!";
    $_SESSION['tipo_mensagem'] = "success";
  }

    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Cadastro de Aluno</title>   
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
    form{
        width: 350px;
        margin: auto;
        
    }
    a:hover{
      color: black;
    }
    body{
    background: rgb(17,42,96);
    background: linear-gradient(90deg, rgba(17,42,96,1) 0%, rgba(79,176,187,1) 100%);
    color: white;
    }
    h5{
      color: black;
    }
    </style>
</head>
<body>

    <nav class="navbar bg-light">
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
        <h1 class="text-center">Sistema de Controle Acadêmico - SICA</h1>
        <?php
          if(isset($_SESSION['mensagem'])){ ?>
            <div class="alert alert-<?php echo $_SESSION['tipo_mensagem']?> alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <?php echo $_SESSION['mensagem'];?></div>
        <?php } ?>
        
        
        <div class="row">

        <div class="col-md-12">

          <p class="text-center">Preencher dados do aluno(a)</p>
              <fieldset>

            <legend class="text-center">Cadastro de Aluno(a)</legend>

        <form action="" method="post">

        <div class="form-group">
        <label for="nome" class="form-label">Nome:</label>
          <input type="text" class="form-control" id="nome" name="nome" required>
          </div>
                          
            <div class="form-group">
             <label for="cpf" class="form-label">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" required maxlength="11">
          </div>
                          
          <div class="form-group">
            <label for="endereco" class="form-label">Endereço:</label>
            <input type="text" class="form-control" id="endereco" name="endereco" required>
          </div>
                          
          <div class="form-group">
            <label for="complemento" class="form-label">Complemento:</label>
            <input type="text" class="form-control" id="complemento" name="complemento" required>
          </div>
                          
          <div class="form-group">
            <label for="cep" class="form-label">CEP:</label>
            <input type="text" class="form-control" id="cep" name="cep" required maxlength="8">
          </div>
                          
          <div class="form-group">
            <label for="bairro" class="form-label">Bairro:</label>
            <input type="text" class="form-control" id="bairro" name="bairro" required>
          </div>
                          
          <div class="form-group">
            <label for="cidade" class="form-label">Cidade:</label>
            <input type="text" class="form-control" id="cidade" name="cidade" required>
          </div>
                          
          <div class="form-group">
            <label for="estado">Estado:</label>
            <select class="form-select" aria-label="Default select example" id="estado" name="estado">
              <option value="">Selecione...</option>
              <option value="AC">Acre</option>
              <option value="AL">Alagoas</option>
              <option value="AP">Amapá</option>
              <option value="AM">Amazonas</option>
              <option value="BA">Bahia</option>
              <option value="CE">Ceará</option>
              <option value="DF">Distrito Federal</option>
              <option value="ES">Espírito Santo</option>
              <option value="GO">Goiás</option>
              <option value="MA">Maranhão</option>
              <option value="MT">Mato Grosso</option>
              <option value="MS">Mato Grosso do Sul</option>
              <option value="MG">Minas Gerais</option>
              <option value="PA">Pará</option>
              <option value="PB">Paraíba</option>
              <option value="PR">Paraná</option>
              <option value="PE">Pernambuco</option>
              <option value="PI">Piauí</option>
              <option value="RJ">Rio de Janeiro</option>
              <option value="RN">Rio Grande do Norte</option>
              <option value="RS">Rio Grande do Sul</option>
              <option value="RO">Rondônia</option>
              <option value="RR">Roraima</option>
              <option value="SC">Santa Catarina</option>
              <option value="SP">São Paulo</option>
              <option value="SE">Sergipe</option>
              <option value="TO">Tocantins</option>
              </select>
                          
          <div class="form-group">
            <label for="telefone" class="form-label">Telefone:</label>
            <input type="text" class="form-control" id="telefone" name="telefone" required>
          </div>
                          
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
            <label class="form-check-label" for="exampleCheck1">Confirmei os Dados</label>
          </div>
          <br>

          <button type="submit" name="btnCadastrar" class="btn btn-dark">Cadastrar</button>
                          
        </form>


            </div>


        </div>


      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>  
    <script>
      const $aviso = document.querySelector(".alert");
      if($aviso) {
        setTimeout(() => {
          $aviso.remove();
        }, 5000);
      }
    </script>
</body>
</html>