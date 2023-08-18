<!DOCTYPE html>
<?php
    $conexao = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conexao, "db_CadastroUsuario");
    session_start();
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="styles/main.css" type="text/css">
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
            $pass = $_POST["senha"];

            // $pass = md5($pass);
            
            $consulta = mysqli_query($conexao,"SELECT * FROM tbUsuario WHERE nomeUsuario = '$user' AND senha = '$pass'") or die (mysqli_error($conexao));

            $linhas = mysqli_num_rows($consulta);
            
            if($linhas == 0){
                echo"O login falhou. Você será redirecionado para a página inicial em 4 segundos.";
                echo"<script language='javascript'>failed()</script>";
            } else {
                $_SESSION["usuario"]=$_POST["usuario"];

                $_SESSION["senha"]=$_POST["senha"];
                echo"Você foi logado com sucesso. Redirecionando em 4 segundos.";
                echo"<script language='javascript'>sucesso()</script";

            }
        ?>
    </body>
</html>