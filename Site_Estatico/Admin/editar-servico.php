<?php
require_once'connect.php';
require_once'header.php';
?>
<div class="container">
    <?php
        if(isset($_POST['update'])){
            if(empty($_POST['nome']) || empty($_POST['descricao']) || empty($_POST['valor']) || empty($_POST['dataCadastro']) || empty($_POST['cadastradoPor']) )
        {
            echo "<div class='alert alert-warning'>Por favor preencha todos os campos</div>";
        }else{
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $observacao = $_POST['observacao'];
            $valor = $_POST['valor'];
            $cadastradoPor = $_POST['cadastradoPor'];
            $dataCadastro = $_POST['dataCadastro'];
            $sql = "UPDATE tbServico SET nome='{$nome}', descricao='{$descricao}', observacao='{$observacao}',valor='{$valor}', dataCadastro='{$dataCadastro}', cadastradoPor='{$cadastradoPor}' WHERE idServico=". $_POST['idServico'];

            if($con->query($sql) === TRUE){
                echo "<div class='alert alert-success'>Serviço atualizado com sucesso</div>";
            }else{
                echo"<div class='alert alert-danger'>Erro: Ocorreu um erro ao atualizar as informações do Serviço</div>";
            }
        }
    }

    $id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
    $sql = "SELECT * FROM tbServico WHERE idServico={$id}";
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
                <h3><i class="fa-solid fa-pen-to-square"></i>&nbsp;Editar Serviço</h3>
                <form action="" method="POST">
                    <input type="hidden" value="<?php echo $row['idServico'];?>" name="idServico">

                    <label for="nome">Serviço</label>
                    <input type="text" id="nome" name="nome" value="<?php echo $row['nome']; ?>" class="form-control"<br>

                    <label for="descricao">descrição</label>
                    <textarea type="text" name="descricao" id="descricao" value="<?php echo $row['descricao']; ?>" class="form-control"  rows="2" ></textarea><br>

                    <label for="observacao">Observação</label>
                    <textarea type="text" name="observacao" id="observacao" value="<?php echo $row['observacao']; ?>" class="form-control" rows="3" ></textarea><br>
                   

                    <label for="valor">Valor</label><br>
                    <input type="number" min="1" step="any" name="valor" value="<?php echo $row['valor']; ?>" id="valor"class="form-control"><br>

                    <label for="dataCadastro">Data de Cadastro</label>
                    <input type="text" name="dataCadastro" id="dataCadastro" class="form-control read-only" value="<?php echo date("d/m/Y") ?>" readonly><br>

                    <label for="cadastradoPor">Cadastrado Por</label>
                    <input type="text" name="cadastradoPor" id="cadastradoPor" class="form-control read-only" value="<?php echo $_SESSION["usuario"] ?>" readonly><br>

                    <br>

                    <input type="submit" name="update" class="btn btn-success" value="Atualizar">
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require_once'footer.php';