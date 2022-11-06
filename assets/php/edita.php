<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>SAGRAC - Edita</title>
        <link rel="icon" type="image/x-icon" href="../img/sagracIcone.ico" />
        <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../style/diretorStyle.css" />
        <link href="../style/diretorHome.css" rel="stylesheet" />
    </head>
</head>

<body background="transparent">
<br>
    <?php

    include('config.php');
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['selecionar'])) {
            $id = $_POST['Curso'];
            $selecao = "SELECT * FROM tab_curso WHERE cursoId = $id";
            $result_query = mysqli_query($conexao, $selecao);
            if (mysqli_query($conexao, $selecao)) {
                echo "<table class='content' border='1'>
                <thead class='thead center'>
                <th>ID</th>
                <th>Curso</th>
                <th>Carga Horária</th>
                <th>Período</th>
                <th>Sigla/Código</th>
                </thead>
                <tbody id='tbody'>";
                while ($row = mysqli_fetch_array($result_query)) {
                    $periodo = $row['periodo'];
                    $cursonome = $row['cursoTurma'];
                    $carga = $row['chTotal'];
                    $sigla = $row['sigla'];
                }
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
            }
        } else {
            // Assumir Edita

            $id = $_POST['id'];
            $periodo = $_POST['periodo'];
            $cursonome = $_POST['nome'];
            $carga = $_POST['carga'];
            $sigla = $_POST['sigla'];

            $alterando = "update tab_curso set cursoTurma='$cursonome', periodo='$periodo', chTotal='$carga', sigla='$sigla'
        where cursoId='$id'";

            $resultado = mysqli_query($conexao, $alterando);

            if (!$resultado) {
                echo "<br>";
                echo "Erro na Gravação do Registro";
                return;
            } else {
                echo "<table class='content' border='1'>
                <thead class='thead center'>
                <th>ID</th>
                <th>Curso</th>
                <th>Carga Horária</th>
                <th>Período</th>
                <th>Sigla/Código</th>
                </thead>
                <tbody id='tbody'>";
            }
        }
    }
    ?>
    
    <tr class='center'>
        <td><?php echo "$id" ?></td>
        <td><?php echo "$cursonome" ?></td>
        <td><?php echo "$carga" ?>h</td>
        <td><?php echo "$periodo" ?></td>
        <td><?php echo "$sigla" ?></td>
    </tr>
    </tbody>
    </table>
    <br>
    <form method='POST' action='edita.php'>
        <div class='form-row'>
            <div class='form-group col-md-6'>
                <label for='nome'>Nome do Curso</label>
                <input type='text' class='form-control' name='nome' id='nome' value="<?php echo "$cursonome" ?>" placeholder="<?php echo "$cursonome" ?>" />
            </div>
            <div class='form-group col-md-6'>
                <label for='carga'>Carga Horária em Horas</label>
                <input type='number' class='form-control' name='carga' id='carga' value="<?php echo "$carga" ?>" placeholder="<?php echo "$carga" ?>" />
            </div>
            <div class='form-group col-md-6'>
                <label for='sigla'>Sigla</label>
                <input type='text' class='form-control' name='sigla' id='sigla' value="<?php echo "$sigla" ?>" placeholder="<?php echo "$sigla" ?>" />
            </div>
            <div class='form-group col-md-6'>
                <label for='id'>ID</label>
                <input type='text' class='form-control' name='id' id='id' value="<?php echo "$id" ?>" placeholder="<?php echo "$id" ?>" readonly/>
            </div>
        </div>
        <div class="col-md-6 mt-4">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="periodo" value="Matutino" name="periodo" <?php
                                                                                                            if ($periodo == 'Matutino') {
                                                                                                                print "checked";
                                                                                                            }
                                                                                                            ?> />
                <label class="form-check-label" for="inlineCheckbox1">Matutino</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="periodo" value="Vespertino" name="periodo" <?php
                                                                                                            if ($periodo == 'Vespertino') {
                                                                                                                print "checked";
                                                                                                            }
                                                                                                            ?> />
                <label class="form-check-label" for="inlineCheckbox2">Vespertino</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="periodo" value="Noturno" name="periodo" <?php
                                                                                                            if ($periodo == 'Noturno') {
                                                                                                                print "checked";
                                                                                                            }
                                                                                                            ?> />
                <label class="form-check-label" for="inlineCheckbox3">Noturno</label>
            </div>

        </div>
        </div>
        <div class="container__button">
            <input type="submit" class="btn btn-primary" name="alterar" id="alterar" value="Editar Curso" method="#" />
        </div>
    </form>

</body>

</html>