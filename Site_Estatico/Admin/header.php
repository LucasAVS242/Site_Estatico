<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BVM Auditores</title>
  <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
  <!-- Link Font Awesome  -->
  <link href="../styles/fontawesome/css/all.css" rel="stylesheet">
  <!-- Link CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- Link JS Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="../styles/main.css" type="text/css">

  <script src="../Components/footer.js" type="text/javascript" defer></script>
  <script src="../Components/btn.js" type="text/javascript" defer></script>
  <script src="../Components/LoginModal.js" type="text/javascript" defer></script>
  <script src="../Components/cep.js" type="text/javascript"></script>

  <style>
    .container img {
      background-color: #eeeeee;
    }

    a {
      background: none;
    }

    .alert {
      text-align: center;
    }

    form {
      text-indent: 0;
    }

    label {
      padding-left: 2%;
    }
  </style>
</head>

<body>

  <button onclick="topFunction()" id="myBtn" title="ir para o começo"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>

  <header style="margin-bottom: 1%;">
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img class="logo" src="../images/logotipo.png" alt="BVM Contabilidade">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cadastrar</a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a style="background:none;" class="dropdown-item" href="cadastrar-usuario.php">Usuário</a></li>
                <li><a style="background:none;" class="dropdown-item" href="cadastrar-cliente.php">Cliente</a></li>
                <li><a style="background:none;" class="dropdown-item" href="cadastrar-servicos.php">Serviços</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Registros</a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a style="background:none;" class="dropdown-item" href="usuarios.php">Usuário</a></li>
                <li><a style="background:none;" class="dropdown-item" href="clientes.php">Cliente</a></li>
                <li><a style="background:none;" class="dropdown-item" href="servicos.php">Serviços</a></li>
              </ul>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Conta</a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a style="background:none;" class="dropdown-item" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;Sair</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

</body>

</html>