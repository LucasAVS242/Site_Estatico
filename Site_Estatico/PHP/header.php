<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>BVM Auditores</title>
  <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
  <!-- Link CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- Link JS Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="../styles/main.css" type="text/css">

  <script src="Components/footer.js" type="text/javascript" defer></script>
  <script src="Components/btn.js" type="text/javascript" defer></script>
  <script src="Components/LoginModal.js" type="text/javascript" defer></script>

  <style>
    .container img {
        background-color: #eeeeee;
    }
  </style>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img class="logo" src="../images/logotipo.png" alt="BVM Contabilidade">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="insert.php">Adicionar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="users.php">Usuários</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">Conta</a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../index.html">Sair</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

</body>

</html>