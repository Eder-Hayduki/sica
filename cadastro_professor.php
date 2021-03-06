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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Cadastro de Professor</title>
<body>
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

    body{
    background: rgb(17,42,96);
    background: linear-gradient(90deg, rgba(17,42,96,1) 0%, rgba(79,176,187,1) 100%);
    color: white;
    }
    h5{
      color: black;
    }
    a:hover{
      color: black;
      
    }
    </style>
</head>

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
        <h1 class="text-center">Sistema de Controle Acad??mico - SICA</h1>
        
        <div class="row">

        <div class="col-md-12">
        <fieldset>

        <legend class="text-center">Cadastro de Professor(a)</legend>

            <form action="manter/manter_professor.php" method="post">

            <div class="form-group">
              <label for="nome" class="form-label">Nome:</label>
              <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
                          
            <div class="form-group">
              <label for="cpf" class="form-label">CPF:</label>
              <input type="text" class="form-control" id="cpf" name="cpf" required maxlength="11">
            </div>
                          
            <div class="form-group">
              <label for="endereco" class="form-label">Endere??o:</label>
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
                <option value="AP">Amap??</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Cear??</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Esp??rito Santo</option>
                <option value="GO">Goi??s</option>
                <option value="MA">Maranh??o</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Par??</option>
                <option value="PB">Para??ba</option>
                <option value="PR">Paran??</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piau??</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rond??nia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">S??o Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
                </select>
                          
            <div class="form-group">
              <label for="telefone" class="form-label">Telefone:</label>
              <input type="text" class="form-control" id="telefone" name="telefone" required>
            </div>

            <div class="form-group">
              <label for="formacao" class="form-label">Forma????o:</label>
              <input type="text" class="form-control" id="formacao" name="formacao" required>
            </div>

            <div class="form-group">
              <label for="titulacao" class="form-label">Titula????o:</label>
              <input type="text" class="form-control" id="titulacao" name="titulacao" required>
            </div>
                          
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
              <label class="form-check-label" for="exampleCheck1">Confirmei os Dados</label>
            </div>
            <br>

            <button type="submit" class="btn btn-dark">Cadastrar</button>
                          
          </form>




            </div>



        </div>


      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>