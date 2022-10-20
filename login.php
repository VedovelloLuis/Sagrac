<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="login.css" style_type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login AD</title>
</head>

<body>
<br><br><br>
<img src="none.png" align="right" width="0.5%" height="75%">
    <img src="Group.png" align="right" width="40%" height="80%">

    <div class="center">
        
        <div class="login">

            <div class="container-head">
                <img src="atribuicoespnglogo.png">
                <h1>Atribuições Disciplinares</h1>
            </div>
            

            <p class="bv">Bem vindo ao Atribuições Disciplinares.</p>

            <form method="post" action="diretorHome.php">

                <label>Email:</label><br>
                <input type="text" name="usuario" placeholder="Digite seu email:" class="text-field"><br>

                <label>Senha:</label><br>
                <input type="password" name="senha" placeholder="Digite sua senha:" class="password-field">

                <p class="link"><a href="#">Esqueceu a senha?</a></p>

                <a href="homeprofessor.php"> <input type="submit" name="enviar" value="Entrar"> </a>

                <p class="duvidas">Insira os dados acima.
                </p>

            </form>


    </div>


</body>

</html>