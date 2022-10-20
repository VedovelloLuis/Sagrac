<?php 
 if (isset($_POST['submit'])) {

    print_r('Nome do Curso:' . $_POST['nome']);
    print_r('<br>');
    print_r('Carga Horária Total:' . $_POST['carga']);
    print_r('<br>');

 }

//     include_once('config.php');
//     $cursonome = $_POST['inputCursoTurma'];
//     $chtotal = $_POST['inputChTotal'];
    
//     $result = $mysqli_query($conexao, "INSERT INTO tab_curso(cursoTurma, chTotal) 
//     VALUES ($cursonome, $chtotal)");

 


?>