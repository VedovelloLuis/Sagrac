
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>SAGRAC - Home</title>
    <link
      rel="icon"
      type="image/x-icon"
      href="../img/sagracIcone.ico"
    />
    <link
      rel="stylesheet"
      href="../../node_modules/bootstrap/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="../style/diretorStyle.css" />
    <link href="../style/diretorHome.css" rel="stylesheet" />
  </head>
  <body>



   <!--Wrapper da Sidebar  -->
    <div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header">
          <img
            src="../img/sagracletras.png"
            width="110%"
            height="110%"
            align="center"
          />

        </div> 
        <ul class="list-unstyled components">
        <hr>
          <li class="active">
            <a
              href="#homeSubmenu"
              data-toggle="collapse"
              aria-expanded="false"
              class="dropdown-toggle"
              >Criação de Grade</a>
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
            <a
              href="#homeSubmenu2"
              data-toggle="collapse"
              aria-expanded="false"
              class="dropdown-toggle"
              >Professores</a>
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
      <nav class="navbar navbar-expand-lg navbar-transparent bg-transparent">
          <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="navbar-btn">
              <span></span>
              <span></span>
              <span></span>
            </button>
            <h4>Sobre</h4>
          </div>
        </nav>

       <h5 align='center'>Sistema desenvolvido por:</h5>
       <h5 align='center'>Luis Vedovello</h5>
    <script src="../js/sidebar.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

  </body>
</html>
