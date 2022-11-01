<?php
$cursonome = $_POST["name"];
$chtotal = $_POST["carga"];
$cursoid = $_POST["id"];

$servername = "localhost";
$database = "bd_atribuicoesdisciplinares";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Conexão não feita." . mysqli_connect_error());
}
else{
    echo "Conectado com sucesso ao banco de dados <br>";
    $sql = "INSERT INTO tab_curso (cursoTurma, cursoId, chTotal, periodo) VALUES ('$cursonome','$cursoid','$chtotal', 'Tarde')";
if (mysqli_query($conn, $sql)) {
      echo "Nova inserção criada com sucesso <br>";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
      }
?>
<html>
<body>
INSERIDO: <br>
Id do curso: <?php echo $_POST["id"]; ?><br>
Nome do curso: <?php echo $_POST["name"]; ?><br>
Carga horária total: <?php echo $_POST["carga"]; ?> horas.
<a href="../../project/diretorInserirCurso.html"> Voltar e inserir outro curso</a>

</body>
</html>