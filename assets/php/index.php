<?php
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

include('config.php');

$result = "select * from tab_login where email = '$email' and senha= '$senha'";
$resultado = mysqli_query($conexao, $result);
$row = mysqli_num_rows($resultado);

while ($registro = mysqli_fetch_array($resultado)) {
    $nome = $registro['nome'];
    $cod = $registro['contaId'];
    $diretorio = $registro['diretorioimg'];
}

if ($row > 0) {
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    $_SESSION['nome'] = $nome;
    $_SESSION['contaId'] = $cod; 
    $_SESSION['diretorio'] = $diretorio; 
    header('location:menu.php');
} else {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    unset($_SESSION['nome']); 
    unset($_SESSION['contaId']); 
    unset($_SESSION['diretorio']); 
    header('location:index.html');

}
?>
