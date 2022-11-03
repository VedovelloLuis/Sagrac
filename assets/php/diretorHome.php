<?php
session_start();

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  unset($_SESSION['nome']);
  header('location:login.php');
}

$nome = $_SESSION['nome'];
$conta_id = $_SESSION['contaId'];

include('config.php');

$sqlqtdcurso = "SELECT * from tab_curso";
$sqlqtddiscip = "SELECT * from tab_disciplina";

if ($result = mysqli_query($conexao, $sqlqtdcurso)) {

  // Return the number of rows in result set
  $qtd = mysqli_num_rows($result);
} else {
  printf("ERRO");
}

if ($resultd = mysqli_query($conexao, $sqlqtddiscip)) {

  // Return the number of rows in result set
  $qtddiscip = mysqli_num_rows($resultd);
} else {
  printf("ERRO");
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>SAGRAC - Home</title>
  <link rel="icon" type="image/x-icon" href="../img/sagracIcone.ico" />
  <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../style/diretorStyle.css" />
  <link href="../style/diretorHome.css" rel="stylesheet" />
</head>

<body>
  <!--Wrapper da Sidebar  -->
  <div class="wrapper">
    <nav id="sidebar">
      <div class="sidebar-header">
        <img src="../img/sagracletras.png" width="110%" height="110%" align="center" />
      </div>
      <ul class="list-unstyled components">
        <hr>
        <li class="active">
          <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Criação de Grade</a>
          <ul class="collapse list-unstyled" id="homeSubmenu">
            <li>
              <a href="diretorInserirCurso.php">Inserir Curso </a>
            </li>
            <li>
              <a href="diretorEditarCurso.php">Editar Curso</a>
            </li>
            <li>
              <a href="diretorVisualizarCursos.php">Visualização dos Cursos</a>
            </li>
          </ul>
        </li>
        <hr>
        <li class="active">
          <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Professores</a>
          <ul class="collapse list-unstyled" id="homeSubmenu2">
            <li>
              <a href="diretorInserirCurso.php">Inserir Professor </a>
            </li>
            <li>
              <a href="diretorEditarCurso.php">Editar Professor</a>
            </li>
            <li>
              <a href="diretorVisualizarCursos.php">Visualizar Professores</a>
            </li>
          </ul>
        </li>
        <hr>
        <li>
          <a href="diretorHome.php">Home</a>
          <a href="sobre.php">Sobre</a>
          <a href="login.php">Dashboard</a>
          <a href="login.php">Configurações</a>
          <a href="login.php">Logout</a>
          <ul class="list-unstyled CTAs"></ul>
        </li>
      </ul>
    </nav>

    <!-- Page Content Holder -->
    <div id="content">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <button type="button" id="sidebarCollapse" class="navbar-btn">
            <span></span>
            <span></span>
            <span></span>
          </button>
          <h4><?php echo "Seja bem vindo, Diretor $nome."; ?></h4>
        </div>
      </nav>

      <!-- CONTEÚDO DA PÁGINA -->
      <?php if ($conta_id = 1) {
        echo "
        <section>
        <div>
        <div class='row d-flex justify-content-center align-items-center h-100'>
            <div class='col-md-12 col-xl-4'>

        <div class='card' style='border-radius: 95px;'>
          <div class='card-body text-center'>
            <div class='mt-3 mb-4'>
              <img src='../img/diretorprofile.png'
                class='rounded-circle img-fluid' style='width: 100px;' />
            </div>
            <h4 class='mb-2'>$nome</h4>
            <p class='text-muted mb-4'>Diretor</p>

            <div class='d-flex justify-content-between text-center mt-5 mb-2'>
              <div>
                <p class='mb-2 h5'>$qtd</p>
                <p class='text-muted mb-0'>Cursos</p>
              </div>
              <div class='px-3'>
                <p class='mb-2 h5'>$qtddiscip</p>
                <p class='text-muted mb-0'>Disciplinas</p>
              </div>
              
              

            </div>
            

          </div>
          
        </div>
            
      </div>
      
    </div>
    
  </div>
  <hr>
  <h5 align='center'>Seu nível de acesso no momento é de: Diretor.</h5>
</section>
        <hr>
        <p align='center'>Você pode iniciar, retomar ou editar cursos na aba 'Criação de Grade'.</p>
        <hr>
        <h3 align='center'>Como o Sistema funciona:</h3>
        <hr>
        <p>Através dos inputs do diretor, o sistema coleta o número de dias pelos quais devem estar distribuídas as aulas, que normalmente é de segunda-feira a sexta-feira.
         Por exemplo: se a grade horária deve compreender os dias da semana de segunda-feira a sexta-feira, o número
        de dias é 5. Esses dados são inseridos no código fonte do aplicativo.   </p>
        <hr>
        <p>As turmas ou períodos, ou seja, os oferecimentos de disciplinas, que serão inseridos no
        aplicativo pelo usuário. Esta opção está disponível em cadastro de disciplinas, ao editar um curso.</p>
        <h5 align='center'>Coleta de Disponibilidade de Professores</h5>
        <hr>
        <p>A disponibilidade de horário dos professores ao cadastro. Cada disponibilidade
        tem um valor (um número inteiro no intervalo [0,1]) e o objetivo do programa é minimizar a
        soma dos valores das disponibilidades não atendidas. Ele rodará a criação da Grade até que não hajam indisponibilidades para os professores. 
        </p>
        <hr>
        <h2 align='center'>Como representar a Grade:</h2>
        <hr>
        <h4 align='center'>Caso de Uso: Análise e Desenvolvimento de Sistemas AMS Vespertino s/ Aulas de Sábado com 2 períodos e anos (4 semestres)</h4>
        <hr>
        <p>Para simplificar o sistema, não vamos utilizar o sábado. De acordo com o período, neste caso Vespertino, primeiro, É dada uma enumeração a cada linha da tabela da grade e seus horários, totalizando 10 horários em 1 semana. No total, temos 5 dias para distribuir as aulas.</p>
        <hr>
        <table class='table'>
  <thead>
    <tr>
      <th scope='col'>Vespertino</th>
      <th scope='col'>Segunda-Feira</th>
      <th scope='col'>Terça-Feira</th>
      <th scope='col'>Quarta-Feira</th>
      <th scope='col'>Quinta-Feira</th>
      <th scope='col'>Sexta-Feira</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope='row'>14:50-16:30</th>
      <td>1</td>
      <td>3</td>
      <td>5</td>
      <td>7</td>
      <td>9</td>
    </tr>
    <tr>
      <th scope='row'>16:40-18:20</th>
      <td>2</td>
      <td>4</td>
      <td>6</td>
      <td>8</td>
      <td>10</td>
    </tr>
  </tbody>
</table>
<hr>
        <p>Com a enumeração dada para um dado período, fica mais fácil para o código ser ajustado pelo programador. Em seguida, coletamos a disponibilidade dos professores.</p>
        <hr>
        <h4>Tabela de Disponibilidade e Preferência de Horário dos Professores:<h4>
        <hr>
</h5>Caso de Uso: Um professor que pode trabalhar de quarta e terça.</h5>

        <table class='table'>
        <thead>
          <tr>
            <th scope='col'>Roberto</th>
            <th scope='col'>Segunda-Feira</th>
            <th scope='col'>Terça-Feira</th>
            <th scope='col'>Quarta-Feira</th>
            <th scope='col'>Quinta-Feira</th>
            <th scope='col'>Sexta-Feira</th>
      
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope='row'>14:50-16:30</th>
            <td>0</td>
            <td>1</td>
            <td>1</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <th scope='row'>16:40-18:20</th>
            <td>0</td>
            <td>1</td>
            <td>1</td>
            <td>0</td>
            <td>0</td>
          </tr>
        </tbody>
      </table>
  
      <hr>  
      <p>Onde 1 significa disponível e 0 significa não disponível.</p>
              <hr>

        ";
      } else echo "Aluno."; ?>
      </p>
      <script src="../js/sidebar.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>

</html>