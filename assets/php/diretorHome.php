<?php
session_start();

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  unset($_SESSION['nome']);
  unset($_SESSION['diretorio']);
  header('location:login.php');
}

$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$conta_id = $_SESSION['contaId'];
$diretorioperfil = $_SESSION['diretorio'];

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
  
    <!-- Page Content Holder -->
    <div id="content">
      <nav class="navbar navbar-expand-lg navbar-transparent bg-transparent">
        <div class="container-fluid">

          <h4><?php echo "Seja bem vindo, Diretor $nome."; ?></h4>
        </div>
      </nav>
    <br>
      <!-- CONTEÚDO DA PÁGINA -->
      <?php if ($conta_id = 1) {
        echo "

    <div class='row'>
      <div class='col-lg-4'>
        <div class='card mb-4'>
          <div class='card-body text-center'>
            <img src='../img/$diretorioperfil' alt='avatar'
              class='rounded-circle img-fluid' style='width: 150px;'>
            <h5 class='my-3'>$nome</h5>
            <p class='text-muted mb-1'>Diretor</p>
            <p class='text-muted mb-4'>FATEC Antônio Russo</p>

          </div>
        </div>

        <div class='card mb-5 mb-lg-0'>
          <div class='card-body p-0'>
            <ul class='list-group list-group-flush rounded-3'>
              <li class='list-group-item d-flex justify-content-between align-items-center p-3'>
                <i class='fas fa-globe fa-lg'>Redes do Projeto:</i>
                <p class='mb-1'></p>
              </li>
              <li class='list-group-item d-flex justify-content-between align-items-center p-3'>
                <i class='fab fa-github fa-lg' style='color: #333333;'> Github</i>
                <p class='mb-2'>github.com/VedovelloLuis/Sagrac</p>
              </li>
              <li class='list-group-item d-flex justify-content-between align-items-center p-3'>
                <i class='fab fa-twitter fa-lg' style='color: #55acee;'>Twitter</i>
                <p class='mb-3'>@sagracProjeto</p>
              </li>
              <li class='list-group-item d-flex justify-content-between align-items-center p-3'>
                <i class='fab fa-instagram fa-lg' style='color: #ac2bac;'>Blog</i>
                <p class='mb-3'>sagrac.blogspot.com.br</p>
              </li>
              <li class='list-group-item d-flex justify-content-between align-items-center p-3'>
                <i class='fab fa-facebook-f fa-lg' style='color: #3b5998;'>Celular p/ Contato</i>
                <p class='mb-2'>(11) 95746-0706</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class='col-lg-8'>
        <div class='card mb-4'>
          <div class='card-body'>
            <div class='row'>
              <div class='col-sm-3'>
                <p class='mb-0'>Nome Completo</p>
              </div>
              <div class='col-sm-9'>
                <p class='text-muted mb-0'>$nome</p>
              </div>
            </div>
            <hr>
            <div class='row'>
              <div class='col-sm-3'>
                <p class='mb-0'>Email</p>
              </div>
              <div class='col-sm-9'>
                <p class='text-muted mb-0'>$email</p>
              </div>
            </div>
            <hr>
            <div class='row'>
              <div class='col-sm-3'>
                <p class='mb-0'>Código</p>
              </div>
              <div class='col-sm-9'>
                <p class='text-muted mb-0'>55.192.283-13</p>
              </div>
            </div>
            <hr>
            <div class='row'>
              <div class='col-sm-3'>
                <p class='mb-0'>Tipo de Login</p>
              </div>
              <div class='col-sm-9'>
                <p class='text-muted mb-0'>Administrador</p>
              </div>
            </div>
            <hr>
            <div class='row'>
              <div class='col-sm-3'>
                <p class='mb-0'>Unidade</p>
              </div>
              <div class='col-sm-9'>
                <p class='text-muted mb-0'>FATEC São Caetano</p>
              </div>
            </div>
          </div>
        </div>
        <div class='row'>
          <div class='col-md-6'>
            <div class='card mb-4 mb-md-0'>
              <div class='card-body'>
                <p class='mb-4'><span class='text-primary font-italic me-1'>Últimos</span> 5 cursos editados
                </p>
                <p class='mb-1' style='font-size: .77rem;'>Análise e Desenvolvimento de Sistemas</p>
                <div class='progress rounded' style='height: 5px;'>
                  <div class='progress-bar' role='progressbar' style='width: 100%' aria-valuenow='80'
                    aria-valuemin='0' aria-valuemax='100'></div>
                </div>
                <p class='mt-4 mb-1' style='font-size: .77rem;'>Análise e Desenvolvimento de Software</p>
                <div class='progress rounded' style='height: 5px;'>
                  <div class='progress-bar' role='progressbar' style='width: 100%' aria-valuenow='72'
                    aria-valuemin='0' aria-valuemax='100'></div>
                </div>
                <p class='mt-4 mb-1' style='font-size: .77rem;'>Engenharia Robótica</p>
                <div class='progress rounded' style='height: 5px;'>
                  <div class='progress-bar' role='progressbar' style='width: 100%' aria-valuenow='89'
                    aria-valuemin='0' aria-valuemax='100'></div>
                </div>
                <p class='mt-4 mb-1' style='font-size: .77rem;'>Inteligência Artificial</p>
                <div class='progress rounded' style='height: 5px;'>
                  <div class='progress-bar' role='progressbar' style='width: 100%' aria-valuenow='55'
                    aria-valuemin='0' aria-valuemax='100'></div>
                </div>
                <p class='mt-4 mb-1' style='font-size: .77rem;'>Robótica Industrial Automotiva</p>
                <div class='progress rounded mb-2' style='height: 5px;'>
                  <div class='progress-bar' role='progressbar' style='width: 100%' aria-valuenow='66'
                    aria-valuemin='0' aria-valuemax='100'></div>
                </div>
              </div>
            </div>
          </div>
          <div class='col-md-6'>
            <div class='card mb-4 mb-md-0'>
              <div class='card-body'>
                <p class='mb-4'><span class='text-primary font-italic me-1'>Últimos</span> 5 cursos criados
                </p>
                <p class='mb-1' style='font-size: .77rem;'>Robótica Industrial Automotiva</p>
                <div class='progress rounded' style='height: 5px;'>
                  <div class='progress-bar' role='progressbar' style='width: 100%' aria-valuenow='80'
                    aria-valuemin='0' aria-valuemax='100'></div>
                </div>
                <p class='mt-4 mb-1' style='font-size: .77rem;'>Arquitetura de Inteligência Artificial</p>
                <div class='progress rounded' style='height: 5px;'>
                  <div class='progress-bar' role='progressbar' style='width: 100%' aria-valuenow='72'
                    aria-valuemin='0' aria-valuemax='100'></div>
                </div>
                <p class='mt-4 mb-1' style='font-size: .77rem;'>Engenharia Robótica</p>
                <div class='progress rounded' style='height: 5px;'>
                  <div class='progress-bar' role='progressbar' style='width: 100%' aria-valuenow='89'
                    aria-valuemin='0' aria-valuemax='100'></div>
                </div>
                <p class='mt-4 mb-1' style='font-size: .77rem;'>Engenharia Cibernética</p>
                <div class='progress rounded' style='height: 5px;'>
                  <div class='progress-bar' role='progressbar' style='width: 100%' aria-valuenow='55'
                    aria-valuemin='0' aria-valuemax='100'></div>
                </div>
                <p class='mt-4 mb-1' style='font-size: .77rem;'>Construção Civil</p>
                <div class='progress rounded mb-2' style='height: 5px;'>
                  <div class='progress-bar' role='progressbar' style='width: 100%' aria-valuenow='100'
                    aria-valuemin='0' aria-valuemax='100'></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 ";
      } else echo "Aluno."; ?>
      </p>
      <script src="../js/sidebar.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>

</html>