<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/index.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Lobster&family=Lobster+Two:ital,wght@1,700&family=Open+Sans:wght@300&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/login.css" />
  <link rel="shortcut icon" href="img/favicon.ico" />
  <title>Entrar</title>
</head>

<body>
  <form action="consulta.php" method="POST">
  <div id="sides">
    <div id="side1">
      <img src="img/side.png" alt="">
    </div>
    <div id="side2">
      <h1>Entrar</h1>
      <div class="container">
        <div id="msgError"></div>
        <div class="input-group">
          <div class="input-box">
            <label id="userLabel" for="usuario">Usuário</label>
            <input type="text" id="usuario" name="usuario" size="25" placeholder="Digite seu nome de usuário"
              required />
          </div><br>

          <div class="input-box">
            <label id="senhaLabel" for="senha">Email</label>
            <input type="varchar" id="email" name="email" placeholder="Digite sua senha" required />
            <i class="fa fa-eye" aria-hidden="true"></i>
          </div>
        </div>
         <div>
         <input type="submit">
         </div>
       <br>
        <div class="justify-center">
          <button onclick="entrar()" id="btn_entrar"> <a id="entrar" href="cardapio.php">Entrar</a></button>
        </div><br>

        <div class="justify-center">
          <hr />
        </div><br>

        <p>
          Não tem uma conta?
          <a href="cardapio.php">Cadastre-se
          </a>
        </p>
      </div>
    </div>
  </div>
</form>
  <script src="login.js"></script>
</body>

</html>