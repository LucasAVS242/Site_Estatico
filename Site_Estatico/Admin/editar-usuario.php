<?php
require_once'connect.php';
require_once'header.php';
?>
<div class="container">
    <?php
        if(isset($_POST['update'])){
            if(empty($_POST['nomeUsuario']) || empty($_POST['senha']) || empty($_POST['nivelAcesso']) || empty($_POST['dataCadastro']) || empty($_POST['cadastradoPor']) )
        {
            echo "<div class='alert alert-warning'>Por favor preencha todos os campos</div>";
        }else{
            $nomeUsuario = $_POST['nomeUsuario'];
            $senha = $_POST['senha'];
            $nivelAcesso = $_POST['nivelAcesso'];
            $dataCadastro = $_POST['dataCadastro'];
            $cadastradoPor = $_POST['cadastradoPor'];
            $sql = "UPDATE tbUsuario SET nomeUsuario='{$nomeUsuario}', senha='{$senha}', nivelAcesso='{$nivelAcesso}', dataCadastro='{$dataCadastro}', cadastradoPor='{$cadastradoPor}' WHERE idUsuario=". $_POST['idUsuario'];

            if($con->query($sql) === TRUE){
                echo "<div class='alert alert-success'>Usuário atualizado com sucesso</div>";
            }else{
                echo"<div class='alert alert-danger'>Erro: Ocorreu um erro ao atualizar as informações do usuário</div>";
            }
        }
    }

    $id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
    $sql = "SELECT * FROM tbUsuario WHERE idUsuario={$id}";
    $result = $con->query($sql);

    if($result->num_rows < 1){
        header('Location: index.php');
        exit;
    }

    $row = $result->fetch_assoc();
    ?>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="box">
                <h3><i class="fa-solid fa-pen-to-square"></i>&nbsp;Editar Usuário</h3>
                <form action="" method="POST">
                    <input type="hidden" value="<?php echo $row['idUsuario'];?>" name="idUsuario">

                    <label for="nomeUsuario">Usuário</label>
                    <input type="username" id="nomeUsuario" name="nomeUsuario" value="<?php echo $row['nomeUsuario']; ?>" class="form-control"><br>

                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" value="<?php echo $row['senha']; ?>" class="form-control"><br>

                    <label for="nivelAcesso">Nível de Acesso</label>
                    <select name="nivelAcesso" id="nivelAcesso" value="<?php echo $row['nivelAcesso']; ?>" class="form-control form-select">
                        <option value="Administrador">Administrador</option>
                        <option value="Usuario">Usuário</option>
                    </select><br>

                    <label for="dataCadastro">Data de Cadastro</label>
                    <input type="text" name="dataCadastro" id="dataCadastro" value="<?php echo $row['dataCadastro']; ?>" class="form-control read-only" readonly><br>

                    <label for="cadastradoPor">Cadastrado Por</label>
                    <input type="text" name="cadastradoPor" id="cadastradoPor" value="<?php echo $row['cadastradoPor']; ?>" class="form-control read-only" readonly><br>

                    <br>

                    <input type="submit" name="update" class="btn btn-success" value="Atualizar">
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require_once'footer.php';