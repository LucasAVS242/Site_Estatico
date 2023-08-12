<!DOCTYPE html>
<html lang="en">

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

  <style>
    form {
      display: flex;
      justify-content: center;
    }

    main h1 {
      text-align: center;
      background-color: #245c44;
      color: #fff;
    }

    button {
      background-color: #247454;
      border: none;
      padding: 7px 12px;
      border-radius: 10%;
      color: white;
    }

    .error {
      color: #FF0000;
    }
  </style>
</head>

<body>
  <?php
  // define as variáveis com valores vázios
  $usuario = $email = $senha = $rsenha = "";
  $usuarioErr = $emailErr = $senhaErr = $rsenhaErr = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["usuario"])) {
      $usuarioErr = "*Nome de usuário é obrigatório";
    } else {
      $usuario = test_input($_POST["usuario"]);
    }

    if (empty($_POST["email"])) {
      $emailErr = "*E-mail é obrigatório";
    } else {
      $email = test_input($_POST["email"]);
      // confere se o formato do e-mail é valido
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "*Formato de e-mail inválido";
      }
    }

    if (empty($_POST["senha"])) {
      $senhaErr = "*Senha é obrigatória";
    } else {
      $senha = test_input($_POST["senha"]);
    }

    if (empty($_POST["rsenha"])) {
      $rsenhaErr = "*Repita a senha";
    } else {
      $rsenha = test_input($_POST["rsenha"]);
      // confere se as senhas são iguais
      if ($senha != $rsenha) {
        $senhaErr = "*Senhas não coincidem";
      }
    }
  }

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  ?>

  <header>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
          <img class="logo" src="images/logotipo.png" alt="BVM Contabilidade">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Home</a>
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
    <div style="padding-left: 20%; padding-right: 20%;" class="container">
      <h1 style="margin-top: 2%; margin-bottom: 5%;">Cadastro</h1>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <table>
          <tr>
            <td>
              <label for="usuario">Usuário:</label>
              <br>
              <input type="text" name="usuario" size="35" value="<?php echo $usuario; ?>">
              <span class="error"><br> <?php echo $usuarioErr; ?></span>
            </td>
          </tr>
          <tr>
            <td>
              <label for="email">E-mail:</label>
              <br>
              <input type="email" name="email" size="35" value="<?php echo $email; ?>">
              <span class="error"><br> <?php echo $emailErr; ?></span>
            </td>
          </tr>
          <tr>
            <td>
              <label for="senha">Senha:</label>
              <br>
              <input type="password" name="senha" size="35" value="<?php echo $senha; ?>">
              <span class="error"><br> <?php echo $senhaErr; ?></span>
            </td>
          </tr>
          <tr>
            <td>
              <label for="senha">Repita a senha:</label>
              <br>
              <input type="password" name="rsenha" size="35" value="<?php echo $rsenha; ?>">
              <span class="error"><br> <?php echo $rsenhaErr; ?></span>
            </td>
          </tr>
          <tr>
            <td>
              <button style="margin-top: 5px;" type="submit" href="/">Cadastrar</button>
            </td>
          </tr>
        </table>
      </form>
    </div>
  </main>

  <footer-component></footer-component>
</body>

</html>