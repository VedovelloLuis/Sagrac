<!DOCTYPE html>
<html lang="en">
<head><head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>SAGRAC -  Edita</title>
    <link
      rel="icon"
      type="image/x-icon"
      href="../img/sagracIcone.ico"
    />
    <link
      rel="stylesheet"
      href="../../node_modules/bootstrap/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="../style/diretorStyle.css" />
    <link href="../style/diretorHome.css" rel="stylesheet" />
  </head>
</head>
<body>

<?php 

include ('config.php');

$id = $_POST['Curso'];

echo $id;

?>


<table class="content" border="1">
          <thead class="thead center">
            <th>Curso</th>
            <th>Carga Horária</th>
            <th>Período</th>
            <th>Sigla/Código</th>
          </thead>
          <tbody id="tbody">
            <tr class="center">
              <td>Análise e Desenvolvimento de Sistemas</td>
              <td>800h</td>
              <td>Vespertino</td>
              <td>ADS</td>
            </tr>
          </tbody>
        </table>
        <form method="POST" action="#">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nome">Nome do Curso</label>
              <input
                type="text"
                class="form-control"
                name="nome"
                id="nome"
                placeholder="ADS"
              />
            </div>
            <div class="form-group col-md-6">
              <label for="carga">Carga Horária em Horas</label>
              <input
                type="number"
                class="form-control"
                name="carga"
                id="carga"
                placeholder="80"
              />
            </div>
            <div class="col-md-6 mt-4">
              <div class="form-check form-check-inline">
                <input
                  class="form-check-input"
                  type="checkbox"
                  id="inlineCheckbox1"
                  value="option1"
                />
                <label class="form-check-label" for="inlineCheckbox1"
                  >Matutino</label
                >
              </div>
              <div class="form-check form-check-inline">
                <input
                  class="form-check-input"
                  type="checkbox"
                  id="inlineCheckbox2"
                  value="option2"
                  checked
                />
                <label class="form-check-label" for="inlineCheckbox2"
                  >Vespertino</label
                >
              </div>
              <div class="form-check form-check-inline">
                <input
                  class="form-check-input"
                  type="checkbox"
                  id="inlineCheckbox3"
                  value="option3"
                  checked
                />
                <label class="form-check-label" for="inlineCheckbox3"
                  >Noturno</label
                >
              </div>

            </div>
          </div>
          <div class="container__button">
            <input
              type="submit"
              class="btn btn-primary"
              name="enviar"
              value="Editar Curso"
              method="#"
            />
          </div>
        </form>
        <table class="content" border="1">
          <thead class="thead center">
            <th>Disciplina</th>
            <th>Carga Horária</th>
            <th>Código</th>
            <th>Aulas Semanais</th>
            <th>Código do  Professor</th>
          </thead>
          <tbody id="tbody">
            <tr class="center">
              <td>Engenharia de Software</td>
              <td>80h</td>
              <td>ADS01</td>
              <td>2</td>
              <td>1</td>
            </tr>
            <tr class="center">
              <td>Estrutura de Dados</td>
              <td>80h</td>
              <td>ADS02</td>
              <td>2</td>
              <td>2</td>
            </tr>
            <tr class="center">
              <td>Interação Humano-Computador</td>
              <td>80h</td>
              <td>ADS03</td>
              <td>1</td>
              <td>3</td>
            </tr>
            <tr class="center">
              <td>Técnicas Av. Banco de Dados </td>
              <td>80h</td>
              <td>ADS04</td>
              <td>1</td>
              <td>4</td>
            </tr>
            <tr class="center">
              <td>Matemática Discreta</td>
              <td>80h</td>
              <td>ADS05</td>
              <td>1</td>
              <td>5</td>
            </tr>
            <tr class="center">
              <td>Técnicas Avançadas de Programação</td>
              <td>80h</td>
              <td>ADS06</td>
              <td>1</td>
              <td>3</td>
            </tr>
            </tr>
          </tbody>
        </table>
        <form method="POST" action="#">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nome">Nome da Disciplina</label>
              <input
                type="text"
                class="form-control"
                name="nomeDisciplina"
                id="nomeDisciplina"
                placeholder="Nome da Disciplina"
                value="Java Orientado a Objetos"
              />
            </div>
            <div class="form-group col-md-6">
              <label for="carga">Carga Horária em Horas</label>
              <input
                type="number"
                class="form-control"
                name="carga"
                id="carga"
                placeholder="Carga Horária em Horas"
                value="80"
              />
            </div>
          </div>
          <div class="container__button">
            <input
              type="submit"
              class="btn btn-primary"
              name="enviar"
              value="Editar Disciplina"
              method="#"
            />
          </div>
        </form>

        </body>
</html>