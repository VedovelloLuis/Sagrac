<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>SAGRAC - Visualizar Curso</title>
  <link rel="icon" type="image/x-icon" href="../img/sagracIcone.ico" />
  <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../style/diretorStyle.css" />
</head>

<body>

  <?php
  include('config.php');

  ?>

 

    <div id="content">
    <nav class="navbar navbar-expand-lg navbar-transparent bg-transparent">
        <div class="container-fluid">
          <h4>Visualização de Cursos</h4>
        </div>
      </nav>
      <br>
      <?php

      $selecao = "SELECT * FROM tab_curso";
      $result_query = mysqli_query($conexao, $selecao);
      if (mysqli_query($conexao, $selecao)) {
        echo "<table id='Tabela' class='content' border='1'>
            <thead class='thead center'>
            <th onclick='sortTable(0)'>ID</th>
            <th onclick='sortTable(1)'>Curso</th>
            <th onclick='sortTable(2)'>Carga Horária</th>
            <th onclick='sortTable(3)'>Período</th>
            <th onclick='sortTable(4)'>Sigla/Código</th>
            </thead>
            <tbody id='tbody'>";

        while ($row = mysqli_fetch_array($result_query)) {
          print "<tr class='center'>";
          print "<td>" . $row['cursoId'] . "</td>";
          print "<td>" . $row['cursoTurma'] . "</td>";
          print "<td>" . $row['chTotal'] . "h</td>";
          print "<td>" . $row['periodo'] . "</td>";
          print "<td>" . $row['sigla'] . "</td>";
          print "</tr>";

        };
        echo "</tbody></table>";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
      }
      ?>


    </div>
  </div>

  <script src="../js/sidebar.js"></script>
  <script src="../js/tablesort.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>

</html>