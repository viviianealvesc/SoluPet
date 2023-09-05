<?php
  // INICIAR SESSÃO
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.png">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/geral.css" rel="stylesheet">

    <!-- LINK DA FONTE -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    
    <!-- Custom styles for this template -->
    <link href="assets/css/login.css" rel="stylesheet">

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

      body {
        background: #B3AEE8;
      }

      .form-signin {
        border-radius: 40px;
        background: #E3C2FC;
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25), 0px 4px 4px 0px rgba(0, 0, 0, 0.25), 0px 4px 4px 0px rgba(0, 0, 0, 0.25), 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
      }

      .form-control {
        border-radius: 5px;
        background: #FFF;
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
      }

      .btn {
        border-radius: 8px;
        background: #8A81DC;
      }

      .btn:hover {
        background: #675cc7;
      }

      h1 {
        color: #370808;
        text-align: center;
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        font-family: 'Poppins', sans-serif;
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
      }


    </style>

  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form action="acoes/login.php" method="POST">

    <?php include_once 'acoes/escreve-mensagem.php' ?>
    
    <img width="180" src="image/veterinario.png" class="img-responsive" alt="Logo" class="img-fluid" max-width="50px" />

    <br><br>
    <h1 class="">Login</h1>
    <br>

    <div class="form-floating">
      <input type="cpf" class="form-control" id="floatingInput" name="cpf" placeholder="CPF" autofocus>
      <label for="floatingInput">CPF</label>
    </div>
    <br>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="senha" placeholder="Senha">
      <label for="floatingPassword">Senha</label>
    </div>
    <div class='alert'> Não tem login? <a class='btn' href='cadastro.php'> Cadastre-se </a> </div>

    <button class="btn" type="submit" name="bt_entrar">Entrar</button>
    
  </form>
</main>


 
  </body>
  <!-- SCRIPT -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</html>