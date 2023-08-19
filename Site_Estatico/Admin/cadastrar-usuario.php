<?php
require_once 'connect.php';
require_once 'header.php';
?>

<div class="container">
    <?php
    if (isset($_POST['addnew'])) {

        if (
            empty($_POST['nomeUsuario']) || empty($_POST['senha']) ||
            empty($_POST['nivelAcesso']) || empty($_POST['dataCadastro']) || empty($_POST['dataCadastro'])
        ) {
            echo "<div class='alert alert-danger'>Por favor preencha todos os campos</div>";
        } else {

            $nomeUsuario = $_POST['nomeUsuario'];
            $senha = $_POST['senha'];
            $nivelAcesso = $_POST['nivelAcesso'];
            $dataCadastro = $_POST['dataCadastro'];
            $cadastradoPor = $_POST['cadastradoPor'];

            $sql = "INSERT INTO tbUsuario(nomeUsuario,senha,nivelAcesso,dataCadastro,cadastradoPor)
                VALUES('$nomeUsuario','$senha','$nivelAcesso','$dataCadastro','$cadastradoPor')";

            if ($con->query($sql) === TRUE) {

                echo "<div class='alert alert-success'>Usuário adicionado com sucesso</div>";
            } else {
                echo "<div class='alert alert-danger'>Erro: Ocorreu um erro ao atualizar a informação do usuário</div>";
            }
        }
    }

    ?>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="box">
                <h3><i class="fa-solid fa-plus"></i>&nbsp;Cadastrar Usuário</h3>
                <form action="" method="POST">
                    <label for="nomeUsuario">Usuário</label>
                    <input type="username" id="nomeUsuario" name="nomeUsuario" class="form-control"><br>

                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control"><br>

                    <label for="nivelAcesso">Nível de Acesso</label><br>
                    <select name="nivelAcesso" id="nivelAcesso" class="form-control">
                        <option value="Administrador">Administrador</option>
                        <option value="Usuario">Usuário</option>
                    </select><br>

                    <label for="dataCadastro">Data de Cadastro</label>
                    <input type="text" name="dataCadastro" id="dataCadastro" class="form-control read-only" value="<?php echo date("d/m/Y") ?>" readonly><br>

                    <label for="cadastradoPor">Cadastrado Por</label>
                    <input type="text" name="cadastradoPor" id="cadastradoPor" class="form-control read-only" value="<?php echo $_SESSION["usuario"] ?>" readonly><br>

                    <br>

                    <input type="submit" name="addnew" class="btn btn-success" value="Adicionar">

                </form>
            </div>
        </div>
    </div>
</div>

<?php

require_once 'footer.php';
