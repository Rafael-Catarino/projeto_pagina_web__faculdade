<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-widdth, initial-scale-1.0" />
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" type="text/css" href="../css/banner.css" />
  <link rel="stylesheet" href="../css/hamburguer.css">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="shortcut icon" href="../images/revolution-removebg-preview.png" type="image/x-icon">
  <title>Revolution Burguer</title>
</head>

<body>
  <header>
    <div class="logo">
      <img src="../images/revolution-removebg-preview.png" alt="" />
    </div>

    <div class="title">
      <h1>Revolution Burguer</h1>
    </div>

    <nav>
      <ul class="links">
        <li><a href="sobreNos.php">Sobre</a></li>
        <li><a href="login.php">
            <?php
            session_start();
            if (isset($_SESSION["username"])) {
              echo "Olá, " . $_SESSION["username"];
            } else {
              echo "Login";
            }
            ?>
          </a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section class="banner">
      <img src="../images/banner.jpg" alt="imagem de um sandwich" />
    </section>

    <section class="menu-hamburguer">
      <h2>Conheça as nossas opções de Hambúrgueres:</h2>

      <div class="hamburguer">
        <img class="img-left" src="../images/REV one.webp" alt="imagem Rev One" />
        <div>
          <h3>Rev One</h3>
          <p><span>Descrição:</span> Um clássico que nunca sai de moda. Carne suculenta, queijo cheddar, cebola
            caramelizada e molho especial.<br><br><span>+ Batata + Refrigerante</span></p>
          <p><span>Preço:</span> R$ 15,00</p>
          <button>Comprar</button>
        </div>
      </div>

      <div class="hamburguer">
        <div>
          <h3>Rev Top</h3>
          <p><span>Descrição:</span> Um hambúrguer de primeira qualidade com carne angus, queijo suíço, queijo cheddar,
            manjericão, tomate e nosso molho secreto.<br><br><span>+ Batata + Refrigerante</span></p>
          <p><span>Preço:</span> R$ 20,00</p>
          <button>Comprar</button>
        </div>
        <img class="img-right" src="../images/REV top.webp" alt="imagem Rev Top">
      </div>

      <div class="hamburguer">
        <img class="img-left" src="../images/Big REV.webp" alt="imagem Big Rev">
        <div>
          <h3>Big Rev</h3>
          <p><span>Descrição:</span> Para os verdadeiros amantes de hambúrguer.pão coberto com queijo, uma enorme carne
            angus, queijo cheddar, bacon, alface, tomate,cebola roxa e maionese.<br><br><span>+ Batata +
              Refrigerante</span></p>
          <p><span>Preço:</span> R$ 23,00</p>
          <button>Comprar</button>
        </div>
      </div>

      <div class="hamburguer">
        <div>
          <h3>Mine Rev</h3>
          <p><span>Descrição:</span> Um hambúrguer do tamanho perfeito com carne angus, queijo cheddar, cebola
            caramelizada, alface e nosso molho de iogurte especial.<br><br><span>+ Batata + Refrigerante</span></p>
          <p><span>Preço:</span> R$ 12,00</p>
          <button>Comprar</button>
        </div>
        <img class="img-right" src="../images/Mine REV.webp" alt="imagem Mine Rev">
      </div>

      <div class="hamburguer">
        <img class="img-left" src="../images/REV master.webp" alt="imagem REV master">
        <div>
          <h3>Rev Master</h3>
          <p><span>Descrição:</span> O mestre dos hambúrgueres! Uma criação exclusiva do chef que muda todo mês. este
            mês temos nosso tradicional hamburguer angus,quejo cheddar,queijo mussarela empanado e frito, manjericão e
            nosso molho de iogurte especial.<br><br><span>+ Batata + Refrigerante</span></p>
          <p><span>Preço:</span> R$ 30,00</p>
          <button>Comprar</button>
        </div>
      </div>

      <div class="hamburguer">
        <div>
          <h3>Rev Double Cheese</h3>
          <p><span>Descrição:</span> Uma explosão de sabor para os amantes de queijo! Dois hambúrgueres suculentos,
            queijo cheddar derretido, bacon, picles e nossa maionese especial.<br><br><span>+ Batata +
              Refrigerante</span></p>
          <p><span>Preço:</span> R$ 28,00</p>
          <button>Comprar</button>
        </div>
        <img class="img-right" src="../images/REV double cheese.webp" alt="imagem Rev Double Cheese">
      </div>

      <div class="hamburguer">
        <img class="img-left" src="../images/REV insane.webp" alt="imagem Rev Double Cheese">
        <div>
          <h3>Rev Insane</h3>
          <p><span>Descrição:</span> >Para os corajosos! Um hambúrguer diferente de tudo que você ja viu, com dois
            pedaços generosos bacon, cebola roxa, alface, cogumelo salteado e nosso molho secreto.<br><br><span>+ Batata
              + Refrigerante</span></p>
          <p><span>Preço:</span> R$ 28,00</p>
          <button>Comprar</button>
        </div>
      </div>

      <div class="hamburguer">
        <div>
          <h3>Rev Dark</h3>
          <p><span>Descrição:</span> Uma viagem ao lado sombrio da gastronomia. Um hambúrguer com carne de cordeiro,
            queijo de cabra, alface, pepino, cogumelo salteado e chutney de figo.<br><br><span>+ Batata +
              Refrigerante</span></p>
          <p><span>Preço:</span> R$ 32,00</p>
          <button>Comprar</button>
        </div>
        <img class="img-right" src="../images/REV dark.webp" alt="imagem Rev Dark">
      </div>
    </section>

    <footer>
      <p>
        © <span>2023 Site de vendas de hambúrguer</span>. Todos os direitos
        reservados.
      </p>
    </footer>
    <script src="../js/scriptIndex.js"></script>
</body>

</html>