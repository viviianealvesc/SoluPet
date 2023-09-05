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
      <img width="300" src="./image/veterinario.png" alt="">

      <h1>CADASTRO DO MED. VETERINÁRIO</h1>
      
      <div class="row">
          <div class="form-floating col-12">
              <input type="nome" class="form-control" id="nome" name="nome" placeholder="Nome" autofocus>
              <label for="nome">Nome:</label>
            </div>
            <br>
            <div class="form-floating col-3">
              <input type="cnpj" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ">
              <label for="cnpj">CNPJ:</label>
            </div>
            <div class="form-floating col-3">
              <input type="rg" class="form-control" id="rg" name="rg" placeholder="RG">
              <label for="rg">RG:</label>
            </div>
            <div class="form-floating col-3">
              <input type="cpf" class="form-control" id="cpf" name="cpf" placeholder="CPF">
              <label for="cpf">CPF:</label>
            </div>
            <div class="form-floating col-3">
              <input type="date" class="form-control" id="data" name="data" placeholder="Data de Nascimento">
              <label for="data">Data de Nascimento:</label>
            </div>
            <div class="form-floating col-12">
              <input type="endereco" class="form-control" id="endereco" name="endereco" placeholder="Endereço">
              <label for="endereco">Endereço da Clínica:</label>
            </div>
            <div class="form-floating col-4">
              <input type="cep" class="form-control" id="cep" name="cep" placeholder="CEP">
              <label for="cep">CEP:</label>
            </div>
            <div class="form-floating col-4">
              <input type="municipio" class="form-control" id="municipio" name="municipio" placeholder="Município">
              <label for="municipio">Município:</label>
            </div>
            <div class="form-floating col-4">
              <input type="bairro" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
              <label for="bairro">Bairro:</label>
            </div>
            <div class="form-floating col-6">
              <input type="telefone" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
              <label for="telefone">Telefone:</label>
            </div>
            <div class="form-floating col-6">
              <input type="celular" class="form-control" id="celular" name="celular" placeholder="Celular">
              <label for="celular">Celular:</label>
            </div>
            <div class="form-floating col-12">
              <input type="e-mail" class="form-control" id="email" name="email" placeholder="E-mail">
              <label for="email">E-mail:</label>
            </div>
            <div class="form-floating col-6">
              <input type="password" class="form-control" id="senhaConfir" name="senhaConfir" placeholder="Senha">
              <label for="senhaConfir">Senha:</label>
            </div>
            <div class="form-floating col-6">
              <input type="password" class="form-control" id="senha" name="senha" placeholder="Confirmar Senha">
              <label for="senha">Confirmar Senha:</label>
            </div>


            <div class='alert'> Não tem login? <a class='btn' href='cadastrar-usuario.php'> Cadastre-se </a> </div>
        
            <button class="btn" type="submit" name="bt_entrar">Entrar</button>
      </div>
    </form>
    </main>
</body>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</html>