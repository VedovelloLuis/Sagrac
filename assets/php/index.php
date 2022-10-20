<?php 
session_start();

$login = $_POST['usuario'];
$senha = $_POST['senha'];

include('conexao.php');

$result = "select * from gestor where usuario = '$login' and senha= '$senha'";
$resultado = mysqli_query($conn, $result);
$row = mysqli_num_rows($resultado);

while ($registro = mysqli_fetch_array($resultado)) {
    $nome = $registro['nome'];
    $cod = $registro['cod_gestor'];
}

if ($row > 0) {
    $_SESSION['usuario'] = $login;
    $_SESSION['senha'] = $senha;
    $_SESSION['nome'] = $nome;
    $_SESSION['cod_gestor'] = $cod; 
    header('location:home.php');
} else {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    unset($_SESSION['nome']); 
    unset($_SESSION['cod_gestor']); 
    header('location:login.php');
}
?>
