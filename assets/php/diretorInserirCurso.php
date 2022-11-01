<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>SAGRAC - Inserir Curso</title>
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
  </head>
  <body>
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
          <li class="active">
            <a
              href="#homeSubmenu"
              data-toggle="collapse"
              aria-expanded="false"
              class="dropdown-toggle"
              >Criação de Grade</a
            >
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
          <li>
            <a href="diretorHome.php">Home</a>
            <a href="login.php">Logout</a>
            <ul class="list-unstyled CTAs"></ul>
          </li>
        </ul>
      </nav>
      <div id="content">
        <nav class="navbar navbar-expand-lg bg-light">
          <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="navbar-btn">
              <span></span>
              <span></span>
              <span></span>
            </button>
            <h4>Inserir Cursos</h4>
          </div>
        </nav>
        <form method="POST" action="../assets/php/inserirCurso.php">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nome">Nome do Curso</label>
              <input
                type="text"
                class="form-control"
                name="name"
                id="name"
                placeholder="Nome do Curso"
              />
            </div>
            <div class="form-group col-md-6">
              <label for="nome">ID do Curso</label>
              <input
                type="number"
                class="form-control"
                name="id"
                id="id"
                placeholder="ID do Curso"
              />
            </div>
            <div class="form-group col-md-6">
              <label for="carga">Carga Horária em Horas</label>
              <input
                type="number"
                class="form-control"
                name="carga"
                id="carga"
                placeholder="Carga Horária"
              />
            </div>
            <div class="col-md-6 mt-4">
              <div class="form-check form-check-inline">
                <input
                  class="form-check-input"
                  type="checkbox"
                  id="inlineCheckbox1"
                  value="option1"
                />
                <label class="form-check-label" for="inlineCheckbox1"
                  >Matutino</label
                >
              </div>
              <div class="form-check form-check-inline">
                <input
                  class="form-check-input"
                  type="checkbox"
                  id="inlineCheckbox2"
                  value="option2"
                />
                <label class="form-check-label" for="inlineCheckbox2"
                  >Vespertino</label
                >
              </div>
              <div class="form-check form-check-inline">
                <input
                  class="form-check-input"
                  type="checkbox"
                  id="inlineCheckbox3"
                  value="option3"
                />
                <label class="form-check-label" for="inlineCheckbox3"
                  >Noturno</label
                >
              </div>
              <div class="form-check form-check-inline">
                <input
                  class="form-check-input"
                  type="checkbox"
                  id="inlineCheckbox4"
                  value="option4"
                />
                <label class="form-check-label" for="inlineCheckbox4"
                  >Integral</label
                >
              </div>
            </div>
          </div>
          <div class="container__button">
            <input
              type="submit"
              class="btn btn-primary"
              name="enviar"
              value="Salvar Curso"
              method="POST"
            />
          </div>
        </form>
      </div>

      <script src="../assets/js/sidebar.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </div>
  </body>
</html>