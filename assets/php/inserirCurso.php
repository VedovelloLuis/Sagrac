<?php
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




//       $selecao = "SELECT cursoId,cursoTurma,chTotal, sigla, periodo FROM tabela"; 
//       $result_query = mysql_query($conexao, $selecao ) or die(' Erro na query:' . $query . ' ' . mysql_error() );
//       while ($row = mysql_fetch_array( $result_query )) 
// { 
//       print $row[cursoId] . " -- " . $row[cursoTurma] . " -- " . $row[chTotal] . $row[sigla] . " -- " . $row[periodo]; 
// }

?>
<html>

<body>
      <br>
      INSERIDO: <br>
      Sigla do curso: <?php echo $_POST["sigla"]; ?><br>
      Nome do curso: <?php echo $_POST["name"]; ?><br>
      Carga horária total: <?php echo $_POST["carga"]; ?> horas.
      <a href="diretorInserirCurso.php"> Voltar e inserir outro curso</a>

</body>

</html>