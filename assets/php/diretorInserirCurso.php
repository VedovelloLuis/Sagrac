<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>SAGRAC - Inserir Curso</title>
  <link rel="icon" type="image/x-icon" href="../img/sagracIcone.ico" />
  <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../style/diretorStyle.css" />
</head>



<body>
  <div id="content">
    <nav class="navbar navbar-expand-lg navbar-transparent bg-transparent">
      <div class="container-fluid">
        <h4>Inserir Cursos</h4>
      </div>
    </nav>
    <br>
    <form method="POST" action="diretorInserirCurso.php">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nome">Nome do Curso</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Nome do Curso" />
        </div>
        <div class="form-group col-md-6">
          <label for="carga">Carga Horária em Horas</label>
          <input type="number" class="form-control" name="carga" id="carga" placeholder="Carga Horária" />
        </div>
        <div class="form-group col-md-6">
          <label for="carga">Sigla do Curso</label>
          <input type="text" class="form-control" name="sigla" id="sigla" placeholder="Exemplo: ADS" />
        </div>
      </div>

      <div class="col-md-6 mt-4">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" id="periodo" value="Matutino" name="periodo" />
          <label class="form-check-label" for="inlineCheckbox1">Matutino</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" id="periodo" value="Vespertino" name="periodo" />
          <label class="form-check-label" for="inlineCheckbox2">Vespertino</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" id="periodo" value="Noturno" name="periodo" />
          <label class="form-check-label" for="inlineCheckbox3">Noturno</label>

        </div>
        <hr>
        <div class="container__button">

          <input type="submit" class="btn btn-primary" name="enviar" value="Salvar Curso" method="POST" />
        </div>

      </div>

 

  </form>

  <?php

  include('config.php');
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['enviar'])) {

      $cursonome = $_POST["name"];
      $chtotal = $_POST["carga"];
      $sigla = $_POST["sigla"];
      $periodo = $_POST["periodo"];

      include('config.php');

      if (!$conexao) {
        die("Conexão não feita." . mysqli_connect_error());
      } else {
        echo "Conectado com sucesso ao banco de dados <br>";
        $sql = "INSERT INTO tab_curso (cursoId, cursoTurma, chTotal, sigla, periodo) VALUES (NULL, '$cursonome','$chtotal', '$sigla', '$periodo')";
        if (mysqli_query($conexao, $sql)) {
          echo "Nova inserção criada com sucesso <br>
      ";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
        }
      }
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
    }
  }
  ?>

  </div>
 

  <script src="../js/sidebar.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

</body>

</html>