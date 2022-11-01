<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link
      rel="stylesheet"
      href="../style/login.css"
      style_type="text/css"
    />
    <link
      rel="icon"
      type="image/x-icon"
      href="../img/sagracIcone.png"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login SAGRAC</title>
  </head>

  <body>
    <br /><br /><br />

    <div class="center">
      <div class="login">
        <div class="container-head">
          <img src="../img/sagracIcone.png" />
          <h1>SAGRAC</h1>
        </div>
        <p class="bv">Bem vindo ao Sistema Automatizado de Grade  Curricular.</p>

        <form method="post" action="index.php">

          <label>Email:</label><br />
          <input
            type="text"
            name="email"
            placeholder="Digite seu email:"
            class="text-field"
          /><br />
          <label>Senha:</label><br />
          <input
            type="password"
            name="senha"
            placeholder="Digite sua senha:"
            class="password-field"
          />
          <p class="link"><a href="#">Esqueceu a senha?</a></p>

            <input type="submit" name="enviar" value="Entrar" />

          <p class="duvidas">Insira os dados acima.</p>
        </forma>
      </div>
    </div>
  </body>
  
</html>
