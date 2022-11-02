<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>SAGRAC - Edição de Cursos</title>
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
      </nav>
      <div id="content">
        <nav class="navbar navbar-expand-lg bg-light">
          <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="navbar-btn">
              <span></span>
              <span></span>
              <span></span>
            </button>

            <h4>Edição de Cursos</h4>
            <form>
              <label for="Curso">Escolha um curso:</label>
              <select name="Curso" id="curso">
                <optgroup label="FATEC SCS">
                  <option value="ADS">
                    Análise e Desenvolvimento de Sistemas
                  </option>
                  <option value="CS">Segurança Cibernética</option>
                </optgroup>
              </select>
              <input type="submit" value="Selecionar" />
            </form>
          </div>
        </nav>
        <table class="content" border="1">
          <thead class="thead center">
            <th>Curso</th>
            <th>Carga Horária</th>
            <th>Período</th>
            <th>Sigla/Código</th>
          </thead>
          <tbody id="tbody">
            <tr class="center">
              <td>Análise e Desenvolvimento de Sistemas</td>
              <td>800h</td>
              <td>Vespertino</td>
              <td>ADS</td>
            </tr>
          </tbody>
        </table>
        <form method="POST" action="#">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nome">Nome do Curso</label>
              <input
                type="text"
                class="form-control"
                name="nome"
                id="nome"
                placeholder="ADS"
              />
            </div>
            <div class="form-group col-md-6">
              <label for="carga">Carga Horária em Horas</label>
              <input
                type="number"
                class="form-control"
                name="carga"
                id="carga"
                placeholder="80"
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
                  checked
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
                  checked
                />
                <label class="form-check-label" for="inlineCheckbox3"
                  >Noturno</label
                >
              </div>

            </div>
          </div>
          <div class="container__button">
            <input
              type="submit"
              class="btn btn-primary"
              name="enviar"
              value="Editar Curso"
              method="#"
            />
          </div>
        </form>
        <table class="content" border="1">
          <thead class="thead center">
            <th>Disciplina</th>
            <th>Carga Horária</th>
            <th>Código</th>
            <th>Aulas Semanais</th>
            <th>Código do  Professor</th>
          </thead>
          <tbody id="tbody">
            <tr class="center">
              <td>Engenharia de Software</td>
              <td>80h</td>
              <td>ADS01</td>
              <td>2</td>
              <td>1</td>
            </tr>
            <tr class="center">
              <td>Estrutura de Dados</td>
              <td>80h</td>
              <td>ADS02</td>
              <td>2</td>
              <td>2</td>
            </tr>
            <tr class="center">
              <td>Interação Humano-Computador</td>
              <td>80h</td>
              <td>ADS03</td>
              <td>1</td>
              <td>3</td>
            </tr>
            <tr class="center">
              <td>Técnicas Av. Banco de Dados </td>
              <td>80h</td>
              <td>ADS04</td>
              <td>1</td>
              <td>4</td>
            </tr>
            <tr class="center">
              <td>Matemática Discreta</td>
              <td>80h</td>
              <td>ADS05</td>
              <td>1</td>
              <td>5</td>
            </tr>
            <tr class="center">
              <td>Técnicas Avançadas de Programação</td>
              <td>80h</td>
              <td>ADS06</td>
              <td>1</td>
              <td>3</td>
            </tr>
            </tr>
          </tbody>
        </table>
        <form method="POST" action="#">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nome">Nome da Disciplina</label>
              <input
                type="text"
                class="form-control"
                name="nomeDisciplina"
                id="nomeDisciplina"
                placeholder="Nome da Disciplina"
                value="Java Orientado a Objetos"
              />
            </div>
            <div class="form-group col-md-6">
              <label for="carga">Carga Horária em Horas</label>
              <input
                type="number"
                class="form-control"
                name="carga"
                id="carga"
                placeholder="Carga Horária em Horas"
                value="80"
              />
            </div>
          </div>
          <div class="container__button">
            <input
              type="submit"
              class="btn btn-primary"
              name="enviar"
              value="Editar Disciplina"
              method="#"
            />
          </div>
        </form>
      </div>
    </div>

    <script src="../js/sidebar.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  </body>
</html>
