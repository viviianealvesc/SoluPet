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

    <title>Cadastro do Animal</title>

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
        margin: 190px;
      }

      h1 {
        color: #370808;
        text-align: center;
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        margin: 30px;
      }

      .form-floating {
        margin: 5px 0 5px 0;
      }

      label {
        margin: 5px;
      }

      .form-control {
        border-radius: 5px;
        background: #FFF;
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
      }

      button {
        margin-bottom: 40px;
      }

      .btn {
        border-radius: 8px;
        background: #8A81DC;
      }

      .btn:hover {
        background: #b0ace0db;
      }

      </style>
</head>
<body class="text-center">
  <main class="container">
 
  <form action="" method="POST">
      <img width="300" src="./image/animal.png" alt="cad animal">

      <h1>CADASTRO DO ANIMAL</h1>
      
      <div class="row">
          <div class="form-floating col-12">
              <input type="nome" class="form-control" id="nome" name="nome" placeholder="Nome" autofocus>
              <label for="nome">Nome do Tutor:</label>
            </div>
            <br>
            <div class="form-floating col-4">
              <input type="raca" class="form-control" id="raca" name="raca" placeholder="Raça">
              <label for="raca">Raça:</label>
            </div>
            <div class="form-floating col-4">
              <input type="pelagem" class="form-control" id="pelagem" name="pelagem" placeholder="Pelagem">
              <label for="pelagem">Pelagem:</label>
            </div>
            <div class="form-floating col-4">
              <input type="altura" class="form-control" id="altura" name="altura" placeholder="Altura">
              <label for="altura">Altura:</label>
            </div>
            <div class="form-floating col-4">
              <input type="peso" class="form-control" id="peso" name="peso" placeholder="Peso">
              <label for="peso">Peso:</label>
            </div>
            <div class="form-floating col-4">
              <input type="data" class="form-control" id="data" name="data" placeholder="Data">
              <label for="data">Data de Nascimento:</label>
            </div>
            <div class="form-floating col-4">
              <input type="sexo" class="form-control" id="sexo" name="sexo" placeholder="Sexo">
              <label for="sexo">Sexo:</label>
            </div>
            <div class="form-floating col-6">
              <input type="cpf" class="form-control" id="cpf" name="cpf" placeholder="CPF">
              <label for="cpf">CPF:</label>
            </div>
            <div class="form-floating col-6">
              <input type="telefone" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
              <label for="telefone">Telefone:</label>
            </div>
            <div class="form-floating col-12">
              <input type="endereco" class="form-control" id="endereco" name="endereco" placeholder="Endereço">
              <label for="endereco">Endereço:</label>
            </div>
            <div class="form-floating col-6">
              <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
              <label for="senha">Senha:</label>
            </div>
            <div class="form-floating col-6">
              <input type="password" class="form-control" id="senhaConfir" name="senhaConfir" placeholder="Confirmar Senha">
              <label for="senhaConfir">Confirmar Senha:</label>
            </div>
            


            <div class='alert'> Não tem login? <a class='btn' href='cadastrar-usuario.php'> Cadastre-se </a> </div>
        
            <button class="btn" type="submit" name="bt_entrar">Entrar</button>
      </div>
    </form>
    </main>
</body>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</html>