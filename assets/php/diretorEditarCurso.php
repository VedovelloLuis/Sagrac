<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>SAGRAC - Edição de Cursos</title>
  <link rel="icon" type="image/x-icon" href="../img/sagracIcone.ico" />
  <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../style/diretorStyle.css" />
</head>

<body>
  
    <div id="content">
    <nav class="navbar navbar-expand-lg navbar-transparent bg-transparent">
        <div class="container-fluid">
          <h4>Edição de Cursos</h4>
          <form action="edita.php" method="POST" target="iframeEdita">
            <select name="Curso" id="curso">
              <!-- FAZ A VISUALIZAÇÃO PARA CONECTAR -->
              <?php
              include('config.php');
              $selecaovesp = "SELECT * FROM tab_curso WHERE periodo = 'Vespertino'";
              $selecaomat = "SELECT * FROM tab_curso WHERE periodo = 'Matutino'";
              $selecaonot = "SELECT * FROM tab_curso WHERE periodo = 'Noturno'";
              $result_vesp = mysqli_query($conexao, $selecaovesp);
              $result_mat = mysqli_query($conexao, $selecaomat);
              $result_not = mysqli_query($conexao, $selecaonot);
              if (mysqli_query($conexao, $selecaovesp)) {
                echo "<label for='Curso'>Escolha um curso:</label>";
                echo "<optgroup label='Vespertino'>";
                while ($row = mysqli_fetch_array($result_vesp)) {
                  print "<option value=" . $row['cursoId'] . ">";
                  print $row['cursoTurma'];
                  print "</option>";
                };
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
              }
              if (mysqli_query($conexao, $selecaomat)) {
                echo "</optgroup>
                      <optgroup label='Matutino'>";
                while ($row = mysqli_fetch_array($result_mat)) {
                  print "<option value=" . $row['cursoId'] . ">";
                  print $row['cursoTurma'];
                  print "</option>";
                };
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
              }
              if (mysqli_query($conexao, $selecaonot)) {
                echo "</optgroup>
                      <optgroup label='Noturno'>";
                while ($row = mysqli_fetch_array($result_not)) {
                  print "<option value=" . $row['cursoId'] . ">";
                  print $row['cursoTurma'];
                  print "</option>";
                };
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
              }
              ?>
              </optgroup>
            </select>
            <input type="submit" name="selecionar" value="Selecionar" id="selecionar" />
          </form>
        </div>
        
      </nav>
      <iframe src="infoeditar.html" style="border: none;" frameborder="0" name="iframeEdita" height="1000px" width="100%" sandbox="allow-forms";></iframe>
    </div>




  <script src="../js/sidebar.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>

</html>