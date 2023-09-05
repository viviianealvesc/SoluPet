<?php 

  require_once 'acoes/conexao.php';
  require_once 'acoes/verifica-logado.php';
  $id_logado = $_SESSION['idusuario'];

  $sql = "SELECT * FROM usuarios WHERE idusuario = '$id_logado';";

  $resultado = mysqli_query($con, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  $idusuario = $dados['idusuario'];
  $nome = $dados['nome'];
  $cnpj = $dados['cnpj'];
  $rg = $dados['rg'];
  $cpf = $dados['cpf'];
  $data_nasc = $dados['data_nasc'];
  $endereco = $dados['endereco'];
  $cep = $dados['cep'];
  $municipio = $dados['municipio'];
  $bairro = $dados['bairro'];
  $fone = $dados['fone'];
  $celular = $dados['celular'];
  $email = $dados['email'];

  $_SESSION['nome'] = $nome;
  $_SESSION['cnpj'] = $cnpj;
  $_SESSION['rg'] = $rg;
  $_SESSION['cpf'] = $cpf;
  $_SESSION['data_nasc'] = $data_nasc;
  $_SESSION['nome'] = $nome;
  $_SESSION['nome'] = $nome;
?>