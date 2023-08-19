<?php
require_once'connect.php';
require_once'header.php';
?>
<div class="container">
    <?php
        if(isset($_POST['update'])){
            if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['address']) || empty($_POST['contact']) )
        {
            echo "Por favor preencha todos os campos";
        }else{
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $address = $_POST['address'];
            $contact = $_POST['contact'];
            $sql = "UPDATE tbUsuario SET firstname='{$firstname}', lastname='{$lastname}', address='{$address}', contact='{$contact}' WHERE user_id=". $_POST['userid'];

            if($con->query($sql) === TRUE){
                echo "<div class='alert alert-success'>Usuário atualizado com sucesso</div>";
            }else{
                echo"<div class='alert alert-danger'>Erro: Ocorreu um erro ao atualizar as informações d usuário</div>";
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
                    <input type="text" name="nivelAcesso" id="nivelAcesso" value="<?php echo $row['nivelAcesso']; ?>" class="form-control"><br>

                    <label for="dataCadastro">Data de Cadastro</label>
                    <input type="date" name="dataCadastro" id="dataCadastro" value="<?php echo $row['dataCadastro']; ?>" class="form-control"><br>

                    <label for="cadastradoPor">Cadastrado Por</label>
                    <input type="text" name="cadastradoPor" id="cadastradoPor" value="<?php echo $row['cadastradoPor']; ?>" class="form-control"><br>

                    <br>

                    <input type="submit" name="update" class="btn btn-success" value="Atualizar">
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require_once'footer.php';