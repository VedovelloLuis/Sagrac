<?php
session_start();

if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)) {
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  unset($_SESSION['nome']);
  header('location:login.php');
}

$nome = $_SESSION['nome'];
$cod = $_SESSION['cod_gestor'];

include('conexao.php');

?>

<?php echo "Seja bem vindo $nome"; ?>

<?php

$query_ciclo = "SELECT ano, id FROM ciclo WHERE cod_gestor = $cod";
$result_ciclo = $conn_PDO->prepare($query_ciclo);
$result_ciclo->execute();

while ($row_ciclo = $result_ciclo->fetch(PDO::FETCH_ASSOC)) {
  extract($row_ciclo);
            
  echo "<li>";
  echo "<div class='item'> $ano </div>";
  echo "<table>";
  echo "<tr>";
  echo "<td colspan='2' valign='top'> <p></p> </td>";
  echo "</tr>";
  echo "<tr class='btns'>";
  echo "<td> <button> <a href='visualizar_ciclo.php?id=$id'> Visualizar </a> </button> </td>";
  echo "<td> <button> <a href='editar_ciclo.php?id=$id'> Editar </a> </button> </td>";
  echo "</tr>";
  echo "</table>";
  echo "</li>";
}
?>