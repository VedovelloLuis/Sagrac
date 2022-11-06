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

<div id="mdb-preloader" class="flex-center">
  <div class="preloader-wrapper active">
    <div class="spinner-layer spinner-blue-only">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div>
      <div class="gap-patch">
        <div class="circle"></div>
      </div>
      <div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div>
</div>


    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <a class="navbar-brand" href="#">Sistema Automatizado de Grade Curricular</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="#"><img src="../img/sagracIcone.ico" align="center" width="20%" height="20%"></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Ferramenta<span class="sr-only"></span></a>
        
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">SIGA</a>
      </li>
           
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Insira..." aria-label="Search">
      <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Procurar</button>
    </form>
  </div>
</nav>



  <!--Wrapper da Sidebar  -->
  <div class="wrapper">
    <nav id="sidebar">
      <div class="sidebar-header"> <!-- <img src="../img/sagracIcone.ico" /> -->
        <img src="../img/sagracletras.png" width="110%" height="110%" align="center" />
              </div>
      <ul class="list-unstyled components">
        <hr>
        <li class="active">
          <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Criação de Grade</a>
          <ul class="collapse list-unstyled" id="homeSubmenu">
            <li>
              <a href="diretorInserirCurso.php" target="conteudo">Inserir Curso </a>
            </li>
            <li>
              <a href="diretorEditarCurso.php" target="conteudo">Editar Curso</a>
            </li>
            <li>
              <a href="diretorVisualizarCursos.php" target="conteudo">Visualização dos Cursos</a>
            </li>
          </ul>
        </li>
        <hr>
        <li class="active">
          <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Professores</a>
          <ul class="collapse list-unstyled" id="homeSubmenu2">
            <li>
              <a href="diretorInserirProfessor.php" target="conteudo">Inserir Professor </a>
            </li>
            <li>
              <a href="diretorEditarCurso.php" target="conteudo">Editar Professor</a>
            </li>
            <li>
              <a href="diretorVisualizarCursos.php" target="conteudo">Visualizar Professores</a>
            </li>
          </ul>
        </li>
        <hr>
        <li>
          <a href="diretorHome.php" target="conteudo">Home</a>
          <a href="sobre.php" target="conteudo">Sobre</a>
          <a href="login.php">Dashboard</a>
          <a href="login.php">Configurações</a>
          <a href="login.php">Logout</a>
          <ul class="list-unstyled CTAs"></ul>
        </li>
      </ul>
    </nav>
        <iframe name="conteudo" src="diretorHome.php" width="100%" frameborder="0" style="border: none; margin-top: 5px;"></iframe>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>

</html>