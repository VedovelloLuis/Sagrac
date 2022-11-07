<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>SAGRAC - Inserir Professor</title>
  <link rel="icon" type="image/x-icon" href="../img/sagracIcone.ico" />
  <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../style/diretorStyle.css" />
</head>



<body>
  <div id="content">
    <nav class="navbar navbar-expand-lg navbar-transparent bg-transparent">
      <div class="container-fluid">
        <h4>Inserir Professor</h4>
      </div>
    </nav>
    <br>
    <form method="POST" action="diretorInserirCurso.php">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nome">Nome do Professor</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Nome do Professor" />
        </div>


        <div class="form-group col-md-6">
          <label for="inpMat">Horário de Trabalho:</label><br>
          <div class="form-check form-check-inline">
            <input onclick="toggleMat()" class="form-check-input" type="checkbox" id='inpMat' value="Matutino" name="periodo">
            <label class="form-check-label" for="inlineCheckbox1">Matutino</label>
          </div>
          <div class="form-check form-check-inline">
            <input onclick="toggleVes()" class="form-check-input" type="checkbox" id='inpVesp' value="Vespertino" name="periodo">
            <label class="form-check-label" for="inlineCheckbox2">Vespertino</label>
          </div>
          <div class="form-check form-check-inline">
            <input onclick="toggleNot()" class="form-check-input" type="checkbox" id='inpNot' value="Noturno" name="periodo">
            <label class="form-check-label" for="inlineCheckbox3">Noturno</label>

          </div>


        </div>
      </div>

      <hr>
      <p style="text-align: center;">Assinale a disponibilidade de horário do professor conforme suas horas de trabalho.</p>
      <div id="mat" style="display: none;">
        <table class='content' border='1' style="margin-bottom:30px; margin-top:15px; margin-left:auto; margin-right:auto; width: min-content;">
          <thead class='thead center' style="height: min-content;">
            <tr style="text-align: center;">
              <th colspan="16">
                <h4>Matutino</h4>
              </th>
            </tr>
          </thead>
          <thead class='thead center' style="height: min-content;">
            <tr style="text-align: center;">
              <th colspan="3">Segunda</th>
              <th colspan="3">Terça-Feira</th>
              <th colspan="3">Quarta-Feira</th>
              <th colspan="4">Quinta-Feira</th>
              <th colspan="3">Sexta-Feira</th>
            </tr>
          </thead>
          <tbody id='tbody'>
            <tr style="text-align: center;">
              <td>13:00-14:40</td>
              <td>14:50-16:40</td>
              <td>16:40-18:20</td>
              <td>13:00-14:40</td>
              <td>14:50-16:40</td>
              <td>16:40-18:20</td>
              <td>13:00-14:40</td>
              <td>14:50-16:40</td>
              <td>16:40-18:20</td>
              <td>13:00-14:40</td>
              <td>14:50-16:40</td>
              <td>16:40-18:20</td>
              <td>18:30-19:20</td>
              <td>13:00-14:40</td>
              <td>14:50-16:40</td>
              <td>16:40-18:20</td>
            </tr>
            <tr style="text-align: center;">
              <!-- SEGUNDA -->
              <td>1</td>
              <td>2</td>
              <td>3</td>
              <!-- TERÇA -->
              <td>4</td>
              <td>5</td>
              <td>6</td>
              <!-- QUARTA-FEIRA -->
              <td>7</td>
              <td>8</td>
              <td>9</td>
              <!-- QUINTA FEIRA -->
              <td>10</td>
              <td>11</td>
              <td>12</td>
              <td>13</td>
              <!-- SEXTA FEIRA -->
              <td>14</td>
              <td>15</td>
              <td>16</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div id="ves" style="display: none;">
        <table class='content' border='1' style="margin-bottom:30px; margin-top:15px; margin-left:auto; margin-right:auto; width: min-content;">
          <thead class='thead center' style="height: min-content;">
            <tr style="text-align: center;">
              <th colspan="16">
                <h4>Vespertino</h4>
              </th>
            </tr>
          </thead>
          <thead class='thead center' style="height: min-content;">
            <tr style="text-align: center;">
              <th colspan="3">Segunda</th>
              <th colspan="3">Terça-Feira</th>
              <th colspan="3">Quarta-Feira</th>
              <th colspan="4">Quinta-Feira</th>
              <th colspan="3">Sexta-Feira</th>
            </tr>
          </thead>
          <tbody id='tbody'>
            <tr style="text-align: center;">
              <td>13:00-14:40</td>
              <td>14:50-16:40</td>
              <td>16:40-18:20</td>
              <td>13:00-14:40</td>
              <td>14:50-16:40</td>
              <td>16:40-18:20</td>
              <td>13:00-14:40</td>
              <td>14:50-16:40</td>
              <td>16:40-18:20</td>
              <td>13:00-14:40</td>
              <td>14:50-16:40</td>
              <td>16:40-18:20</td>
              <td>18:30-19:20</td>
              <td>13:00-14:40</td>
              <td>14:50-16:40</td>
              <td>16:40-18:20</td>
            </tr>
            <tr style="text-align: center;">
              <!-- SEGUNDA -->
              <td><input class="form" type="checkbox" id='hr1' value="1" name="1"></input></td>
              <td><input class="form" type="checkbox" id='hr1' value="1" name="1"></input></td>
              </td>
              <td><input class="form" type="checkbox" id='hr1' value="1" name="1"></input></td>
              </td>
              <!-- TERÇA -->
              <td><input class="form" type="checkbox" id='hr1' value="1" name="1"></input></td>
              </td>
              <td><input class="form" type="checkbox" id='hr1' value="1" name="1"></input></td>
              </td>
              <td><input class="form" type="checkbox" id='hr1' value="1" name="1"></input></td>
              </td>
              <!-- QUARTA-FEIRA -->
              <td><input class="form" type="checkbox" id='hr1' value="1" name="1"></input></td>
              </td>
              <td><input class="form" type="checkbox" id='hr1' value="1" name="1"></input></td>
              </td>
              <td><input class="form" type="checkbox" id='hr1' value="1" name="1"></input></td>
              </td>
              <!-- QUINTA FEIRA -->
              <td><input class="form" type="checkbox" id='hr1' value="1" name="1"></input></td>
              </td>
              <td><input class="form" type="checkbox" id='hr1' value="1" name="1"></input></td>
              </td>
              <td><input class="form" type="checkbox" id='hr1' value="1" name="1"></input></td>
              </td>
              <td><input class="form" type="checkbox" id='hr1' value="1" name="1"></input></td>
              </td>
              <!-- SEXTA FEIRA -->
              <td><input class="form" type="checkbox" id='hr1' value="1" name="1"></input></td>
              </td>
              <td><input class="form" type="checkbox" id='hr1' value="1" name="1"></input></td>
              </td>
              <td><input class="form" type="checkbox" id='hr1' value="1" name="1"></input></td>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div id="not" style="display: none;">

        <table class='content' border='1' style="margin-bottom:30px; margin-top:15px; margin-left:auto; margin-right:auto; width: min-content;">
          <thead class='thead center' style="height: min-content;">
            <tr style="text-align: center;">
              <th colspan="16">
                <h4>Noturno</h4>
              </th>
            </tr>
          </thead>
          <thead class='thead center' style="height: min-content;">
            <tr style="text-align: center;">
              <th colspan="3">Segunda</th>
              <th colspan="3">Terça-Feira</th>
              <th colspan="3">Quarta-Feira</th>
              <th colspan="4">Quinta-Feira</th>
              <th colspan="3">Sexta-Feira</th>
            </tr>
          </thead>
          <tbody id='tbody'>
            <tr style="text-align: center;">
              <td>13:00-14:40</td>
              <td>14:50-16:40</td>
              <td>16:40-18:20</td>
              <td>13:00-14:40</td>
              <td>14:50-16:40</td>
              <td>16:40-18:20</td>
              <td>13:00-14:40</td>
              <td>14:50-16:40</td>
              <td>16:40-18:20</td>
              <td>13:00-14:40</td>
              <td>14:50-16:40</td>
              <td>16:40-18:20</td>
              <td>18:30-19:20</td>
              <td>13:00-14:40</td>
              <td>14:50-16:40</td>
              <td>16:40-18:20</td>
            </tr>
            <tr style="text-align: center;">
              <!-- SEGUNDA -->
              <td>1</td>
              <td>2</td>
              <td>3</td>
              <!-- TERÇA -->
              <td>4</td>
              <td>5</td>
              <td>6</td>
              <!-- QUARTA-FEIRA -->
              <td>7</td>
              <td>8</td>
              <td>9</td>
              <!-- QUINTA FEIRA -->
              <td>10</td>
              <td>11</td>
              <td>12</td>
              <td>13</td>
              <!-- SEXTA FEIRA -->
              <td>14</td>
              <td>15</td>
              <td>16</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="container__button">
      <input type="submit" class="btn btn-secondary" name="enviar" value="Salvar Professor" method="POST" />
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
  <script>
    function toggleMat() {
      var x = document.getElementById("mat");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }

    function toggleVes() {
      var x = document.getElementById("ves");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }

    function toggleNot() {
      var x = document.getElementById("not");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  </div>
</body>

</html>