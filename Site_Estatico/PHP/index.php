<?php
require_once'connect.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>BVM Auditores</title>
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
  <!-- Link CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- Link JS Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="styles/main.css" type="text/css">

  <script src="Components/footer.js" type="text/javascript" defer></script>
  <script src="Components/btn.js" type="text/javascript" defer></script>
</head>

<body>


  <button onclick="topFunction()" id="myBtn" title="ir para o começo">&#129093;</button>


  <header>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
          <img class="logo" src="images/logotipo.png" alt="BVM Contabilidade">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="PHP/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Servicos.html">Serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="QuemSomos.html">Quem somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Contato.html">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" "insert.php">Adicionar usuario</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" "users.php">Usuarios</a>
            </li>


<li><a href="users.php">All Users</a></li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Conta</a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="Login.html">Entrar</a></li>
                  <li><a class="dropdown-item" href="Cadastro.html">Cadastrar</a></li>
              </ul>
            </li>
        </ul>
        </div>
      </div>
    </nav>
  </header>


  <main>
    <div class="container">
      <div class="wrap">
        <img class="rounded" src="images/bg/office3.jpg" height="500px" width="1100px" />
        <div class="content">
          <h1>Contabilidade de confiança para o seu negócio</h1>
        </div>
      </div>
    </div>
  </main>


  <footer-component></footer-component>


</body>

</html>