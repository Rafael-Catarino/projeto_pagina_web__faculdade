<?php
require_once "ClassLogin.php";
$l1 = new Login('127.0.0.1', 'root', 'Carate12@', 'revolutionBurguer__trabalhoFaculdade');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/reset.css" />
  <link rel="stylesheet" href="../css/header.css" />
  <link rel="stylesheet" href="../css/login.css" />
  <link rel="stylesheet" href="../css/footer.css" />
  <link rel="shortcut icon" href="../images/revolution-removebg-preview.png" type="image/x-icon">
  <title>Revolution Burguer - Login</title>
</head>

<body>
  <header>
    <div class="logo">
      <img src="../images/revolution-removebg-preview.png" alt="" />
    </div>

    <div class="titulo">
      <h1>Revolution Burguer</h1>
    </div>

    <nav>
      <ul class="links">
        <li><a href="SobreNos.php">Sobre</a></li>
        <li><a href="index.php">Início</a></li>
      </ul>
    </nav>
  </header>

  <main>

    <sectio class="container_login register">
      <h3>Cadastre-se</h3>

      <!-- Código em PHP -->

      <?php
      if (isset($_POST["cadastrar"])) {
        $name = addslashes($_POST["name"]);
        $email = addslashes(strtolower($_POST["email"]));
        $password = addslashes($_POST["password"]);
        $password_repite = addslashes($_POST["password_repite"]);
        if ($name == "" or $email == "" or $password == "") {
          echo "<p style='color:rgb(147, 13, 13); font-size:small; padding-bottom:8px;'>Favor prencher todos os campos</p>";
        } else {
          if ($password != $password_repite) {
            echo "<p style='color:rgb(147, 13, 13); font-size:small; padding-bottom:8px;'>Favor prencher as duas senhas iguais</p>";
          } else {
            $res = $l1->insertData($name, $email, $password);
            if (!$res) {
              echo "<p style='color:rgb(147, 13, 13); font-size:small; padding-bottom:8px;'>Email já cadastrado</p>";
            } else if ($res) {
              echo "<p style='color:blue; font-size:small; padding-bottom:8px;'>Cadastro realizado com sucesso</p>";
              header("Location:login.php");
            }
          }
        }
      }
      ?>

      <form method="post">
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" placeholder="Digite o seu nome" />
        <p class="msg_nome">Nome deve ter no mínimo 3 caracteres.</p>

        <label for="email-register">E-mail: </label>
        <input type="email" name="email" id="email_register" placeholder="Digite o seu E-mail" />
        <p class="msg_email">Favor informar um E-mail valido.</p>

        <label for="password">Senha: </label>
        <input type="password" name="password" id="password_register" placeholder="Digite a sua Senha" />
        <p class="msg_senha">Senha deve ter no mínimo 8 caracteres.</p>

        <label for="password">Repita sua Senha: </label>
        <input type="password" name="password_repite" id="password_register_repite" placeholder="Digite a sua Senha" />
        <p class="msg_senha_repete">Senha deve ter no mínimo 8 caracteres.</p>

        <input type="submit" value="CADASTRAR" class="register_button" name="cadastrar" />
      </form>
      <span>Já tem uma conta? <a href="login.php">Faça Login</a>
      </span>
    </sectio>

    <footer>
      <p>
        © <span>2023 Site de vendas de hambúrguer</span>. Todos os direitos
        reservados.
      </p>
    </footer>
    <script src="../js/scriptCadastro.js"></script>
</body>

</html>