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
        <li><a href="sobreNos.php">Sobre</a></li>
        <li><a href="index.php">Início</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <sectio class="container_login login_enter">
      <h3>Login</h3>

      <!-- código PHP -->
      <?php
      if (isset($_POST["submit"])) {
        $email = addslashes(strtolower($_POST["email"]));
        $password = addslashes(($_POST["password"]));
        if ($email == "" or $password == "") {
          echo "<p style='color:rgb(147, 13, 13); font-size:small; padding-bottom:8px;' >Favor prencher todos os campos</p>";
        } else {
          $res = $l1->selectPerson($email, $password);
          if ($res) {
            $chave1 = "abcdefghijklmnopqrstuvwxyz";
            $chave2 = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $chave3 = "0123456789";
            $chave = str_shuffle($chave1 . $chave2 . $chave3);
            $tam = strlen($chave);
            $num = "";
            $qtde = rand(20, 50);
            for ($i = 0; $i < $qtde; $i++) {
              $pos = rand(0, $tam);
              $num .= substr($chave, $pos, 1);
            }

            session_start();
            $_SESSION['numlogin'] = $num;
            $_SESSION['username'] = $res["nome"];
            header("Location:index.php?num=$num");

            // codigo que falta.
          } else {
            echo "<p style='color:rgb(147, 13, 13); font-size:small; padding-bottom:8px;' >Senha ou Email incorreto.</p>";
          }
        }
      }
      ?>

      <form action="login.php" method="post" name="f_login" id="f_login">
        <label for="email">E-mail: </label>
        <input type="email" name="email" id="email" placeholder="Digite o seu E-mail" />
        <p class="msg_email">Favor informar um E-mail valido.</p>

        <label for="password">Senha: </label>
        <input type="password" name="password" id="password" placeholder="Digite a sua Senha" />
        <p class="msg_senha">Senha deve ter no mínimo 8 caracteres.</p>

        <input type="submit" name="submit" value="ENTRAR" class="login_button" />
      </form>

      <span>Não tem cadastro? <a href="cadastro.php">Cadastre-se</a>
      </span>
    </sectio>

  </main>

  <footer>
    <p>
      © <span>2023 Site de vendas de hambúrguer</span>. Todos os direitos
      reservados.
    </p>
  </footer>
  <script src="../js/scriptLogin.js"></script>
</body>

</html>