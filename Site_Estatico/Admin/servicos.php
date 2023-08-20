<?php
require_once 'connect.php';
require_once 'header.php';
?>

<div class="container">
    <?php
    if (isset($_POST['addnew'])) {

        if (
            empty($_POST['nome']) || empty($_POST['descricao']) ||
            empty($_POST['valor']) || empty($_POST['dataCadastro']) || empty($_POST['cadastraoPor'])
        ) {
            echo "<div class='alert alert-danger'>Por favor preencha todos os campos</div>";
        } else {

            $nome = $_POST['nome'];
            $descricao = md5($_POST['descricao']);
            $observacao = $_POST['observacao'];
            $valor = $_POST['valor'];
            $cadastradoPor = $_POST['cadastradoPor'];
            $dataCadastro = $_POST['dataCadastro'];

            $sql = "INSERT INTO tbServico(nome,descricao,observacao,valor,dataCadastro,cadastradoPor)
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
                <h3><i class="fa-solid fa-plus"></i>&nbsp;Cadastrar serviço</h3>
                <form action="" method="POST">
                    <label for="nome">Serviço</label>
                    <input type="text" id="nome" name="nome" class="form-control"><br>

                    <label for="descricao">descrição</label>
                    <textarea id="descricao" rows="2" id="descricao" class="form-control"></textarea>

                    <label for="observacao">Observação</label>
                    <textarea id="observacao" rows="3" id="observacao" class="form-control"></textarea>
                   <!-- <input type="text" name="descricao" id="descricao" class="form-control"><br>-->

                    <label for="valor">Valor</label><br>
                    <input type="text" name="valor" id="valor"class="form-control"><br>

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
