<?php
$conexao = mysqli_connect("localhost", "root", "");
mysqli_select_db($conexao, "db_CadastroUsuario");
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticando...</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link href="styles/fontawesome/css/all.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/main.css" type="text/css">

    <style>
        .container {
            
            text-align: center;
        }
    </style>

    <script language="javascript">
        function sucesso(){
            setTimeout("window.location='Admin/index.php'", 4000);
        }
        function failed(){
            setTimeout("window.location='index.html'", 4000);
        }
    </script>
</head>

<body>


    <?php
    $user = $_POST["usuario"];
    $pass = md5($_POST["senha"]);

    // $pass = md5($pass);

    $consulta = mysqli_query($conexao, "SELECT * FROM tbUsuario WHERE nomeUsuario = '$user' AND senha = '$pass'") or die(mysqli_error($conexao));

    $linhas = mysqli_num_rows($consulta);

    if ($linhas == 0) {
        echo "<div class='container alert alert-danger'><i class='fa-solid fa-xmark'></i>&nbsp;O login falhou. Usuário ou senha incorretos. Você será redirecionado para a página inicial em 4 segundos.</div>";
        echo "<script language='javascript'>failed()</script>";
    } else {
        $_SESSION["usuario"] = $_POST["usuario"];

        $_SESSION["senha"] = $_POST["senha"];
        echo "<div class='container alert alert-success'><i class='fa-solid fa-check'></i>&nbsp;Você foi logado com sucesso. Redirecionando em 4 segundos.</div>";
        echo "<script language='javascript'>sucesso()</script>";
    }
    ?>
   <div class="posicao">
<div class="loader">
    
  <div class="cell d-0"></div>
  <div class="cell d-1"></div>
  <div class="cell d-2"></div>

  <div class="cell d-1"></div>
  <div class="cell d-2"></div>
  
  
  <div class="cell d-2"></div>
  <div class="cell d-3"></div>
  
  
  <div class="cell d-3"></div>
  <div class="cell d-4"></div>
  
  
</div>
    </div>


</body>

</html>